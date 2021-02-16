<?php

class Collection
{
    private $collection;

    public function getCollection()
    {
        return $this->collection;
    }
    
    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    public function map($cb)
    {
        $newArr = array_map($cb, $this->collection);
        return new Collection($newArr);
    }
    
    public function forEach($cb) {
        foreach ($this->collection as $key => $value) {
            $cb($value, $key);
        }
    }
}
