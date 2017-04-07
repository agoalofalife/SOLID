<?php
namespace Tests\Unit;



use App\SingleResponsibility\BestPractice\Display;
use App\SingleResponsibility\BestPractice\GoodClass;
use App\SingleResponsibility\BestPractice\Storage;
use Tests\TestCase;

class GoodClassTest extends TestCase
{
    private $goodClass;
    private $mockDisplay;
    private $mockStorage;

    public function setUp() : void
    {
        parent::setUp();

        $this->mockDisplay     = $this->mock(Display::class);
        $this->mockStorage     = $this->mock(Storage::class);
        $this->goodClass       = new GoodClass( $this->mockDisplay,  $this->mockStorage);
    }

    public function testGetProduct()
    {
        $generate = $this->getGenerateProduct();
        $this->assertEquals('array',  gettype( $this->goodClass->getProduct()) );

        $this->goodClass->setProduct($generate);
        $this->assertEquals($generate, $this->goodClass->getProduct());
    }

    public function testSetProduct()
    {
        $generate = $this->getGenerateProduct();
        $this->assertEquals($generate,     $this->goodClass->setProduct($generate) );
    }

    public function testDisplay()
    {
        $fake = $this->getGenerateProduct();
        $this->mockDisplay->shouldReceive('display')->with($fake)->once();

        $this->goodClass->setProduct($fake);
        $this->goodClass->display();
    }

    public function testSaveStorage()
    {
        $fake = $this->getGenerateProduct();

        $this->mockStorage->shouldReceive('save')->with($fake)->once()->andReturn($fake);
        $this->goodClass->setProduct($fake);
        $this->goodClass->saveStorage();
    }
}

