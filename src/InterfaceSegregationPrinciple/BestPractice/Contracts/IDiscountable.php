<?php
declare(strict_types = 1);
namespace App\InterfaceSegregationPrinciple\Contract\BestPractice;

interface IDiscountable
{
    public function applyDiscount($discount);
    public function applyPromocode($promocode);
}