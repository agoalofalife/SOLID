<?php
//если наш класс товаров не может иметь скидок или промокодов
interface IItem
{
    public function applyDiscount($discount);
    public function applyPromocode($promocode);

    public function setColor($color);
    public function setSize($size);

    public function setCondition($condition);
    public function setPrice($price);
}