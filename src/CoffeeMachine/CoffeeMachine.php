<?php
namespace CoffeeMachine;

use DrinkAbstract\DrinkAbstract;

class CoffeeMachine
{
    private $defaultIngredients = [
        'coffee', 'water', 'milk', 'frothed milk', 'sugar', 'whipped cream', 'whisky', 'chocolate'
    ];

    private $addIngredient = array();


    public function addIngredients(array $ingredients)
    {      
        foreach ($ingredients as $ingredient) {
            if (in_array($ingredient, $this->defaultIngredients)) {
                $this->addIngredient[] = $ingredient;
            } else {
                throw new \Exception('This is an unknown ingredient: ' . $ingredient);
            }
        }
    }
        private function checkRecipe(DrinkAbstract $drinkAbstract)
    {
        foreach ($drinkAbstract->getIngredients() as $coffee) {
            if ($coffee instanceof DrinkAbstract) {
                $this->checkRecipe($coffee);
            } elseif (!in_array($coffee, $this->addIngredient)){
                throw new \Exception('There are not enough ingridient to make your coffee: ' . $coffee);
            }
        }
    }

    public function runCoffeeMachine(DrinkAbstract $drinkAbstract)
    {
        $this->checkRecipe($drinkAbstract);       
        return $drinkAbstract->make();
    }
}