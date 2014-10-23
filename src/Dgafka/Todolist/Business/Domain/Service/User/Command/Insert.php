<?php

namespace Dgafka\Todolist\Business\Domain\Service\User\Command;

use Dgafka\Todolist\Business\Domain\DTO\Request;
use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use Dgafka\Todolist\Business\Domain\Factory\Factory;
use Dgafka\Todolist\Business\Domain\Factory\UserFactory;
use Dgafka\Todolist\Business\Domain\Repository\Repository;
use Dgafka\Todolist\Business\Domain\Service\Service;

class Insert implements Service
{
	/** Factory to create instance
	 * @var Factory
	 */
	private $factory;

	public function __construct(Repository $repository)
	{
		$this->factory = new UserFactory($repository);
	}

	public function execute(Request $request) {

		$user = $this->factory->create($request);

		return $user;
	}

}
