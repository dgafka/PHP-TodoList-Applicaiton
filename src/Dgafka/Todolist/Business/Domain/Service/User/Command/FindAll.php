<?php

namespace Dgafka\Todolist\Business\Domain\Service\User\Command;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use Dgafka\Todolist\Business\Domain\Factory\Factory;
use Dgafka\Todolist\Business\Domain\Factory\UserFactory;
use Dgafka\Todolist\Business\Domain\Repository\Repository;
use Dgafka\Todolist\Business\Domain\Service\Service;

class FindAll implements Service
{
	/** Factory to create instance
	 * @var Repository
	 */
	private $repository;

	public function __construct(Repository $repository)
	{
		$this->factory = $repository;
	}

	public function execute(Request $request) {

		$users = $this->repository->findAll();

		return $users;
	}

}
