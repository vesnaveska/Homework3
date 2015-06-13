<?php
namespace DrinkAbstract;

use CoffeeMachine\CoffeeMachine;

require __DIR__ . '/vendor/autoload.php';

try {

    $coffeeMachine = new CoffeeMachine();

    $coffeeMachine->addIngredients([
        'coffee', 'water', 'milk', 'frothed milk', 'whipped cream', 'whisky', 'chocolate'
    ]);

  
    $coffeeMachine->runCoffeeMachine(new Espresso());

    $coffeeMachine->runCoffeeMachine(new Doppio());
   
    $coffeeMachine->runCoffeeMachine(new Americano());    
    
    $coffeeMachine->runCoffeeMachine(new Cappuccino());
 

    $mokko = new CustomDrink('Mokko');
    $mokko->setIngredients(['white chocolate', new Espresso(), 'milk', 'whipped cream']);
    $coffeeMachine->runCoffeeMachine($mokko);
    echo " - Mokko" . PHP_EOL;


    $irish = new CustomDrink('Irish');
    $irish->setIngredients([new Espresso(), new Espresso(), 'whisky', 'whipped cream']);
    $coffeeMachine->runCoffeeMachine($irish);
    echo " - Irish" . PHP_EOL;

} catch (\Exception $e) {
    echo "(Error) " . $e->getMessage();
}