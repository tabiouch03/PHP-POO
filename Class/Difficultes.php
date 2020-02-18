<?php 

class difficulte
{
    private $difficulte;

    public function __construct($difficulte)
    {
        $this->setDifficulte($difficulte);
    }

    /* GUETTERS */

    /*
    * return $difficulte
    * type: string
    */
    public function getDifficulte() {
        return $this->difficulte;
    }

    /* SETTERS */

    /*
    * set value $difficulte
    * type: string
    */
    public function setDifficulte($difficulte) {
        $this->difficulte = $difficulte;
    }
}