<?php
declare(strict_types = 1);
namespace App\LiskovSubstitutionPrinciple\BadPractice;


class DaughterTwo extends Mather
{
    public function cookCakes() : string
    {
        return 'what??';
    }
}
