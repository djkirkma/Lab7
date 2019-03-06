<?php
require_once("autoload.php");

$Person1 = new Person("Jay","Conway");

echo $Person1->toString();

//$Employee1 = new Employee($Person1, 111-11-1111);         Uncaught Error: Cannot instantiate abstract class (we prob don't need this)
//echo $Employee1->toString();

//Salaried
$SalariedEmployee1 = new SalariedEmployee(1000);
echo "<br>";
$SalariedEmployee1->toString();
//Comission
$CommissionEmployee1 = new CommissionEmployee(100, .5);
echo "<br>";
$CommissionEmployee1->toString();
//Hourly
$HourlyEmployee1 = new HourlyEmployee(10, 15);
echo "<br>";
$HourlyEmployee1->toString();

$BasePlusCommissionEmployee1 = new BasePlusCommissionEmployee(10, 15);
echo "<br>";
$BasePlusCommissionEmployee1->toString();

$Invoice1 = new Invoice(123,"cool part", 2, 5.00);
echo "<br>";
$Invoice1->toString();
?>