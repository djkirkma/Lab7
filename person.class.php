<?php
require_once("employee.class.php");
  class Person {
    private $first_name;
    private $last_name;
    
    //construct function
    public function __construct($first, $last) {
        $this->first_name = $first;
        $this->last_name = $last;
    }
    //Get functions
    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }
    //Tostring Function
    public function toString() {
        echo "<b>First name:</b> " . $this->getFirstName() . "<br><b>Last name:</b> " . $this->getLastName();
    }
}

?>