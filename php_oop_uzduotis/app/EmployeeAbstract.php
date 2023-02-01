<?php

namespace IT;

abstract class EmployeeAbstract
{
    protected $yearsEmployed;
    protected $wasLate;

    abstract public function getSalary();

    public function __construct($yearsEmployed, $wasLate)
    {
        $this->yearsEmployed = $yearsEmployed;
        $this->wasLate = $wasLate;
    }
}
