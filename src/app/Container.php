<?php
namespace App;
use ArrayAccess;

class Container implements ArrayAccess
{
    protected $items = [];
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        $this->items[$offset] = $value;
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->items[$offset]);
    }

}
