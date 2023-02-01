<?php

namespace IT;

class Employee
{
    protected $yearsEmployed;
    protected $wasLate;

    public function __construct($yearsEmployed, $wasLate){
        $this->yearsEmployed = $yearsEmployed;
        $this->wasLate = $wasLate;
    }
}
