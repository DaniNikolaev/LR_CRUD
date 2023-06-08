<?php
namespace models\halls;
use models\entity;
class hall extends entity{
    public $id;
    public $name;
    public $price;
    public $capacity;

    public function __construct($array=[])
    {
       if ($array!=[]) {
           $this->name = $array["setHallName"];
           $this->price = $array["setHallPrice"];
           $this->capacity = $array["setHallCapacity"];
       }
    }

    public function getHallName():string{
        return $this->name;
    }
    public function setHallName(string $hallName){
        $this->name=$hallName;
    }
    public function getHallCapacity():int{
        return $this->capacity;
    }
    public function setHallCapacity(int $hallCapacity){
        $this->capacity=$hallCapacity;
    }
    public function getHallPrice():int{
        return $this->price;
    }
    public function setHallPrice(int $priceHall){
        $this->price=$priceHall;
    }
    static function getTableName():string{
        return "halls";
    }
}