<?php
/**
 * Package Employee
 */
namespace Employee\Employee;

/**
 * Class Employee
 * This class is part of the Employee package
 * and its meant for teaching purposes only
 * @package Employee\Employee
 * @author Mohammed Yehia <firefoxegy@gmail.com>
 */
class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var float
     */
    private $salary;

    /**
     * @var float
     */
    private $tax;

    /**
     * @var int
     */
    private $overtime;

    /**
     * @var float
     */
    private $overtimeRate;

    /**
     * @var int
     */
    private $absence;

    /**
     * @var float
     */
    private $absenceRate;

    /**
     * Employee constructor.
     * @param string $name
     * @param int $age
     * @param float $salary
     * @param float $tax
     */
    public function __construct(string $name, int $age, float $salary, float $tax)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setTax($tax);
        $this->setSalary($salary);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return int
     */
    public function getOvertime(): int
    {
        return $this->overtime;
    }

    /**
     * @param int $overtime
     */
    public function setOvertime(int $overtime): void
    {
        $this->overtime = $overtime;
    }

    /**
     * @return float
     */
    public function getOvertimeRate(): float
    {
        return $this->overtimeRate;
    }

    /**
     * @param float $overtimeRate
     */
    public function setOvertimeRate(float $overtimeRate): void
    {
        $this->overtimeRate = $overtimeRate;
    }

    /**
     * @return int
     */
    public function getAbsence(): int
    {
        return $this->absence;
    }

    /**
     * @param int $absence
     */
    public function setAbsence(int $absence): void
    {
        $this->absence = $absence;
    }

    /**
     * @return float
     */
    public function getAbsenceRate(): float
    {
        return $this->absenceRate;
    }

    /**
     * @param float $absenceRate
     */
    public function setAbsenceRate(float $absenceRate): void
    {
        $this->absenceRate = $absenceRate;
    }
}
