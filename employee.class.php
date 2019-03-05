<?php
abstract class Employee{
    private $person;
    private $ssn;
    private $employee_count;
    
    abstract public function __construct();
    abstract public function getPerson();
    abstract public function getSSN();
    abstract public function getEmployeeCount();
    abstract public function toString();
}

?>