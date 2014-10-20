<?php

namespace Dgafka\Todolist\Business\Domain\Repository;


interface Repository {

	public function findById();

	public function findOneBy();

	public function findBy();

	public function save();
} 