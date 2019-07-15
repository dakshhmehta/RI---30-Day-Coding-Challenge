<?php

use PHPUnit\Framework\TestCase;

class FamilyTest extends TestCase
{
    public function test_it_can_test_get_count()
    {
        $family = new Family();

        $family->addMember('Daksh');
        $family->addMember('Alpesh');

        $this->assertEquals(2, $family->getCount());

        $this->assertEquals('Daksh', $family->getMembers()[0]);
        $this->assertEquals('Alpesh', $family->getMembers()[1]);
    }

    public function test_count_returns_0_when_no_members_added()
    {
        $family = new Family();

        $this->assertEquals(0, $family->getCount());
    }

    public function test_it_can_not_have_member_with_same_name_twice()
    {
        $family = new Family();

        $family->addMember('Daksh');
        $family->addMember('Daksh');

        $this->assertEquals(1, $family->getCount());
    }
}
