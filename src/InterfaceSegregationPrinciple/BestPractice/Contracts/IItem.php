<?php
declare(strict_types = 1);
namespace App\InterfaceSegregationPrinciple\Contract\BestPractice;


interface IItem
{
    public function setCondition($condition);
    public function setPrice($price);
}