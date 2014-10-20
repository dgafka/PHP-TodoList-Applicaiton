<?php

namespace Dgafka\Todolist\Business\Domain\Factory;


use Dgafka\Todolist\Business\Domain\DTO\Request;

interface Factory {

	public function create(Request $request);

} 