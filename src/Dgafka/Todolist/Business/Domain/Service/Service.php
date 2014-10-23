<?php

namespace Dgafka\Todolist\Business\Domain\Service;

use Dgafka\Todolist\Business\Domain\DTO\Request;

/** Base service interface. for all queries and commands
 * Interface Service
 * @package Dgafka\Todolist\Business\Domain\Service
 */
interface Service {

	public function execute(Request $request);

} 