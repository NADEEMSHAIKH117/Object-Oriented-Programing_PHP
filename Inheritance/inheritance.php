<?php
/**
 * Inheritance is useful for code reusability 
 * reuse attributes and method of an exusting class when you create a new class
 */
class Parents
{
    function __construct()
    {
        echo "This is parent class constructor"."\n";
    }
    function parentsfun()
    {
        echo "I am the function of  Parent Class"."\n";
    }
}

/**
 * by the help of extends key word we can access parent class in child class
 */
class Child extends Parents
{
    function childfun()
    {
        echo "I am the function of child class"."\n";
    }
}

$child = new Child();
$child->childfun();
$child->parentsfun();
?>