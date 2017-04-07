<?php
declare(strict_types = 1);
namespace App\DependencyInversionPrinciple\BestPractice;

class Restaurant implements IProvider
{
    public function getFood() : string
    {
        return 'food';
    }
}