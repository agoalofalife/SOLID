<?php
declare(strict_types = 1);
namespace App\DependencyInversionPrinciple\BestPractice;

// it's most clever man
class CleverMen
{
    private $foodProvider;
    // the ability to get food from any source, it's Great!
    public function __construct(IProvider $IProvider)
    {
        $this->foodProvider = $IProvider;
    }

    public function eat() : string
    {
        return $this->foodProvider->getFood();
    }
}

// example source Restaurant
//$man = new CleverMen(new Restaurant());
//$man->eat();