<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Factory;

use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserFactorySpec extends ObjectBehavior
{

	private $request;

	function let(RequestUser $request) {
		$request->getId()->willReturn(1);
		$request->getName()->willReturn('name');
		$request->getPassword()->willReturn('password');
		$request->getEmail()->willReturn('zetper222@wp.pl');

		$this->request = $request;
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Factory\UserFactory');
    }

	function it_should_return_new_user_object() {
		$this->create($this->request)->shouldHaveType('\Dgafka\Todolist\Business\Domain\Entity\User');
	}

	function it_should_return_user_id_and_name() {
		$user = $this->create($this->request);
		$user->getId()->shouldBeInteger();
		$user->getId()->shouldReturn(1);
		$user->getName()->shouldBeString();
		$user->getName()->shouldReturn('name');
	}

}
