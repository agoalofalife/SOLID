<?php
require_once 'Display.php';
require_once 'Storage.php';
//Принцип единственной ответственности (Single responsibility)
//На каждый объект должна быть возложена одна единственная обязанность».
// Т.е. другими словами — конкретный класс должен решать конкретную задачу — ни больше, ни меньше.
/**
 * Class Order
 */
class Order
{
    private $display;
    private $storage;

    public function __construct(Display $display, Storage $storage)
    {
        $this->display = $display;
        $this->storage = $storage;
    }
    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($value)
    {
        return $this->product = $value;
    }

    public function display()
    {
        return $this->display->display();
    }

    public function saveStorage()
    {
        $this->storage->save();
        //логика сохраннения например в кэш
    }
}


 $foo = new Order(new Display(['product']),new Storage());
$foo->display();
$foo->storage();

