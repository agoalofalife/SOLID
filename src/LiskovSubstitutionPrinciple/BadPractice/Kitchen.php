<?php
declare(strict_types = 1);
namespace App\LiskovSubstitutionPrinciple\BadPractice;

// the class is responsible for cooking
class Kitchen
{
    private $whoWillCook;

    public function __construct(Mather $mather)
    {
        $this->whoWillCook = $mather;
    }

    public function ready() : int
    {
        return $this->whoWillCook->cookCakes() +  50; // this hided bug
    }
}