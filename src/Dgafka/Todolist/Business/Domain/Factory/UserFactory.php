<?php

namespace Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use Dgafka\Todolist\Business\Domain\Entity\User;

/** Class responsible for creating new Users
 * Class UserFactory
 * @package Dgafka\Todolist\Business\Domain\Factory
 */
class UserFactory implements Factory
{

	/** Creates new user
	 * @param $request Request
	 * @return User
	 */
    public function create(Request $request)
    {

	    if(!($request instanceof RequestUser)) {
		    throw new \LogicException('Request for user factory, should be instance of UserTask');
	    }


        return new User($request->getId(), $request->getName(), $request->getPassword(), $request->getEmail());
    }

}
