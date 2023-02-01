<?php


namespace IT;


class Manager extends EmployeeAbstract
{
    protected $field;
    private $salary;

    public function getSalary()
    {
        return [
            $this->salary
        ];
    }
    public function __construct($yearsEmployed, $wasLate, $field, $salary)
    {
        parent::__construct($yearsEmployed, $wasLate);
        $this->field = $field;
        $this->salary = $salary;
    }
    public function getManagerInfo()
    {
        return [
            $this->yearsEmployed,
            $this->wasLate,
            $this->field
        ];
    }
}