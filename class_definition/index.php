<?php

/**
 * Task: Create a basic Person class with properties like
 *  name, age and methods like
 *  getName(), getAge(), setAge()
 */

class Person
{
  public $name = 'John';
  public $age = 20;

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
