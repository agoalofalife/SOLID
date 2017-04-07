<?php
declare(strict_types = 1);

namespace App\SingleResponsibility\BadPractice;

// The Single Responsibility Principle
// -------------------------------------------------------------

// * Each object should be assigned only one duty
// * in other words, the specific class should solve a specific task — no more, no less.


class ClassWhoKnewAlot
{
    private $storage;

    private $product; // collection orders

    public function __construct(array $product)
    {
        $this->product = $product;
    }

    /**
     * Here just get our product
     * @return mixed
     */
    public function getProduct() : array
    {
        return $this->product;
    }

    /**
     * Here we need to install it, it's easy really?
     * @param $value
     * @return mixed
     */
    public function setProduct(array $value) : array
    {
        return $this->product = $value;
    }

    /**
     * Hm... I'm not sure that it's his responsibility..
     */
    public function display() : void
    {
        print_r($this->product);
    }

    /**
     * WTF?? this method definitely does not apply saveStorage!
     * It's very , very bed. Why?
     * First, our method cannot be reused
     * Secondly we will not be able to flexibly change our implementation, if you want to change the method of preservation!
     *
     * You are already aware that you need to write for this method getStorage and so on
     * @param $something
     * @return array
     */
    public function saveStorage(array $something) : array
    {
        return $this->storage[] = $something;
        // the logic of conservation, for example in the cache
    }
}