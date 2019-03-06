<?php
abstract class Employee implements Payable{
    private $person;
    private $ssn;
    private static $employee_count = 0;
    
    public function __construct($myPerson,$mySsn) {
        $this->person = $myPerson;
        $this->ssn = $mySsn;
        self::$employee_count++;
    }
    public function getPerson() {
        return $this->person;
    }
    public function getSSN() {
        return $this->ssn;
    }
    public static function getEmployeeCount() {
        return $this-employee_count;
    }
    public function toString() {
        echo "I am an employee.  My person is " . $this->person->toString() . " my SSN: " . $ssn . " employee count is " . $this->getEmployeeCount();
    }
}

?>