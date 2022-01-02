<?php

class car 
{
    //creating Function
    public function StartCar()
    {
        echo "Car Started from Parent Class"."\n";
    }
    //i am creating this function to invoke parent class value in child class
}
class SportsCar extends car
{
    //creating function with same name as parentClass
    public function StartCar()
    {
        //overriding the method
        echo "Car Started from Child Class"."\n";
    }

}

$spCar = New SportsCar();
$spCar->StartCar();
//by help of InvokeParent Function i can print value of parent class after overriding function with help of child class object
?>
