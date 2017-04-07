<?php
namespace Tests\Unit;


use App\OpenClosedPrinciple\BestPractice\IStorage;
use App\OpenClosedPrinciple\BestPractice\StorageDb;
use Tests\TestCase;

class StorageDbTest extends TestCase
{
    public function testSave()
    {
        $storage = new StorageDb();
        $this->assertInstanceOf(IStorage::class, $storage);
        $this->assertEquals($storage->save(), 'Save in database!');
    }
}