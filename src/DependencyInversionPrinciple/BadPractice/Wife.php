<?php
declare(strict_types = 1);
namespace App\DependencyInversionPrinciple\BadPractice;

class Wife
{
    public function getFood() : string
    {
        return 'something - food';
    }
}