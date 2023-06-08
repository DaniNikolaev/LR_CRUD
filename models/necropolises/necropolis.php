<?php
namespace models\necropolises;
use models\entity;

class necropolis extends entity{
    public $id;
    public $name;

    public function getNecropolisName():string{
        return $this->name;
    }
    public function setNecropolisName(string $necropolisName){
        $this->name=$necropolisName;
    }
    static function getTableName():string{
        return "necropolises";
    }
}