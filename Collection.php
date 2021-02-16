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

    public function map($cb, ...$arr)
    {
        $newArr = array_map($cb, $this->collection, ...$arr);
        return new Collection($newArr);
    }
    public function forEach($cb) {
        foreach ($this->collection as $key => $value) {
            $cb($value, $key);
        }
    }
}
