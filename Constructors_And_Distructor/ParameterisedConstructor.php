<?php
class Employee
{
    //properties of our class
    public $name;
    public $salary;

    /**
     * constructors-> It allows you to initialize objects.
     * It is the code which is executed whenever a new object is instantiated.
     */
    //constructor with argument
    function __construct($name, $salary)
    {
        $this-> name = $name;
        $this-> salary = $salary; 
    }
}

$nadeem = new Employee("Nadeem", 56000);
$sameer = new Employee("Sameer", 60000);
$ali = new Employee("Ali", 80000);

echo "The Salary of ".$nadeem->name." is: ".$nadeem->salary ."\n";
echo "The Salary of ".$sameer->name." is: ".$sameer->salary ."\n";
echo "The Salary of ".$ali->name." is: ".$ali->salary ."\n";
