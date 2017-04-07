<?php
declare(strict_types = 1);
namespace App\OpenClosedPrinciple\BestPractice;

// We organized interface, which can use for save in cache, database and so on
interface IStorage
{
    public function save();
}