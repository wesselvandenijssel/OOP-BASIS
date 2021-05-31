<?php

class Plakbandhouder
{
    public $plakband = "aanwezig";
    public $label = "";
    public $brand = "Scotch";
    public $height = 0;
    public $diameter = 0;
    public $width = 0;

    public function __construct($label, $height, $width, $diameter)
    {
        $this->label = $label;
        //$this->brand = $brand;
        $this->height = $height;
        $this->width = $width;
        $this->diameter = $diameter;
    }

    //Cap closed or open
    public function setplakband($action)
    {
        $this->plakband = $action;
    }

    public function getplakband()
    {
        return $this->plakband;
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
$plakband = new Plakbandhouder("Plakbandhouder",10,5,3);

$plakband->setplakband("afwezig");
//$plakband->setContent(100);

//$plakband->setContent(100-10);

//echo $plakband->getContent();

echo "<br>---------<br>";

var_dump($plakband);

//$cocaCola = new plakbandhouder("CocaCola",10,5,3);

//$cocaCola->setplakband("open");

//var_dump($cocaCola);




echo '<br><hr><br>';

include('simpleclass.php');
$instance = new SimpleClass('Dit is een test');
// Info: dit kan ook gedaan worden met een variabele:
// $className = 'SimpleClass';
// $instance = new $className('new value'); // new SimpleClass()
echo 'Output = ';
$instance->displayVar();
?>