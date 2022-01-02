<?php

use Food as GlobalFood;

/**
 * private only accessible for the class in which they are declared
 * private members are not accessible in child class while using inheritance
 */
class StreetFood
{
    private $Foodname;

    function getName($name)
    {
        $this->Foodname=$name;
    }

    public function showData()
    {
        echo "Item is : ".$this->Foodname."\n";
    }
}


/**
 * we can not use $FoodName in child class becouse it private
 */
class JunkFood extends StreetFood
{
    private $Jfname="Sandwich";

    function passValue()
    {
        $this->getName($this->Jfname);
    }
}

$f1 = new StreetFood();
$f1->getName("Pizza");
$f1->showData();

$jf = new JunkFood();
$jf->passValue();
$jf->showData();

?>