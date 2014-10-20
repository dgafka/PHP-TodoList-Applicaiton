<?php

namespace Dgafka\Todolist\Business\Domain\Entity;

class Task implements Entity
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
	protected $date;
	/** Task owner
	 * @var User
	 */
	protected $user;


    public function __construct($id, $name, $description, \DateTime $date)
    {
        $this->id          = $id;
	    $this->name        = $name;
	    $this->description = $description;
	    $this->date        = $date;
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
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @param \DateTime $date
	 */
	public function setDate(\DateTime $date)
	{
		$this->date = $date;
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
