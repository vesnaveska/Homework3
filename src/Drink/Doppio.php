<?php
namespace DrinkAbstract;


class Doppio extends DrinkAbstract
{

    public function __construct()
    {
        $this->name = "Doppio";   
        $this->setIngredients([new Espresso(), new Espresso()]);
    }
}