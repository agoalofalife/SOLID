<?php
require_once 'Wife.php';
//Принцип инверсии зависимостей (Dependency Invertion)
//«Зависимости должны строится относительно абстракций, а не деталей»
//Проверяем, зависят ли классы от каких-то других классов
//(непосредственно инстанцируют объекты других классов и т.д) и если эта зависимость имеет место,
//заменяем на зависимость от абстракции.

class Man
{
    public function eat()
    {
        $wife = new Wife();
        $food = $wife->getFood();
    }
}

class Man2
{
    private $wife;

    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat()
    {
//        $wife = new Wife();
        $food = $this->wife->getFood();
    }
}

class Man3
{
    private $foodProvider;

    public function __construct(IProvider $IProvider)
    {
        $this->foodProvider = $IProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();
    }
}

$man = new Man3(new Restaurant());
$man->eat();