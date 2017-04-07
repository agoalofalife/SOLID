<?php

namespace Tests\Unit;

use App\OpenClosedPrinciple\BestPractice\IStorage;
use App\OpenClosedPrinciple\BestPractice\StorageCache;
use Tests\TestCase;

class StorageCacheTest extends TestCase
{

    public function testSave()
    {
            $storage = new StorageCache();
            $this->assertInstanceOf(IStorage::class, $storage);
            $this->assertEquals($storage->save(), 'Save in cache - file!');
    }
}