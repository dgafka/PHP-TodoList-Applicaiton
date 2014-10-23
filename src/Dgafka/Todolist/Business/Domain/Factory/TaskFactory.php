<?php

namespace Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestTask;
use Dgafka\Todolist\Business\Domain\Entity\Task;

/** Class responsible for creating new Tasks
 * Class TaskFactory
 * @package Dgafka\Todolist\Business\Domain\Factory
 */
class TaskFactory extends Factory
{

	/** Creates new Task instance
	 * @param Request $request
	 * @return Task
	 */
    public function create(Request $request)
    {

	    if(!$request instanceof RequestTask) {
		    throw new \LogicException("Request for task factory, should be instance of RequestTask");
	    }

        $task = new Task($request->getName(), $request->getDescription(), $request->getDate());
	    $task->setUser($request->getUser());

	    $this->repository->save($task);
	    return $task;
    }

}
