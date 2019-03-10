<?php
require_once("employee.class.php");
class HourlyEmployee extends Employee {
    private $wage;
    private $hours;
    
    public function __construct($myWage, $myHours) {
        $this->wage = $myWage;
        $this->hours = $myHours;
    }
    public function getWage() {
        return $this->wage;
    }
    public function getHours() {
        return $this->hours;
    }
    public function getPaymentAmount() {
        if($this->hours <= 40) {
            return ($this->wage * $this->hours);
        }
        else {
            return ($this->wage * 40) + (1.5 * $this->wage ($this->hours - 40));
        }
    }
    public function toString() {
        echo "I am a Hourly Employee: my wage is $" . $this->getWage() . "<br>My hours are " . $this->getHours() . " hours<br>My payment amount is $" . $this->getPaymentAmount();
    }
}

?>