<?php
namespace controllers;
use models\brigades\brigade;
use models\halls\hall;
use models\monuments\monument;
use models\plots\plot;

class funeralcontroller extends maincontroller{
    public $templateDir="funeral";
    public $class=\models\funerals\funeral::class;
    public $entitiesToGet=["allPlots"=>plot::class,"allHalls"=>hall::class,"allBrigades"=>brigade::class,"allMonuments"=>monument::class];
    public $fieldsToCheck=["setFuneralName","setFuneralDate","setFuneralHall","setFuneralBrigade","setFuneralMonument","setFuneralPlot"];
    public $error=[];


}