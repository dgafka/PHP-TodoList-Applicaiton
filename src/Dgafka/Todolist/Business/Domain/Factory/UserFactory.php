<?php

namespace Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\Entity\User;

/** Class responsible for creating new Users
 * Class UserFactory
 * @package Dgafka\Todolist\Business\Domain\Factory
 */
class UserFactory
{

	/** Creates new user
	 * @param $id int
	 * @param $name string
	 * @param $password string
	 * @param $email string
	 * @return User
	 */
    public function create($id, $name, $password, $email)
    {
        return new User($id, $name, $password, $email);
    }

}
