<?php

use App\DependencyInversionPrinciple\BadPractice\NormalMan;
use Tests\TestCase;

class NormalManTest extends TestCase
{
    public function testEat()
    {
        $this->assertEquals('something - food', (new NormalMan())->eat());
    }
}