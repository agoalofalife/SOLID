<?php
//Объекты в программе могут быть заменены их наследниками без изменения свойств программы».
//Своими словами я бы это сказал так — при использовании наследника класса результат
//выполнения кода должен быть предсказуем и не изменять свойств метод.
require_once 'Kitchen.php';
require_once 'daughterOne.php';
class Mather
{
    public function cookCakes()
    {
        return 80;
    }

}

//Клиентский код
$cook = new daughterOne();
$cake = new Kitchen($cook);
$cake->ready();

//не соблюдается принцип
$cook = new daughterTwo();
$cake = new Kitchen($cook);
$cake->ready();
