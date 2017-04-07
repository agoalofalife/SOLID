<?php
declare(strict_types = 1);
namespace App\SingleResponsibility\BestPractice;

/**
 * The class is only responsible for storage
 * of course it is better to organize the interface in this example, it is not necessary
 */
class Storage
{
    private $storage;

    public function save(array $something) : array
    {
        return $this->storage[] = $something;
    }

    public function get(string $key)
    {
        if (isset($this->storage[$key])){
            return $this->storage[$key];
        }
        throw new \Exception("not exist key = $key");
    }
}