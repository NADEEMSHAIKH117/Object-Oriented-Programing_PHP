<?php

class Employee{
    //property of our class
    public $name;
    public $salary;

    //constructors
    function __construct($name, $salary)
    { 
        $this->name = $name;
        $this->salary = $salary;
    }

    //Destructor
    function __destruct()
    {
        echo "I am destructing $this->name"."\n";
    }

}
$nadeem = new Employee("Nadeem", 56000);
$sameer = new Employee("Sameer", 60000);
$ali = new Employee("Ali", 80000);

?>