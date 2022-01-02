<?php

interface Class1
{
    public function test1();
}
interface Classs2
{
    public function test2();
}

class Class3 implements Class1,Classs2
{
    public function test1()
    {
        echo "This is class 1 function"."\n";
    }
    public function test2()
    {
        echo "This is class 2 function"."\n";
    }
}

$obj = new Class3();
$obj->test1();
$obj->test2();
?>