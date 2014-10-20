<?php

namespace Dgafka\Todolist\Business\Domain\Entity;

class Task
{

	/** Identity of Task
	 * @var int
	 */
	protected $id;
	/** Name of the task
	 * @var string
	 */
	protected $name;
	/** Description of the task
	 * @var string
	 */
	protected $description;
	/** Task date
	 * @var \DateTime
	 */
	protected $time;
	/** Task owner
	 * @var User
	 */
	protected $user;


    public function __construct($id, $name, $description, \DateTime $time)
    {
        $this->id          = $id;
	    $this->name        = $name;
	    $this->description = $description;
	    $this->time        = $time;
    }

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return \DateTime
	 */
	public function getTime()
	{
		return $this->time;
	}

	/**
	 * @param \DateTime $time
	 */
	public function setTime(\DateTime $time)
	{
		$this->time = $time;
	}

	/**
	 * @return User
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

}
