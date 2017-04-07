<?php


namespace App\OpenClosedPrinciple\BestPractice;

// the class has an implementation of our interface
class StorageCache implements IStorage
{
    // the logic of saving to a cache
    public function save() : string
    {
        return 'Save in cache - file!';
    }
}