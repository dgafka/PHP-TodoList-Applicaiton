<?php

namespace Dgafka\Todolist\Business\Domain\Service\User\Command;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use Dgafka\Todolist\Business\Domain\Factory\Factory;
use Dgafka\Todolist\Business\Domain\Repository\Repository;
use Dgafka\Todolist\Business\Domain\Service\Service;

class Insert implements Service
{
	private $factory;
	private $repository;

	public function __construct(Factory $factory, Repository $repository)
	{
		$this->factory    = $factory;
		$this->repository = $repository;
	}

	public function execute(Request $request) {

		if(!($request instanceof RequestUser)) {
			throw new \LogicException('Passed request is not User Request.');
		}

		$user = $this->factory->create($request);

		return $this->repository->save($user);
	}

}
