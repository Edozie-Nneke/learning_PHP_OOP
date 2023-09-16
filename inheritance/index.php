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
  private $position;
  private $salary;

  public function __construct($employee_name, $employee_age, $position, $salary)
  {
    parent::__construct($employee_name, $employee_age);
    $this->position = $position;
    $this->salary = $salary;
  }

  public function getPostion()
  {
    return $this->position;
  }

  public function setPostion($newPosition)
  {
    $this->position = $newPosition;
  }

  public function getSalary()
  {
    return $this->salary;
  }

  public function setSalary($newSalary)
  {
    $this->salary = $newSalary;
  }
}

$employeeOne = new Employee('John Doe', 23, 'Software Developer', 200000);

echo 'I am a new employee and my name is ' . $employeeOne->name . '.<br> I am a ' . $employeeOne->getPostion() . ' and earn ' . 'N' . $employeeOne->getSalary();
