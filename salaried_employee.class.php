<?php
require_once("employee.class.php");
class SalariedEmployee extends Employee{
    private $weekly_salary;
    
    //Construct function
    public function __construct($float) {
        parent::$employee_count++;
        $this->weekly_salary = $float;
    }
    //Get function
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }
    public function getPaymentAmount() {
        return $this->weekly_salary;  
    }
    //Tostring function
    public function toString() {
        echo "I am a Salaried Employee:<br>I am paid $" . $this->getPaymentAmount() . " per week.";
    }
}
?>