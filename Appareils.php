<?php

class Appareil
{

    private $name;
    private $utility;

    public function __construct($name, $utility)
    {
        $this->setName($name);
        $this->setUtility($utility);
    }


    /* Guetters */

    /*
    * return $name
    * type: string
    */
    public function getName()
    {
        return $this->name;
    }

    /*
    * return $utility
    * type: string
    */
    public function getUtility()
    {
        return $this->utility;
    }

    /* Setters */

    /*
    * set value $name
    * type: string
    */
    public function setName($name)
    {
        $this->name = $name;
    }

    /*
    * set value utility
    * type: string
    */
    public function setUtility($utility)
    {
        $this->utility = $utility;
    }
}

// $test = new Appareil('Four', 'Va chauffer');
// echo 'Nom : ' . $test->getName() . '<br/>';
// echo 'Utilité : ' . $test->getUtility();
