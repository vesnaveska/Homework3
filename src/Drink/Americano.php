<?php
namespace DrinkAbstract;


class Americano extends DrinkAbstract
{

    public function __construct()
    {  
    	$this->name = "Americano";   
        $this->setIngredients([new Espresso(), 'water']);

         
    }
}