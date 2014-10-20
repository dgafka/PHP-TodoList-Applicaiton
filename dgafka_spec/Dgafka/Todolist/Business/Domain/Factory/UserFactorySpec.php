<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserFactorySpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Factory\UserFactory');
    }

	function it_should_return_new_user_object() {
		$this->create(1, 'name', 'password', 'zetper22@wp.pl')->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\User');
	}

	function it_should_return_user_id_and_name() {
		$user = $this->create(1, 'name', 'password', 'zetper22@wp.pl');
		$user->getId()->shouldBeInteger();
		$user->getId()->shouldReturn(1);
		$user->getName()->shouldBeString();
		$user->getName()->shouldReturn('name');
	}

}
