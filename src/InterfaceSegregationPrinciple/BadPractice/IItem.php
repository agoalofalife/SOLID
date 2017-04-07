<?php
namespace App\InterfaceSegregationPrinciple\BadPractice;

// The Interface Segregation Principle
// -------------------------------------------------------------

// This principle is the easiest to understand
// Look at the class below and you'll see a problem

// if our class of goods may not have discounts or promo codes
interface IItem
{
    public function applyDiscount(int $discount);
    public function applyPromoCode(string $promoCode);

    public function setColor(string $color);
    public function setSize(int $size);

    public function setCondition(string $condition);
    public function setPrice(int $price);
}