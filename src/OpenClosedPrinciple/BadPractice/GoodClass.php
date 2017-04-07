<?php
declare(strict_types = 1);
namespace App\OpenClosedPrinciple\BadPractice;

use App\SingleResponsibility\BestPractice\{
    Display, Storage
};

// The Open Closed Principle
// -------------------------------------------------------------
// This principle says "software entities should be open for extension, but closed for modification".

// In simple words it can be described as follows — all classes, functions etc should be designed so
// in order to change their behavior, we didn't need to change their source code.

// Ok,we remember that we have a class with a single responsibility
// but now there are new conditions


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


    public function display()
    {
        return $this->display->display($this->getProduct());
    }

    public function saveStorage()
    {
        // and if you need to save to somewhere else ??
        $this->storage->save($this->getProduct());
        // the logic of conservation, for example in the cache
        // o god, what do us?
    }
}
