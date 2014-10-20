<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\DTO;

use Dgafka\Todolist\Business\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RequestTaskSpec extends ObjectBehavior
{
	function let(User $user) {
		$user->getId()->willReturn(1);
		$id = 1;
		$name = 'Task name';
		$description = 'desc';
		$date = new \DateTime();
		$this->beConstructedWith($id, $name, $description, $date, $user);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\DTO\Request');
    }

	function it_should_return_values_it_was_constructed_with() {
		$this->getId()->shouldReturn(1);
		$this->getName()->shouldReturn('Task name');
		$this->getDescription()->shouldReturn('desc');
		$this->getDate()->shouldHaveType('\Datetime');
		$this->getUser()->getId()->shouldReturn(1);
	}

}
