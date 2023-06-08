<?php
namespace controllers;

class hallcontroller extends maincontroller {
    public $templateDir="hall";
    public $class=\models\halls\hall::class;
    public $fieldsToCheck=["setHallName","setHallPrice","setHallCapacity"];
    public $error=[];


}