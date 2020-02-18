<?php


class Recette
{

    private $ingredients;
    private $ustensiles;
    private $appareils;
    private $tempsPreparations;

    public function __construct($ingredients, $ustensiles, $appareils, $tempsPreparations)
    {
        $this->setIngredients($ingredients);
        $this->setUstensiles($ustensiles);
        $this->setAppareils($appareils);
        $this->setTempspreparations($tempsPreparations);
    }


    /* GUETTERS */

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


