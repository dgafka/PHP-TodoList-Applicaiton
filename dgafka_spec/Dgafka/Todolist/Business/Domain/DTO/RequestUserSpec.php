<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\DTO;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RequestUserSpec extends ObjectBehavior
{
	function let() {
		$id         = 1;
		$name       = 'Daris';
		$password   = 'secret';
		$email      = null;

		$this->beConstructedWith($id, $name, $password, $email);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\DTO\Request');
    }

	function it_should_return_values_it_was_constructed_with() {
		$this->id->shouldReturn(1);
		$this->name->shouldReturn('Daris');
		$this->getPassword()->shouldReturn('secret');
		$this->email->shouldBeNull();
	}

}
