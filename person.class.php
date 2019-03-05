<?php
require_once("employee.class.php");
  class Person {
    private $first_name;
    private $last_name;
    
    public function __construct($first, $last) {
        $this->first_name = $first;
        $this->last_name = $last;
    }
    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }
    public function toString() {
        echo "First name: " . $this->getFirstName() . " Last name: " . $this->getLastName();
    }
}

?>