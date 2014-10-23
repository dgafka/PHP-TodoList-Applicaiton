<?php

namespace Dgafka\Todolist\Business\Domain\Entity;

class User implements Entity
{

	/** Identity of User
	 * @var int
	 */
	protected $id;
	/** User name
	 * @var string
	 */
	protected $name;
	/** User password
	 * @var string
	 */
	protected $password;
	/** User email
	 * @var string
	 */
	protected $email;



    public function __construct($name, $password, $email)
    {
	    $this->name     = $name;
	    $this->password = $password;
	    $this->email    = $email;
    }

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
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
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->password = $password;
	}

}
