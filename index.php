<?php

require_once(__DIR__.'/vendor/autoload.php');

use Employee\Employee\Salary;
use Employee\Employee\Employee;

$employee = new Employee(
    'Mohammed Yehia',
    37,
    3600,
    0.38
);

$employee->setAbsence(2);
$employee->setAbsenceRate(120);
$employee->setOvertime(12);
$employee->setOvertimeRate(35);

echo $employee->getName(), '\'s net salary in euros is ', (new Salary($employee))->calculateNetSalary();
