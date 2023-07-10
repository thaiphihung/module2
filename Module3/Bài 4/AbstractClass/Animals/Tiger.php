<?php

include_once('Animal.php');

class Tiger extends Animal
{
    public function makeSound(): string
    {
        return "Tiger: roarrrrr!";
    }
}