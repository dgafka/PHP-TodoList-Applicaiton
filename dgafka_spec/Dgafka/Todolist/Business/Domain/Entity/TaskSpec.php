<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Entity;

use Dgafka\Todolist\Business\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskSpec extends ObjectBehavior
{
	function let() {
		$id             = 1;
		$name           = 'Home task';
		$description    = 'Task to do in home';
		$date           = new \DateTime('2014-10-02 12:00:00');
		$this->beConstructedWith($id, $name, $description, $date);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Entity\Task');
    }

	function it_should_return_id() {
		$this->getId()->shouldReturn(1);
	}

	function it_should_return_user_instance(User $user) {
		$this->setUser($user);
		$this->getUser()->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\User');
	}

	function it_should_return_user_with_id_of_1(User $user) {
		$user->getId()->willReturn(1);
		$this->setUser($user);
		$this->getUser()->getId()->shouldReturn(1);
	}

}
