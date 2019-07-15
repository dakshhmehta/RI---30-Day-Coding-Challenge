<?php

namespace App;

class Stack
{
    protected $items = array();

    public function getCount()
    {
        return count($this->items);
    }

    public function push($item)
    {
        $this->items[count($this->items)] = $item;

        return $this;
    }

    public function pop()
    {
        if(count($this->items) == 0){
            return false;
        }

        unset($this->items[count($this->items)-1]);

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }
}
