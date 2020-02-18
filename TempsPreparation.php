<?php 

class TempsPreparation {
    
    
    private $tempsCuisson;
    private $tempsConservation;
    private $tempsTotal;

    public function __construct($tempsCuisson, $tempsConservation) {

        $this->setTempsCuisson($tempsCuisson);
        $this->setTempsConservation($tempsConservation);
        $this->setTempsTotal($tempsCuisson, $tempsConservation);

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
    * type: Calcule
    */
    public function getTempsTotal() {
        return $this->tempsTotal;
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
    public function setTempsTotal($tempsCuisson, $tempsConservation) {
        $this->tempsTotal = $tempsCuisson + $tempsConservation;
    }
}
