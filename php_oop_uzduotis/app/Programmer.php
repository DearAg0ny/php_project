<?php


namespace IT;


class Programmer extends Employee
{
    protected $skillRating;
    protected $programmingLanguages;

    public function __construct($yearsEmployed, $wasLate, $skillRating, $programmingLanguages)
    {
        parent::__construct($yearsEmployed, $wasLate);
        $this->skillRating = $skillRating;
        $this->programmingLanguages = $programmingLanguages;
    }
    public function getProgrammerInfo(){
        return [
            $this->yearsEmployed,
            $this->wasLate,
            $this->skillRating,
            $this->programmingLanguages
        ];
    }
}