<?php


use App\LiskovSubstitutionPrinciple\BadPractice\DaughterOne;
use App\LiskovSubstitutionPrinciple\BadPractice\Kitchen;
use Tests\TestCase;

class KitchenTest extends TestCase
{
    private $mockChildMather;
    private $kitchen;

    public function setUp()
    {
        parent::setUp();
        $this->mockChildMather = $this->mock(DaughterOne::class);
        $this->kitchen         = new Kitchen( $this->mockChildMather );
    }

    public function testReady()
    {
        $this->mockChildMather->shouldReceive('cookCakes')->once()->andReturn(130);
        $this->kitchen->ready();
    }

}