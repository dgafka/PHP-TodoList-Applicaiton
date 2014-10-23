<?php

namespace Dgafka\Todolist\Application\Persistent\Repository;


use Dgafka\Todolist\Business\Domain\Entity\Entity;
use Doctrine\ODM\MongoDB\DocumentManager;

class UserRepository implements \Dgafka\Todolist\Business\Domain\Repository\UserRepository {

	private $userEntity = '\Dgafka\Todolist\Business\Domain\Entity\User';

	/**
	 * @var DocumentManager
	 */
	private $dm;

	public function __construct($dm) {
		$this->dm = $dm;
	}

	public function findAll() {
		return $this->dm->getRepository($this->userEntity)->findAll();
	}

	public function findById($id)
	{
		return $this->dm->getRepository($this->userEntity)->find($id);
	}

	public function findOneBy($params)
	{
		// TODO: Implement findOneBy() method.
	}

	public function findBy($params)
	{
		// TODO: Implement findBy() method.
	}

	public function remove($id)
	{
		// TODO: Implement remove() method.
	}

	public function save(Entity $entity)
	{
		$this->dm->persist($entity);
		$this->dm->flush();
	}


} 