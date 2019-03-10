<?php
require_once("commission_employee.class.php");
class BasePlusCommissionEmployee extends CommissionEmployee {
    
    private $base_salary;
    //construct funcction
    public function __construct($mybase_salary) {
        parent::$employee_count++;
        $this->base_salary = $mybase_salary;
    }
    //Get functions
    public function getBaseSalary() {
        return $this->base_salary;
    }
    public function getPaymentAmount() {
        return parent::getPaymentAmount() + $this->getBaseSalary();
    }
    //Tostring function
    public function toString() {
        echo "I am a Base Plus Comission Employee:<br> My base salary is $" . $this->getBaseSalary() . "<br>My payment is $" . $this->getPaymentAmount();
    }
}
?>