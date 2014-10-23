<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
//    /**
//     * Initializes context.
//     * Every scenario gets it's own context object.
//     *
//     * @param array $parameters context parameters (set them up through behat.yml)
//     */
//    public function __construct(array $parameters)
//    {
//        // Initialize your context here
//    }
//
//
//    /**
//     * @Given /^is user "([^"]*)"$/
//     */
//    public function isUser($arg1)
//    {
//        $userFactory = new \Dgafka\TodoList\Business\Factory\UserFactory();
//	    $this->user  = $userFactory->create($arg1);
//    }
//
//    /**
//     * @When /^I create task with:$/
//     */
//    public function iCreateTaskWith(TableNode $table)
//    {
//	    $taskFactory = new \Dgafka\TodoList\Business\Factory\TaskFactory();
//        foreach($table->getHash() as $task) {
//	        $task = $taskFactory->create($task['name'], $task['description'], $task['time']);
//	        $this->user->addTask($task);
//        }
//    }
//
//    /**
//     * @Then /^I should see task named "([^"]*)" on my task list$/
//     */
//    public function iShouldSeeTaskNamedOnMyTaskList($arg1)
//    {
//	    $taskFound = false;
//        foreach($this->user->getTasks() as $task) {
//	        if($task->getName() === $arg1) {
//		        $taskFound = true;
//	        }
//        }
//
//	    if(!$taskFound) {
//		    throw new \Exception("Task was not found in the task list");
//	    }
//    }
//
//	/**
//	 * @Given /^I edit description of task with id (\d+) with "([^"]*)"$/
//	 */
//	public function iEditDescriptionOfTaskWithIdWith($arg1, $arg2)
//	{
//		$task      = null;
//		foreach($this->user->getTasks() as $userTask) {
//			if($userTask->getId() === (int)$arg1) {
//				$task = $userTask;
//			}
//		}
//
//		if(!$task) {
//			throw new \Exception("Task was not found in the task list");
//		}
//
//		$task->setName($arg2);
//		if($task->getName() !== $arg2) {
//			throw new \Exception("Name of the task, is not equal to change that has been made");
//		}
//	}
//
//    /**
//     * @Then /^when I pick first task from my task list I will see description named "([^"]*)"$/
//     */
//    public function whenIPickFirstTaskFromMyTaskListIWillSeeDescriptionNamed($arg1)
//    {
//	    $taskList = $this->user->getTasks();
//        if(!array_key_exists(0, $taskList)) {
//	        throw new \Exception("Task doesn't exist in task list");
//        }
//
//	    if($taskList[0]->getDescription() !== $arg1) {
//		    throw new \Exception("Task has name different than the one which it was created with");
//	    }
//    }
//
//    /**
//     * @Then /^I should have (\d+) task on my task list$/
//     */
//    public function iShouldHaveTaskOnMyTaskList($arg1)
//    {
//        if(!(count($this->user->getTasks()) !== (int)$arg1)) {
//	        throw new \Exception("Amount of task is different than " . $arg1);
//        }
//    }
//
//    /**
//     * @When /^I delete task with id of (\d+)$/
//     */
//    public function iDeleteTaskWithIdOf($arg1)
//    {
//        $this->user->removeTask((int)$arg1);
//    }
//
//    /**
//     * @Given /^task with name "([^"]*)" should have id of (\d+)$/
//     */
//    public function taskWithNameShouldHaveIdOf($arg1, $arg2)
//    {
//	    $foundTask = false;
//        foreach($this->user->getTasks() as $task) {
//           if($task->getName() === $arg1 && $task->getId() === (int)$arg2) {
//	           $foundTask = true;
//           }
//        }
//
//	    if(!$foundTask) {
//		    throw new \Exception('Task with id doesn\'t exist ' . $arg2);
//	    }
//    }
}
