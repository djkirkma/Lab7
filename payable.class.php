<?php
require_once("employee.class.php");
public interface Payable extends Employee{
    
    public function getPaymentAmount();
    public function toString();
    
}

?>