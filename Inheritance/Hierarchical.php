<?php

class Car
{
    function __construct()
    {
        echo "Audi R8 Has V8 Engine"."\n";
    }
    function chassis()
    {
        echo "Audi R8 Chassis is damage proof"."\n";
    }
}
class Body extends Car
{
    function design()
    {
        echo "Audi R8 Body Design is Aerodynamic"."\n";
    }
}
class NoBreaks extends Car
{
    function NoBreaks()
    {
        echo "Audi R8 has 4 high quality Disk Brakes"."\n";
    }
}

$audiR8 = new Body();
$audiR8->design();
$audiR8->chassis();

$car= new NoBreaks();
$car->chassis();
$car->NoBreaks();
