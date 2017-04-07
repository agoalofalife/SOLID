<?php

namespace Tests\Unit;

use App\SingleResponsibility\BestPractice\Storage;
use Tests\TestCase;

class StorageTest extends TestCase
{

    private $storage;

    public function setUp() : void
    {
        parent::setUp();

        $this->storage = new Storage($this->getGenerateProduct());
    }

    public function testSave()
    {
        $some = $this->getGenerateProduct();
        $this->assertEquals($some, $this->storage->save($some,$some) );
    }

    public function testGet()
    {
        $some = $this->getGenerateProduct();

        $this->storage->save($some);
        $this->assertEquals($some, $this->storage->get(0));
    }

    public function testGetException()
    {
        $this->expectException(\Exception::class);
        $this->storage->get($this->faker()->numberBetween(1,100));
    }

}