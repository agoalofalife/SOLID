<?php

namespace App\DependencyInversionPrinciple\BadPractice;

// This man is more clever
class NormalManFamily
{
    private $wife;
    // source wife may be the daughter
    public function __construct(Wife $wife)
    {
        $this->wife = $wife;
    }

    public function eat() : string
    {
        return $this->wife->getFood();
    }
}