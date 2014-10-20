<?php

namespace Dgafka\Todolist\Business\Domain\DTO;

use Dgafka\Todolist\Business\Domain\Entity\User;

class RequestTask implements Request
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
	public $description;
	/**
	 * @var \Datetime
	 */
	public $date;
	/**
	 * @var User
	 */
	public $user;


    public function __construct($id, $name, $description, \DateTime $date, User $user)
    {
        $this->id = $id;
	    $this->name = $name;
	    $this->description = $description;
	    $this->date = $date;
	    $this->user = $user;
    }

}
