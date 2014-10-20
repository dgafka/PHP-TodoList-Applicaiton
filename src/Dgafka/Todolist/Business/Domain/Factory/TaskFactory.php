<?php

namespace Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\Entity\Task;
use Dgafka\Todolist\Business\Domain\Entity\User;

/** Class responsible for creating new Tasks
 * Class TaskFactory
 * @package Dgafka\Todolist\Business\Domain\Factory
 */
class TaskFactory implements Factory
{

	/** User owner of the task
	 * @var User|null
	 */
	protected $user = null;

	/**
	 * @param User $user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/** Creates new Task instance
	 * @param $id int
	 * @param $name string
	 * @param $description string
	 * @param $date \DateTime
	 * @return Task
	 */
    public function create($id, $name, $description, \DateTime $date)
    {
        $task = new Task($id, $name, $description, $date);
	    $task->setUser($this->user);

	    return $task;
    }

}
