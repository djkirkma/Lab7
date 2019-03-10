<?php
abstract class Employee implements Payable{
    private $person;
    private $ssn;
    //Static employee count
    public static $employee_count = 0;
    //construct functions
    public function __construct($myPerson,$mySsn) {
        $this->person = $myPerson;
        $this->ssn = $mySsn;
        self::$employee_count++;
    }
    //Get Functions
    public function getPerson() {
        return $this->person;
    }
    public function getSSN() {
        return $this->ssn;
    }
    //Static employee count
    public static function getEmployeeCount() {
        return self::$employee_count;
    }
    //Tostring function
    public function toString() {
        echo "I am an employee.  My person is " . $this->person->toString() . " my SSN: " . $ssn . " employee count is " . $this->getEmployeeCount();
    }
}

?>