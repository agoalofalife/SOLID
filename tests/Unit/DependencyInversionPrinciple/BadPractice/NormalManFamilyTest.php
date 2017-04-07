<?php

use App\DependencyInversionPrinciple\BadPractice\NormalManFamily;
use App\DependencyInversionPrinciple\BadPractice\Wife;
use Tests\TestCase;

class NormalManFamilyTest extends TestCase
{
    private $mockWife;

    public function testEat()
    {
        $this->mockWife = $this->mock(Wife::class);
        $this->mockWife->shouldReceive('getFood')->once()->andReturn('something - food');
        $man            = new NormalManFamily( $this->mockWife);
        $man->eat();

    }
}