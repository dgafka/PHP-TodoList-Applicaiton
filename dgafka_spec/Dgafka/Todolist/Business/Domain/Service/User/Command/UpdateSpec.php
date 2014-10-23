<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Service\User\Command;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestTask;
use Dgafka\Todolist\Business\Domain\Entity\Entity;
use Dgafka\Todolist\Business\Domain\Factory\Factory;
use Dgafka\Todolist\Business\Domain\Repository\Repository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UpdateSpec extends ObjectBehavior
{

	/**
	 * @var Factory
	 */
	private $factory;
	/**
	 * @var Repository
	 */
	private $repository;

	function let(Factory $factory, Repository $repository) {
		$this->factory      = $factory;
		$this->repository   = $repository;
		$this->beConstructedWith($factory, $repository);
	}

    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Service\Service');
    }

	function it_should_insert_new_user_and_return_identity(RequestTask $request, Entity $entity) {

		$this->factory->create($request)->willReturn($entity);
		$this->repository->save($entity)->willReturn(1);

		$this->execute($request)->shouldReturn(1);
	}

	function it_should_throw_exception_when_wrong_request_passed(Request $request) {
		$this->shouldThrow(new \LogicException('Passed request is not User Request.'))->during('execute', array($request));
	}

}
