<?php

include_once('InterfaceClass/Edible.php');

class Orange extends Fruit
{

    public function howToEat(): string
    {
        return "Orange could be juiced";
    }
}