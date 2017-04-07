<?php
namespace Tests\Unit;

use App\OpenClosedPrinciple\BestPractice\{
    NewGoodClass, StorageCache, StorageDb
};

use App\SingleResponsibility\BestPractice\Display;
use Tests\TestCase;

class NewGoodClassTest  extends TestCase
{
    private $goodClass;
    private $mockDisplay;
    private $mockStorageDb;
    private $mockStorageCache;

    public function setUp()
    {
        parent::setUp();

       $this->mockDisplay      = $this->mock(Display::class);
       $this->mockStorageDb    = $this->mock(StorageDb::class);
       $this->mockStorageCache = $this->mock(StorageCache::class);

    }

    public function testSaveStorageStorageDb()
    {
        $this->goodClass =  new NewGoodClass( $this->mockDisplay , $this->mockStorageDb );

        $this->mockStorageDb->shouldReceive('save')->andReturn('Save in database!')->once();

        $this->goodClass->setProduct($this->getGenerateProduct());
        $this->goodClass->saveStorage();
    }

    public function testSaveStorageCache()
    {
        $this->goodClass =  new NewGoodClass( $this->mockDisplay , $this->mockStorageCache );

        $this->mockStorageCache->shouldReceive('save')->andReturn('Save in cache - file!')->once();

        $this->goodClass->setProduct($this->getGenerateProduct());
        $this->goodClass->saveStorage();
    }
}