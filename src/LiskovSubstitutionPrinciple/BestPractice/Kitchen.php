<?php
declare(strict_types = 1);
namespace App\LiskovSubstitutionPrinciple\BestPractice;

use App\LiskovSubstitutionPrinciple\BestPractice\Contract\ContractCook;
use App\LiskovSubstitutionPrinciple\BestPractice\Contract\ContractСooking;

class Kitchen implements ContractСooking
{
    private $whoWillCook;

    public function __construct(ContractCook $cook)
    {
        $this->whoWillCook = $cook;
    }

    public function ready() : int
    {
        return $this->whoWillCook->cookCakes() +  50;
    }
}