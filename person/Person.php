<?php

namespace Person;

class Person
{
  public $name;
  private $age;

  private static $count = 0;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;

    self::$count++;
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

  public static function countCreatedObjects()
  {
    return self::$count;
  }
}
