<?php
abstract class Employee{
    private $person;
    private $ssn;
    private $employee_count;
    
    abstract protected function __construct() {

    }
    abstract protected function getPerson() {
        return $this->person;
    }
    abstract protected function getSSN() {
        return $this->ssn;
    }
    abstract protected function getEmployeeCount() {
        return $this-employee_count;
    }
    abstract protected function toString() {
        echo "";
    }
}

?>