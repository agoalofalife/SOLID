<?php
require_once 'IStorage.php';
/**
 * Class Storage
 * Класс отвечает только за хранение
 */
class Storage implements Istorage
{
    public function save()
    {
        //логика сохранения в кэш
    }
}

class InsertDb implements Istorage
{
    public function save()
    {
        //логика сохранения в бд
    }
}
