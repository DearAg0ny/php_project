<?php


namespace IT;


class Tester extends Employee
{
    private $whichStage;

    public function __construct($yearsEmployed, $wasLate, $whichStage)
    {
        parent::__construct($yearsEmployed, $wasLate);
        $this->whichStage = $whichStage;
    }
    public function getTesterInfo(){
        return [
            $this->yearsEmployed,
            $this->wasLate,
            $this->whichStage
        ];
    }
}