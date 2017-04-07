<?php
declare(strict_types = 1);

namespace App\InterfaceSegregationPrinciple\BestPractice;

use App\InterfaceSegregationPrinciple\Contract\BestPractice\{
    IClothes, IItem
};


//it is obvious that we can now combine our interfaces
abstract class KidsClothes implements IItem, IClothes
{
    public function setCondition($condition){/*...*/}
    public function setPrice($price){/*...*/}
    public function setColor($color){/*...*/}
    public function setSize($size){/*...*/}
    public function setMaterial($material){/*...*/}
}