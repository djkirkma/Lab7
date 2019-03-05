<?php
require_once("employee.clas.php");
public class CommissionEmployee extends Employee {
    private $sales;
    private $commission_rate;
    
    public function __construct($mySales, $mycomission_rate) {
        $this->sales = $mySales;
        $this->$commission_rate = $mycomission_rate;
    }
    public function getSales() {
        return $this->sales;
    }
    public function getCommissionRate() {
        return $this->commission_rate;
    }
    public function getPaymentAmount() {
        return $mySales * $mycomission_rate;
    }
    public function toString() {
        echo "My wage is " . $this->getPaymentAmount() . " per week";
    }
    
}

?>