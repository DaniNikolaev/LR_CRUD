<?php
namespace controllers;
class monumentcontroller extends maincontroller{
    public $templateDir="monument";
    public $class=\models\monuments\monument::class;
    public $fieldsToCheck=["setMonumentStyle","setMonumentPrice"];
    public $error=[];

}