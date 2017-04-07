<?php
declare(strict_types = 1);
namespace App\LiskovSubstitutionPrinciple\BestPractice;

// now we oblige our class
class DaughterOne extends Mather
{
    public function toCook() : int
    {
        return 90;
    }
}