<?php

namespace Dgafka\Todolist\Business\Domain\DTO;

use Dgafka\Todolist\Business\Domain\Entity\User;

class RequestTask implements Request
{

	/**
	 * @var int
	 */
	protected $id;
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var string
	 */
	protected $description;
	/**
	 * @var \Datetime
	 */
	protected $date;
	/**
	 * @var User
	 */
	protected $user;


    public function __construct($id, $name, $description, \DateTime $date, User $user)
    {
        $this->id = $id;
	    $this->name = $name;
	    $this->description = $description;
	    $this->date = $date;
	    $this->user = $user;
    }

	/**
	 * @return \Datetime
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return User
	 */
	public function getUser()
	{
		return $this->user;
	}

}
