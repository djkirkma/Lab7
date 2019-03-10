<?php
require_once("employee.class.php");
class CommissionEmployee extends Employee {
    private $sales;
    private $commission_rate;
    
    //constuct function
    public function __construct($mySales, $mycomission_rate) {
        parent::$employee_count++;
        $this->sales = $mySales;
        $this->commission_rate = $mycomission_rate;
    }
    //Get functions
    public function getSales() {
        return $this->sales;
    }
    public function getCommissionRate() {
        return $this->commission_rate;
    }
    public function getPaymentAmount() {
        return $this->sales * $this->getCommissionRate();
    }
    //Tostring function
    public function toString() {
        echo "I am a Comission Employee:<br>My sales are $" . $this->getSales() . "<br>My rate is " . $this->getCommissionRate() ."<br>My wage is $" . $this->getPaymentAmount() . " per week";
    }
    
}

?>