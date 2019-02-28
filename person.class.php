<?php
require_once("employee.class.php")
public class Person extends Employee{
    private $first_name;
    private $last_name;
    
    public function __construct() {

    }
    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this>last_name;
    }
    public function toString() {
        echo "First name: " . $this->getFirstName() . " Last name: " . $this->getLastName();
    }
}

?>