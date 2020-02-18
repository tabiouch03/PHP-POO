<?php 

class TempsPreparation {
    
    
    private $tempsCuisson;
    private $tempsConservation;
    private $tempsTotal;

    public function __construct($tempsCuisson, $tempsConservation, $tempsTotal) {

        $this->setTempsCuisson($tempsCuisson);
        $this->setTempsConservation($tempsConservation);
        $this->setTempsTotal($tempsTotal);

    }

    /* GUETTERS */

    /*
    * return $tempscuisson
    * type: string
    */
    public function getTempsCuisson() {
        return $this->tempscuisson;
    }

    /*
    * return $tempsconservation
    * type: string
    */
    public function getTempsConservation() {
        return $this->tempsconservation;
    }

    /*
    * return $tempstotal
    * type: string
    */
    public function getTempsTotal() {
        return $this->tempstotal;
    }

    //-----------//
    /*- SETTERS -*/
    //----------//

    /*
    * set value tempscuisson
    * type: string
    */
    public function setTempscuisson($tempscuisson) {
        $this->tempscuisson = $tempscuisson;
    }

    /*
    * set value tempsconservation
    * type: string
    */
    public function setTempsConservation($tempsconservation) {
        $this->tempsconservation = $tempsconservation;
    }

    /*
    * set value tempstotal
    * type: string
    */
    public function setTempsTotal($tempstotal) {
        $this->tempstotal = $tempstotal;

    }
}
