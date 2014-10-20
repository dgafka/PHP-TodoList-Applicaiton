<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\DTO\RequestTask;
use Dgafka\Todolist\Business\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskFactorySpec extends ObjectBehavior
{

	private $request;

	function let(RequestTask $request, User $user) {
		$date = new \DateTime();

		$request->getName()->willReturn('name');
		$request->getDescription()->willReturn('description');
		$request->getId()->willReturn(1);
		$request->getDate()->willReturn($date);
		$request->getUser()->willReturn($user);

		$this->request = $request;
	}


    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Factory\TaskFactory');
    }

	function it_should_return_new_task(RequestTask $request, User $user) {

		$this->create($this->request)->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\Task');
	}

	function it_should_return_task_with_id_of_1() {
		$this->create($this->request)->getId()->shouldReturn(1);
	}

	function it_should_return_user_coupled_with_task() {
		$this->create($this->request)->getUser()->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\User');
	}

}
