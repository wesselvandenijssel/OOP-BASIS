<?php

class Bottle
{
    public $cap = "closed";
    public $label = "";
    public $brand = "";
    public $content = 0;
    public $height = 0;
    public $diameter = 0;
    public $width = 0;

    public function __construct($brand, $height, $width, $diameter)
    {
        $this->brand = $brand;
        $this->height = $height;
        $this->width = $width;
        $this->diameter = $diameter;
    }

    //Cap closed or open
    public function setCap($action)
    {
        $this->cap = $action;
    }

    public function getCap()
    {
        return $this->cap;
    }

    //Content in or out
    public function setContent($value)
    {
        $this->content = $value;
    }

    public function getContent()
    {
        return $this->content;
    }

    //Get a hold of the object

    //destroy bottle

}

echo "<pre>";
$spaBottle = new Bottle("SPA",10,5,3);

// $spaBottle->setCap("open");
$spaBottle->setContent(100);

$spaBottle->setContent(100-10);

echo $spaBottle->getContent();

echo "<br>---------<br>";

$cocaCola = new Bottle("CocaCola",10,5,3);

$cocaCola->setCap("open");

var_dump($cocaCola);