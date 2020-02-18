<?php


class Recette
{

    private $ingredients;
    private $ustensiles;
    private $appareils;
    private $tempsPreparations;
    private $difficulte;

    public function __construct($ingredients, $ustensiles, $appareils, $tempsPreparations, $difficulte)
    {
        $this->setIngredients($ingredients);
        $this->setUstensiles($ustensiles);
        $this->setAppareils($appareils);
        $this->setTempspreparations($tempsPreparations);
        $this->setDifficulte($difficulte);
    }


    /* GUETTERS */

    /*
    * return $tempsPreparations
    * type: array[object]
    */
    public function getDifficulte() {
        return $this->difficulte;
    }

    /*
    * return $tempsPreparations
    * type: array[object]
    */
    public function getTempsPreparation() {
        return $this->tempsPreparations;
    }

    /*
    * return $ingredient
    * type: array[object]
    */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /*
    * return $ustensile
    * type: array[object]
    */
    public function getUstensiles()
    {
        return $this->ustensiles;
    }

    /*
    * return $appareil
    * type: array[object]
    */
    public function getAppareils()
    {
        return $this->appareils;
    }


    /* SETTERS */

    /*
    * set value difficulte
    * type: array[object]
    */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;
    }


    /*
    * set value Tempspreparation
    * type: array[object]
    */
    public function setTempsPreparations($tempsPreparations)
    {
        $this->tempsPreparations = $tempsPreparations;
    }

    /*
    * set value ingredients
    * type: array[object]
    */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /*
    * set value ustensiles
    * type: array[object]
    */
    public function setUstensiles($ustensiles)
    {
        $this->ustensiles = $ustensiles;
    }

    /*
    * set value appareils
    * type: array[object]
    */
    public function setAppareils($appareils)
    {
        $this->appareils = $appareils;
    }
}


