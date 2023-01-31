<?php


namespace TRANSPORT;


class Bike extends Transport
{
    public $bikePedals;

    public function __construct($modelName, $make, $bikePedals)
    {
        parent::__construct($modelName, $make);
        $this->bikePedals = $bikePedals;
    }
    public function getBikePedals(){
        return [
            $this->modelName,
            $this->make,
            $this->bikePedals
        ];
    }
}
