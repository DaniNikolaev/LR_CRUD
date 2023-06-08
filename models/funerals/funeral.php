<?php
namespace models\funerals;
use models\brigades\brigade;
use models\entity;
use models\halls\hall;
use models\monuments\monument;
use models\plots\plot;

class funeral extends entity{
    public $id;
    public $name;
    public $date;
    public $id_plot,$id_brigade,$id_monument,$id_hall;

    public function getFuneralName():string{
        return $this->name;
    }
    public function setFuneralName(string $funeralsName){
        $this->name=$funeralsName;
    }
    public function getFuneralDate():string{
        return $this->date;
    }
    public function setFuneralDate(string $funeralsDate){
        $this->date=$funeralsDate;
    }
    public function getFuneralPlot():int{
        return $this->id_plot;
    }
    public function setFuneralPlot(int $plot_id){
        $this->id_plot=$plot_id;
    }
    public function getFuneralBrigade():int{
        return $this->id_brigade;
    }
    public function setFuneralBrigade(int $brigade_id){
        $this->id_brigade=$brigade_id;
    }
    public function getFuneralMonument():int{
        return $this->id_monument;
    }
    public function setFuneralMonument(int $monument_id){
        $this->id_monument=$monument_id;
    }
    public function getFuneralHall():int{
        return $this->id_hall;
    }
    public function setFuneralHall(int $hall_id){
        $this->id_hall=$hall_id;
    }
    public function getPlotNumber(){
        $plot=plot::getById($this->id_plot);
        if ($plot!=null){
            return $plot->getPlotNumber();
        }
        else return null;
    }
    public function getBrigadeName(){
        $brigade=brigade::getById($this->id_brigade);
        if ($brigade!=null){
            return $brigade->getBrigadeName();
        }
        else return null;
    }
    public function getMonumentStyle(){
        $monument=monument::getById($this->id_monument);
        if ($monument!=null){
            return $monument->getMonumentStyle();
        }
        else return null;
    }
    public function getHallName(){
        $hall=hall::getById($this->id_hall);
        if ($hall!=null){
            return $hall->getHallName();
        }
        else return null;
    }
    static function getTableName():string{
        return "funerals";
    }
}