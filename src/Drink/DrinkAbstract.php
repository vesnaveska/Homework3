<?php
namespace DrinkAbstract;


abstract class DrinkAbstract
{
    protected $name;
    protected $ingredients = array();

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function make()
    {
        echo "You make drink: $this->name" . PHP_EOL;
        return $this->name;
    }
}