<?php
declare(strict_types = 1);
namespace App\SingleResponsibility\BestPractice;

/**
 * The class is only responsible for displaying
 * It's certainly not ideal, it would be great to add an interface
 */
class Display
{
    public function display(array $some)
    {
        print_r($some);
    }
}