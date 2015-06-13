<?php
namespace DrinkAbstract;


class Espresso extends DrinkAbstract
{

    public function __construct()
    {
        $this->name = "Espresso";    
        $this->setIngredients(['coffee', 'water']);
    }
}
