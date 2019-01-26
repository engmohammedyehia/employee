<?php
namespace Test\Unit\Employee;

use Employee\Employee\Employee;
use Employee\Employee\Salary;
use PHPUnit\Framework\TestCase;

class SalaryTest extends TestCase
{
    /**
     * @var Salary
     */
    private $salary;

    /**
     * @var Employee
     */
    private $employee;

    /**
     * Setting up mocks
     */
    public function setUp()
    {
        $this->employee = new Employee(
            'Mohammed Yehia',
            37,
            3600,
            0.38
        );
        $this->employee->setOvertime(12);
        $this->employee->setOvertimeRate(35);
        $this->employee->setAbsence(2);
        $this->employee->setAbsenceRate(120);
        $this->salary = new Salary($this->employee);
    }

    public function testCalculateNetSalary()
    {
        $this->assertEquals(2412, $this->salary->calculateNetSalary());
    }

    public function testCalculateOvertime()
    {
        $this->assertEquals(420, $this->salary->calculateOvertime());
    }

    public function testCalculateSalaryAfterTax()
    {
        $this->assertEquals(2232, $this->salary->calculateSalaryAfterTax());
    }

    public function testCalculateAbsence()
    {
        $this->assertEquals(240, $this->salary->calculateAbsence());
    }
}
