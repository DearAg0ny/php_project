<?php


namespace TRANSPORT;


class Motorcycle extends Transport
{
    public $wheelCount;

    public function __construct($modelName, $make, $wheelCount)
    {
        parent::__construct($modelName, $make);
        $this->wheelCount = $wheelCount;
    }
    public function getWheelCount(){
        return [
            $this->modelName,
            $this->make,
            $this->wheelCount
        ];
    }
}
