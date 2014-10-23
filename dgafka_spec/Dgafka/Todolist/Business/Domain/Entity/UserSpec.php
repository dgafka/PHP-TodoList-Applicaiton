<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Entity;

use Dgafka\Todolist\Business\Domain\Entity\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
	function let() {
		$id       = 1;
		$name     = 'Daris';
		$password = 'secret';
		$email    = 'zetper222@wp.pl';
		$this->beConstructedWith($id, $name, $password, $email);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Entity\User');
    }

	function it_should_return_id() {
		$this->getId()->shouldReturn(1);
	}

}
