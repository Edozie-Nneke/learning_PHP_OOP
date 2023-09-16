<?php

/**
 * Task: Create an Employee class that extends the Person class.
 * Add additional properties like position and salary
 */

class Person
{
  public $name;
  public $age;

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

class Employee extends Person
{
}

$employeeOne = new Employee('Edozie', 23);

echo 'I am a new employee and my name is ' . $employeeOne->name;
