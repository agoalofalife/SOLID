<?php

use App\DependencyInversionPrinciple\BestPractice\CleverMen;
use App\DependencyInversionPrinciple\BestPractice\Restaurant;
use Tests\TestCase;

class CleverMenTest  extends TestCase
{
    private  $sourceFood;
    public function setUp()
    {
        parent::setUp();

        $this->sourceFood = $this->mock(Restaurant::class);
    }

    public function testEat()
    {
        $cleverMen = new CleverMen($this->sourceFood );
        $this->sourceFood->shouldReceive('getFood')->once()->andReturn('something - food');
        $cleverMen->eat();
    }
}