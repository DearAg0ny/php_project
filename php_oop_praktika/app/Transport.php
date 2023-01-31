<?php

namespace TRANSPORT;

class Transport
{
    protected $id;
    protected $modelName;
    protected $make;
    protected $price;
    protected $weight;
    protected $enginePower;
    protected $topSpeed;
    protected $maxNumberOfPeople;

    public function changeTransportInfo($modelName, $make, $price, $weight, $topSpeed, $maxNumberOfPeople){
        $this->modelName = $modelName;
        $this->make = $make;
        $this->price = $price;
        $this->weight = $weight;
        $this->topSpeed = $topSpeed;
        $this->maxNumberOfPeople = $maxNumberOfPeople;
    }
    public function changeEnginePower($enginePower)
    {
        $this->enginePower = $enginePower;
    }
    public function __construct($modelName, $make){
        $this->modelName = $modelName;
        $this->make = $make;
    }
    public function getInfo(){
        return [
            $this->modelName,
            $this->make,
            $this->price,
            $this->weight,
            $this->topSpeed,
            $this->maxNumberOfPeople
        ];
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function setTopSpeed($topSpeed)
    {
        $this->topSpeed = $topSpeed;
    }
    public function setMaxNumberOfPeople($maxNumberOfPeople)
    {
        $this->maxNumberOfPeople = $maxNumberOfPeople;
    }
    public function generateItemList($data){
        echo "<ul>";
        foreach ($data as $item){
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
}