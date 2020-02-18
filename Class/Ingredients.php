<?php

class Ingredient
{

    // on declare les attributs
    private $name;
    private $quantity;
    private $mesure;

    // Le constructeur ( Plan )
    public function __construct($name, $quantity, $mesure)
    {
        $this->setName($name);
        $this->setQuantity($quantity);
        $this->setMesure($mesure);
    }


    /* Guetters */

    /*
    * get name
    * type: string
    */
    public function getName()
    {
        return $this->name;
    }

    /*
    * get quantity
    * type: float
    */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /*
    * get mesure
    * type: string
    */
    public function getMesure()
    {
        return $this->mesure;
    }

    /* Setter */

    /*
    * set value name
    * type: string
    */
    public function setName($name)
    {
        $this->name = $name;
    }

    /*
    * set value quantity
    * type: float
    */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /*
    * set value mesure
    * type: string
    */
    public function setMesure($mesure)
    {
        $this->mesure = $mesure;
    }
}

// en dehors de la class on va faire un test 
// $test = new Ingredient('chocolat', 100, 'grammes');
// echo 'Nom : ' . $test->getName() . '<br/>';
// echo 'Quantité : ' . $test->getQuatity() . '<br/>';
// echo 'Mesure : ' . $test->getMesure();
