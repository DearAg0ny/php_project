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

    /* Change model @param string $model */
    public function changeModel($modelName){
        $this->modelName = $modelName;
    }

    /* Change make @param string $model */
    public function changeMake($make){
        $this->make = $make;
    }

    /* Constructor */
    public function __construct($modelName, $make){
        $this->id = rand(5,100);
        $this->modelName = $modelName;
        $this->make = $make;
    }

    /* Get all info about transport
    @return Array */
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

    /* Setters */
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

    /* Display Transport info in HTML list */
    public function generateItemList($data){
        echo "<ul>";
        foreach ($data as $item){
            if(is_null($item)){
                
            }else
            echo "<li>$item</li>";
        }
        echo "</ul>";
    }
}
