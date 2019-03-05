<?php
require_once("employee.class.php");
public class HourlyEmployee extends Employee {
    private $wage;
    private $hours;
    
    public function __construct() {

    }
    public function getWage() {
        return $this->wage;
    }
    public function getHours() {
        return $this->hours;
    }
    public function getPaymentAmount() {

    }
    public function toString() {
        
    }
}

?>