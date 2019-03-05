<?php
require_once("commission_employee.class.php")
public class BasePlusCommissionEmployee extends CommissionEmployee {
    
    private $base_salary;
    
    public function __construct() {

    }
    public function getBaseSalary() {
        return $this->base_salary;
    }

    public function getPaymentAmount() {
        
    }
    public function toString() {

    }
}
?>