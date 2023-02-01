<?php

namespace TRANSPORT;

class Transport
{
    protected $id;
    protected $modelName;
    protected $make;
    protected $price;
    protected $weight;
    protected $speed;
    protected $seat;
    protected $description;

    public function changeModel($modelName){
        $this->modelName = $modelName;
    }
    public function changeMake($make){
        $this->make = $make;
    }
    public function __construct($modelName, $make){
        $this->id = rand(5,100);
        $this->modelName = $modelName;
        $this->make = $make;
    }
    public function getInfo(){
        return [
            $this->modelName,
            $this->make,
            $this->price,
            $this->weight,
            $this->speed,
            $this->seat,
            $this->description
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
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function generateItemList($data){
        echo "<ul>";
        foreach ($data as $item){
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
}
