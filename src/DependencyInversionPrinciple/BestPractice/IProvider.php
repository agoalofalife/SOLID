<?php
declare(strict_types = 1);
namespace App\DependencyInversionPrinciple\BestPractice;

interface IProvider
{
    public function getFood() : string ;
}