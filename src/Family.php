<?php

namespace App;

class Family
{
    protected $members = [];

    public function addMember($name)
    {
        if(! in_array($name, $this->members)){
            $this->members[] = $name;
        }
    }

    public function getCount()
    {
        return count($this->members);
    }
}
