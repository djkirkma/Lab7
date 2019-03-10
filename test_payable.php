<?php
/** Author: Doug Kirkman, Jay Conway, Hannah Curtis
 * Date: 3/10/2019
 * Name: test_payable.php
 * Demonstrates Lab 7 objects, polymorphism, and counts
 * */


//Autoload classes
require_once("autoload.php");
//Person object
$Person1 = new Person("Jay","Conway");

echo $Person1->toString();

//Salaried object
$SalariedEmployee1 = new SalariedEmployee(1000);
echo "<br><br>";
$SalariedEmployee1->toString();
//Comission object
$CommissionEmployee1 = new CommissionEmployee(100, .5);
echo "<br><br>";
$CommissionEmployee1->toString();
//Hourly object
$HourlyEmployee1 = new HourlyEmployee(10, 15);
echo "<br><br>";
$HourlyEmployee1->toString();
// Base object
$BasePlusCommissionEmployee1 = new BasePlusCommissionEmployee(10, 15);
echo "<br><br>";
$BasePlusCommissionEmployee1->toString();
//Invoice object
$Invoice1 = new Invoice(123,"cool part", 2, 5.00);
echo "<br><br>";
$Invoice1->toString();
echo "<br><br>";
//Output counts
echo "There are " . Invoice::getInvoiceCount() . " Invoices";
echo "<br><br>";
echo "There are " . Employee::getEmployeeCount() . " Employees";
?>