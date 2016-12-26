<?php
require_once 'Display.php';
require_once 'Storage.php';
require_once 'IStorage.php';
//Принцип открытости/закрытости (Open-closed)
//Данный принцип гласит — "программные сущности должны быть открыты для расширения, но закрыты для модификации".
//На более простых словах это можно описать так — все классы, функции и т.д. должны проектироваться так,
//чтобы для изменения их поведения, нам не нужно было изменять их исходный код.
/**
 * Class Order
 */
class Order
{
    private $display;
    private $storage;

    public function __construct(Display $display, IStorage $storage)
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
    //?? а если надо сохранить еще куда нибудь????
    public function saveStorage()
    {
        $this->storage->save();
        //логика сохраннения например в кэш
    }
}

$foo = new Order(new Display(), new InsertDb());