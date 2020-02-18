<?php 

class TitreRecette
{

    private $title;

    public function __construct($title)
    {
        $this->setTitle($title);
    }

    /*
    * return $name
    * type: string
    */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}