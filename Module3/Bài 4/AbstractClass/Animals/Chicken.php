<?php

include_once('Animal.php');
include_once('InterfaceClass/Edible.php');
class Chicken extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat(): string
    {
        return "could be fried";
    }
}