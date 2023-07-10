<?php

include_once('Fruits.php');

class Apple extends Fruit
{
    public function howToEat(): string
    {
        return "Apple could be slided";
    }
}