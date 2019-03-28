<?php
namespace App;
use ArrayAccess;

class Container implements ArrayAccess
{
    protected $items = [];
    protected $cache = [];

    public function __construct(array $items = [])
    {
        foreach ($items as $key => $item) {
            $this->offsetSet($key, $item);
        }
    }

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

        $item = $this->items[$offset]($this);

        if (isset($this->cache[$offset])) {
            return $this->cache[$offset];
        }

        $this->cache[$offset] = $item;

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

    public function __get($property)
    {
        // TODO: Implement __get() method.
        return $this->offsetGet($property);
    }
}
