<?php
namespace controllers;
use models\necropolises\necropolis;

class plotcontroller extends maincontroller{
    public $templateDir="plot";
    public $class=\models\plots\plot::class;
    public $entitiesToGet=["allNecropolises"=>necropolis::class];
    public $fieldsToCheck=["setPlotNumber","setPlotNecropolis"];
    public $error=[];

}