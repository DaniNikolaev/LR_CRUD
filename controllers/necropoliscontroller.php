<?php
namespace controllers;


class necropoliscontroller extends maincontroller{
    public $templateDir="necropolis";
    public $class=\models\necropolises\necropolis::class;
    public $fieldsToCheck=["setNecropolisName"];
    public $error=[];

}