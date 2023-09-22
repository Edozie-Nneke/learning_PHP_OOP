<?php

namespace Employee;

use person\Person;


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


  //Override sendMessage() 
  public function sendMessage()
  {
    return $this->name . ' is a ' . $this->position;
  }
}
