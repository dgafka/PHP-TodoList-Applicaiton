<?php

namespace Dgafka\Todolist\Business\Domain\Service\User\Command;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use Dgafka\Todolist\Business\Domain\Factory\Factory;
use Dgafka\Todolist\Business\Domain\Repository\Repository;
use Dgafka\Todolist\Business\Domain\Service\Service;

class Update implements Service
{

	/** Repository to fetch from persistent layer
	 * @var Repository
	 */
	private $repository;

	public function __construct(Repository $repository)
	{
		$this->repository = $repository;
	}

	public function execute(Request $request) {

		if(!$request instanceof RequestUser) {
			throw new \LogicException('Error');
		}

		/** @var \Dgafka\Todolist\Business\Domain\Entity\User $user */
		$user = $this->repository->findBy($request->getId());
		if($user) {
			$user->setName($request->getName());
			$this->repository->save($user);
		}

		return $user;
	}

}
