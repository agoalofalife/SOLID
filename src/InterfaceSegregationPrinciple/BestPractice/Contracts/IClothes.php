<?php
declare(strict_types = 1);
namespace App\InterfaceSegregationPrinciple\Contract\BestPractice;

interface IClothes
{
    public function setColor($color);
    public function setSize($size);
    public function setMaterial($material);
}