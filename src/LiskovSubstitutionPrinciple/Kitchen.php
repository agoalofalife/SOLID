<?php

class Kitchen
{
    private $who;
    public function __construct(Mather $mather)
    {
        $this->who = $mather;
    }

    public function ready()
    {
        return $this->who->cookCakes() +  50;
        //ожидаем число
    }
}