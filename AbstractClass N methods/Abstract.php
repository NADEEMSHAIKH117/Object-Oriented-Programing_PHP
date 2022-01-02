<?php
/**
 * creating Abstract class 
 * if we create a class and in that class if we create abstract method automatically that class also becomes Abstract class
 */
abstract class person
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    //created abstract function
    /**
     * Data abstraction is the process of hiding certain details and showing only essential information to user.
     */
    abstract public function job();
}

class Teacher extends person
{
    public function job()
    {
        return "My name is $this->name and I am a teacher in Army Public school " . "\n";
    }
}

class Engineer extends person
{
    public function job()
    {
        return " My name is $this->name and I am a Software Developer in Mantra Labs "."\n";
    }
}

class Soldier extends person
{
    public function job()
    {
        return " My name is $this->name and My rank is Lieutenant "."\n";
    }
} 

$teacher = new Teacher('Shamal');
echo $teacher->job();

$engineer = new Engineer("Sameer");
echo $engineer->job();

$army = new Soldier("Nadeem");
echo $army->job();