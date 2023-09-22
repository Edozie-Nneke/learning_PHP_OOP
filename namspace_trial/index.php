<?php

/**
 * Task: Organise the classes into appropriate namespaces
 */

// use employee\Employee;
use Person\Person;

$employeeOne = new Person('Valentine', 28);

echo 'This is my ' . $employeeOne->getName();
