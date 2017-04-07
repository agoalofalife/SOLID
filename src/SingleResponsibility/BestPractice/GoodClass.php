<?php
declare(strict_types = 1);

namespace App\SingleResponsibility\BestPractice;

// The Single Responsibility Principle
// -------------------------------------------------------------

// Well let's see an example of good practice


class GoodClass
{
    private $product = [];
    private $display;
    private $storage;

    // here it is necessary to declare the interfaces, but stop while on it
    public function __construct(Display $display, Storage $storage)
    {
        $this->display = $display;
        $this->storage = $storage;
    }

    public function getProduct() : array
    {
        return $this->product;
    }

    public function setProduct(array $value) : array
    {
        return $this->product = $value;
    }

    /**
     * @return mixed
     */
    public function display()
    {
        //delegate work to another class responsible
        return $this->display->display($this->getProduct());
    }

    public function saveStorage()
    {
        //delegate work to another class responsible
        $this->storage->save($this->getProduct());
    }
}

// Example
//$foo = new GoodClass(new Display(),new Storage());
//$foo->display();
//$foo->saveStorage();

