<?php
declare(strict_types = 1);
namespace App\LiskovSubstitutionPrinciple\BadPractice;

class DaughterOne extends Mather
{
    public function cookCakes() : int
    {
        return 90;
    }
}