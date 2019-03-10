<?php
require_once("employee.class.php");
class SalariedEmployee {
    private $weekly_salary;
    
    public function __construct($float) {
        $this->weekly_salary = $float;
    }
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }
    public function getPaymentAmount() {
        return $this->weekly_salary;  
    }
    public function toString() {
        echo "I am a Salaried Employee:<br>I am paid $" . $this->getPaymentAmount() . " per week.";
    }
}
?>