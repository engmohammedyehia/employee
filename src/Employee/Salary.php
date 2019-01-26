<?php
namespace Employee\Employee;

/**
 * Class Salary
 * This class is part of the Employee package
 * and is meant for teaching purposes only
 * @package Employee\Employee
 * @author Mohammed Yehia <firefoxegy@gmail.com>
 */
class Salary
{
    /**
     * @var Employee
     */
    private $employee;

    /**
     * Salary constructor.
     * @param Employee $employee
     */
    public function __construct(Employee $employee)
    {
        $this->setEmployee($employee);
    }

    /**
     * @return Employee
     */
    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    /**
     * @param Employee $employee
     */
    public function setEmployee(Employee $employee): void
    {
        $this->employee = $employee;
    }

    /**
     * Calculates the employee overtime
     * @return float|int
     */
    public function calculateOvertime()
    {
        return $this->employee->getOvertime() * $this->employee->getOvertimeRate();
    }

    /**
     * Calculates the employee absence
     * @return float|int
     */
    public function calculateAbsence()
    {
        return $this->employee->getAbsence() * $this->employee->getAbsenceRate();
    }

    /**
     * Calculates the taxes of the salary
     * @return float|int
     */
    public function calculateSalaryAfterTax()
    {
        return $this->employee->getSalary() - ($this->employee->getSalary() * $this->employee->getTax());
    }

    /**
     * Calculates the net salary of the employee
     * @return float|int
     */
    public function calculateNetSalary()
    {
        return $this->calculateSalaryAfterTax() + $this->calculateOvertime() - $this->calculateAbsence();
    }
}
