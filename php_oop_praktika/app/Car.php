<?php


namespace TRANSPORT;


class Car extends Transport
{
    public $noOfDoors;

    public function __construct($modelName, $make, $noOfDoors)
    {
        parent::__construct($modelName, $make);
        $this->noOfDoors = $noOfDoors;
    }
    public function getNoOfDoors(){
        return [
            $this->noOfDoors
        ];
    }
}