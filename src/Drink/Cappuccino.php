<?php
namespace DrinkAbstract;


class Cappuccino extends DrinkAbstract
{
    public function __construct()
    {
        $this->name = "Cappuccino";   
        $this->setIngredients([new Espresso(), 'milk', 'frothed milk']);
    }
}