<?php
namespace models\monuments;
use models\entity;
class monument extends entity{
    public $id;
    public $style;
    public $price;

    public function getMonumentStyle():string{
        return $this->style;
    }
    public function setMonumentStyle(string $monumentStyle){
        $this->style=$monumentStyle;
    }
    public function getMonumentPrice():int{
        return $this->price;
    }
    public function setMonumentPrice(int $priceMonument){
        $this->price=$priceMonument;
    }
    static function getTableName():string{
        return "monuments";
    }
}