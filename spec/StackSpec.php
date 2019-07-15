<?php

namespace spec\App;

use App\Stack;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StackSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Stack::class);
    }

    public function it_initialized_with_empty_stack()
    {
        $this->getCount()->shouldReturn(0);
    }

    public function it_returns_single_element_when_pushed()
    {
        $this->push(10)->getCount()->shouldReturn(1);
        $this->getItems()->shouldReturn([10]);
    }

    public function it_can_add_multiple_items_to_stack()
    {
        $this->push(10)->push(25)->getCount()->shouldReturn(2);
        $this->getItems()->shouldReturn([10, 25]);
    }

    public function it_can_pop_a_value()
    {
        $this->push(10)->push(25)->pop()->getCount()->shouldReturn(1);
        $this->getItems()->shouldReturn([10]);
    }

    public function it_throws_error_when_stack_is_empty()
    {
        $this->pop()->shouldReturn(false);        
    }
}
