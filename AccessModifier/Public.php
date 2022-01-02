<?php
/**
 * public accessed in three possible situations
 * 1:-from outside the class in which it is declared
 * 2:-from within the class in which it is declared
 * 3:-from within another class that implements the class in which it is declared
 */

class Food
{
    /**
     * creating public veriable
     */
    public $Foodname;

    /**
     * if we do not mention public infront of function it will be automatically default public 
     */
    public function showData()
    {
        echo "Item is : ".$this->Foodname."\n";
    }
}
$f1 = new Food();
$f1->Foodname="Pizza";
$f1->showData();

?>