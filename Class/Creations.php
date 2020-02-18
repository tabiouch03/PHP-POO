<?php 

class Creation {

    private $date;
    private $nom;
    

    public function __construct($date,$nom)
    {
        $this->setDate($date);
        $this->setNom($nom);
    }


    /* Guetters */

    /*
    * return $nom
    * type: string
    */
    public function getNom()
    {
        return $this->nom;
    }

    /*
    * return $date
    * type: datetime
    */
    public function getDate()
    {
        return $this->date;
    }

    /* Setters */

    /*
    * set value $nom
    * type: string
    */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /*
    * set value $date
    * type: string
    */
    public function setDate($date)
    {
        $this->date = $date;
    }

}