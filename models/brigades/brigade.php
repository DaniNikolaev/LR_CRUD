<?php
namespace models\brigades;
use models\entity;
class brigade extends entity{
    public $id;
    public $name;
    public $quantity;
    public $price;

    public function getBrigadeName():string{
        return $this->name;
    }
    public function setBrigadeName(string $brigadeName){
        $this->name=$brigadeName;
    }
    public function getBrigadeQuantity():int{
        return $this->quantity;
    }
    public function setBrigadeQuantity(int $brigadeQuantity){
        $this->quantity=$brigadeQuantity;
    }
    public function getBrigadePrice():int{
        return $this->price;
    }
    public function setBrigadePrice(int $priceBrigade){
        $this->price=$priceBrigade;
    }
    static function getTableName():string{
        return "brigades";
    }
}