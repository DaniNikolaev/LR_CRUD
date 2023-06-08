<?php
namespace models\plots;
use models\entity;
use models\necropolises\necropolis;

class plot extends entity{
    public $id;
    public $number;
    public $id_necropolis;

    public function getPlotNumber():int{
        return $this->number;
    }
    public function setPlotNumber(int $plotNumber){
        $this->number=$plotNumber;
    }
    public function getPlotNecropolis():int{
        return $this->id_necropolis;
    }
    public function setPlotNecropolis(int $necropolisId){
        $this->id_necropolis=$necropolisId;
    }
    public function getNecropolisName()
    {
        $necropolis = necropolis::getById($this->id_necropolis);
        if ($necropolis!=null)
        {
            return $necropolis->getNecropolisName();
        }
        else return NULL;
    }
    static function getTableName():string{
        return "plots";
    }
}