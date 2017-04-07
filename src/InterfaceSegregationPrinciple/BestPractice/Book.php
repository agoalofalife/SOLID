<?php
declare(strict_types = 1);
namespace App\InterfaceSegregationPrinciple\BestPractice;


use App\InterfaceSegregationPrinciple\Contract\BestPractice\{
    IDiscountable, IItem
};

// it is obvious that we can now combine our interfaces
abstract class Book implements IItem, IDiscountable
{
    public function setCondition($condition){/*...*/}
    public function setPrice($price){/*...*/}
    public function applyDiscount($discount){/*...*/}
    public function applyPromocode($promocode){/*...*/}
}