<?php
abstract class Employee{
    private $person;
    private $ssn;
    private $employee_count;
    
    abstract public function __construct() {

    }
    abstract public function getPerson() {
        return $this->person;
    }
    abstract public function getSSN() {
        return $this->ssn;
    }
    abstract public function getEmployeeCount() {
        return $this-employee_count;
    }
    abstract public function toString() {
        echo "";
    }
}

?>