<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskFactorySpec extends ObjectBehavior
{
	function let(User $user) {
		$this->beConstructedWith($user);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Factory\TaskFactory');
    }

	function it_should_return_new_task() {
		$this->create(1, 'name', 'description', new \DateTime())->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\Task');
	}

	function it_should_return_task_with_id_of_1() {
		$this->create(1, 'name', 'description', new \DateTime())->getId()->shouldReturn(1);
	}

	function it_should_return_user_coupled_with_task() {
		$this->create(1, 'name', 'description', new \DateTime())->getUser()->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\User');
	}

}
