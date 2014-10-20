<?php

namespace dgafka_spec\Dgafka\Todolist\Business\Domain\Service\User\Command;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UpdateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Dgafka\Todolist\Business\Domain\Service\Service');
    }
}
