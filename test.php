<?php

class sumeet{                                        // this is a class
   public $prop1= "This is my first class property"; //this is a property
   
   public function setprop($setval){                 // this is a method or class specific function
     $this->prop1 = $setval;
   }
   public function getprop(){
    return $this->prop1. "<br>";
   }
}
$obj = new sumeet; //creating an object

echo $obj->getprop(); //calling the method like a normal function.

$obj->setprop("This is second class property"); //setting a new value by calling the method

echo $obj->getprop();  //echoing the new value of the method
?>