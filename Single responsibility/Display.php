<?php

/**
 * Class Display
 * Класс отвечает только за вывод
 */
class Display
{
    private  $collection;
    public function __construct($collection)
    {
        $this->collection = $collection;
    }
    public function display()
    {
        echo $this->collection;
    }
}