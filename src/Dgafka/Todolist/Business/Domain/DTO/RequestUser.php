<?php

namespace Dgafka\Todolist\Business\Domain\DTO;

class RequestUser implements Request
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
	protected $password;
	/**
	 * @var string
	 */
	protected $email;


    public function __construct($id, $name, $password, $email)
    {
		$this->id       = $id;
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
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}

}
