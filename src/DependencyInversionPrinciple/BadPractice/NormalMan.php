<?php
declare(strict_types = 1);

namespace App\DependencyInversionPrinciple\BadPractice;

//  The Dependency Inversion Principle
// -------------------------------------------------------------
// According to needs is based on abstractions, not details


// inversion of dependencies is my favorite principle
// it's very easy, go!

class NormalMan
{
    // as you can see the man is dependent on only one power source, it's his wife
    public function eat() : string
    {
        // oh ... and as actually it to test?
        $wife = new Wife();
        return $wife->getFood();
    }
}