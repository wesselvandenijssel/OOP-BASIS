<?php
class SimpleClass
{
   // property declaration
   public $var;
   // constructor declaration
   public function __construct ($a) {
       $this->var = $a;
   }
   // method declaration
   public function displayVar() {
       echo $this->var;
   }
}
?>