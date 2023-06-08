<?php
namespace controllers;

class brigadecontroller extends maincontroller {
    public $templateDir="brigade";
    public $class=\models\brigades\brigade::class;
    public $fieldsToCheck=["setBrigadeName","setBrigadeQuantity","setBrigadePrice"];
    public $error=[];

}