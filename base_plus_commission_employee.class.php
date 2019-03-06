<?php
require_once("commission_employee.class.php");
class BasePlusCommissionEmployee extends CommissionEmployee {
    
    private $base_salary;
    
    public function __construct($mybase_salary) {
        $this->base_salary = $mybase_salary;
    }
    public function getBaseSalary() {
        return $this->base_salary;
    }

    public function getPaymentAmount() {
        return parent::getPaymentAmount() + $this->getBaseSalary();
    }
    public function toString() {
        echo "I am a Base Plus Comission Employee: my base salary is $" . $this->getBaseSalary() . " and my payment is $" . $this->getPaymentAmount();
    }
}
?>