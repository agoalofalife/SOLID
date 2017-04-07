<?php
declare(strict_types = 1);
namespace App\LiskovSubstitutionPrinciple\BadPractice;

// The Liskov Substitution Principle
// -------------------------------------------------------------

// this is probably the most difficult to understand principle..

// The objects in the program can be replaced by their successors without change of properties of the program
// LSP shows us what rules we must adhere , to choose between inheritance and composed


// parent Class
abstract class Mather
{
    // for example returns the time in cooking
    abstract function cookCakes();
}

// Client code example
// our system always expects the number
// as you can see DaughterTwo is not exactly
// why did this happen?
// we need to limit our client code

//$cook = new DaughterOne();
//$cake = new Kitchen($cook);
//$cake->ready();
//
//
//$cook = new DaughterTwo();
//$cake = new Kitchen($cook);
//$cake->ready();
