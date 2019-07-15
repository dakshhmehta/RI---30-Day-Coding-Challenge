<?php

namespace spec\App;

use App\Family;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FamilySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Family::class);
    }

    public function it_can_test_get_count()
    {
        $this->addMember('Daksh');
        $this->addMember('Alpesh');

        $this->getCount()->shouldBe(2);
    }

    public function it_count_returns_0_when_no_members_added()
    {
        $this->getCount()->shouldBe(0);
    }

    public function it_can_not_have_member_with_same_name_twice()
    {
        $this->addMember('Daksh');
        $this->addMember('Daksh');

        $this->getCount()->shouldBe(1);
    }
}
