<?php
require_once("employee.clas.php");
public class CommissionEmployee extends Employee {
    private $sales;
    private $commission_rate;
    
    public function __construct() {
        
    }
    public function getSales() {
        return $this->sales;
    }
    public function getCommissionRate() {
        return $this->commission_rate;
    }
    public function getPaymentAmount() {
        
    }
    public function toString() {

    }
    
}

?>