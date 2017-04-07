<?php
namespace App\OpenClosedPrinciple\BestPractice;

// the class has an implementation of our interface
class StorageDb implements IStorage
{
 // the logic of saving to a database
    public function save() : string
    {
        return 'Save in database!';
    }
}