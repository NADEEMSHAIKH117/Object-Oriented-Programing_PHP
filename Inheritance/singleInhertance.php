<?php

class Parents 
{
    function __construct()
    {
        echo "This is parent class constructor"."\n";
    }

    function engine()
    {
        echo "Audi R8 has V8 Engine"."\n";
    }
}

class Child extends Parents
{
    function __construct()
    {
        echo "This is child class constructor"."\n";
        parent::__construct();
    }

    function topSpeed()
    {
        echo "Audi R8 has top speed of 301km/h"."\n";
    }
}

$audiR8 = new Child();
$audiR8->engine();
$audiR8->topSpeed();
?>