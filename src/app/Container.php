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
        if (!$this->has($offset)) {
            return null;
        }

        $item = $this->items[$offset]();

        return $item;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        if ($this->has($offset)) {
            unset($this->items[$offset]);
        }
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->items[$offset]);
    }

    public function has($offset)
    {
        return $this->offsetExists($offset);
    }

}
