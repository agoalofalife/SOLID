<?php
namespace Tests\Unit;

use App\SingleResponsibility\BadPractice\ClassWhoKnewAlot;
use Tests\TestCase;

class ClassWhoKnewAlotTest extends TestCase
{
    private $fakeProduct;
    private $order;

    public function setUp() : void
    {
        parent::setUp();
        $this->fakeProduct = $this->getGenerateProduct();
        $this->order = new ClassWhoKnewAlot( $this->fakeProduct);
    }

    public function testGetProduct()
    {
        $this->assertEquals( $this->fakeProduct,   $this->order->getProduct());
    }

    public function testSetProduct()
    {
        $this->assertEquals( $this->fakeProduct, $this->order->setProduct($this->fakeProduct) );
    }

    public function testDisplay()
    {
        $this->expectOutputRegex('/Array/');
        $this->order->display();
    }

    public function testSaveStorage()
    {
        $fakeStorage = $this->getGenerateProduct();
        $this->assertEquals( $fakeStorage, $this->order->saveStorage($fakeStorage) );

    }

}