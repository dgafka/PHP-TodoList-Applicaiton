<?php

namespace Dgafka\Todolist\Business\Domain\Repository;


use Dgafka\Todolist\Business\Domain\Entity\Entity;

interface Repository {

	public function findById($id);

	public function findOneBy($params);

	public function findBy($params);

	public function remove($id);

	public function save(Entity $entity);

}