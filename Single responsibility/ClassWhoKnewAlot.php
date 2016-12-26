<?php
//Принцип единственной ответственности (Single responsibility)
//На каждый объект должна быть возложена одна единственная обязанность».
// Т.е. другими словами — конкретный класс должен решать конкретную задачу — ни больше, ни меньше.
/**
 * Class Order
 * Класс который много знал
 */
class Order
{
    private $product;
    public function __construct(){}
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
        echo $this->product;
    }

    public function saveStorage()
    {
        //логика сохраннения например в кэш
    }
}