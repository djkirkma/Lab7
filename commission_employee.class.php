<?php
require_once("employee.class.php");
class CommissionEmployee extends Employee {
    private $sales;
    private $commission_rate;
    
    public function __construct($mySales, $mycomission_rate) {
        $this->sales = $mySales;
        $this->commission_rate = $mycomission_rate;
    }
    public function getSales() {
        return $this->sales;
    }
    public function getCommissionRate() {
        return $this->commission_rate;
    }
    public function getPaymentAmount() {
        return $this->sales * $this->getCommissionRate();
    }
    public function toString() {
        echo "I am a Comission Employee: my sales are $" . $this->getSales() . ", my rate is " . $this->getCommissionRate() .", and my wage is $" . $this->getPaymentAmount() . " per week";
    }
    
}

?>