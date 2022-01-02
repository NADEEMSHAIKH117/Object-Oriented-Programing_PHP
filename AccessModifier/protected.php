<?php

use JunkFood as GlobalJunkFood;

/**
 * A protected property or method is accessible in the class in which it is declared, as well
 * as in that extend the class
 * But for child class it become private member
 */
class StreetFood
{
    protected $Foodname;

    public function getName($name)
    {
        $this->Foodname=$name;
    }

    public function showData()
    {
        echo "Item is : ".$this->Foodname."\n";
    }
}


class JunkFood extends StreetFood
{
    
   function passValue()
   {
       $this->Foodname="Samosa";
   }
}

$js = new GlobalJunkFood();
$js->passValue();
$js->showData();

?>