<?php

/**
 * Task: Extend the Person class to include a constructor method
 * that initilizes the name and age properties
 */

class Person
{
  public $name;
  public $age;

  // Constructor to initialize properties
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($newAge)
  {
    $this->age = $newAge;
  }
}

//Instanciation of Person class
$john = new Person('John', 21);
$jane = new Person('Jane', 6);

echo 'Hello, my name is ' . $john->name . ' I am ' . $john->age . ' years old <br>';
echo 'Hello, my name is ' . $jane->name . ' I am ' . $jane->age . ' years old';
