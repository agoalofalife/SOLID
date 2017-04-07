<?php
declare(strict_types = 1);
namespace App\OpenClosedPrinciple\BestPractice;

use App\SingleResponsibility\BestPractice\Display;

// The Open Closed Principle
// -------------------------------------------------------------

class NewGoodClass
{
    private $product = [];
    private $display;
    private $storage;

    // Now we can change our store, without violating the second principle
    // please note that the class Display, violates this principle

    public function __construct(Display $display, Istorage $storage)
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


    public function display()
    {
        return $this->display->display($this->getProduct());
    }

    public function saveStorage()
    {
        //Well doesn't matter what we storage
        $this->storage->save($this->getProduct());
    }
}
// Example client code :
// new NewGoodClass(new Display(), new StorageDb());