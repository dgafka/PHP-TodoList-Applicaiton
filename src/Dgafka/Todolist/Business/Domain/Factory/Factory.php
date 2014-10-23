<?php

namespace Dgafka\Todolist\Business\Domain\Factory;


use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\Repository\Repository;

abstract class Factory {

	protected  $repository;

	public function __construct(Repository $repository) {
		$this->repository = $repository;
	}

	public abstract function create(Request $request);

} 