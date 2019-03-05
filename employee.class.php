<?php
abstract class Employee{
    private $person;
    private $ssn;
    private static $employee_count = 0;
    
    abstract public function __construct();
    abstract public function getPerson();
    abstract public function getSSN();
    abstract public function getEmployeeCount();
    abstract public function toString();
}

?>