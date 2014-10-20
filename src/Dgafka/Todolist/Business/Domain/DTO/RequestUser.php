<?php

namespace Dgafka\Todolist\Business\Domain\DTO;

class RequestUser implements Request
{

	/**
	 * @var int
	 */
	public $id;
	/**
	 * @var string
	 */
	public $name;
	/**
	 * @var string
	 */
	protected $password;
	/**
	 * @var string
	 */
	public $email;


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
    public function getPassword()
    {
        return $this->password;
    }
}
