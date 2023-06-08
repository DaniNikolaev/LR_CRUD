<?php
namespace controllers;
use views\view;

class maincontroller{
    public $view;
    public $templateDir;
    public $array=[];
    public $error=[];
    public $class;
    public $shortClass;
    public $entitiesToGet=[];
    public function __construct()
    {
        $this->view=new view("/LR_CRUDS/templates");
        $this->shortClass=explode('\\',$this->class)[2];
        foreach ($this->entitiesToGet as $var=>$class){
            $this->array[]=["$var"=>$class::getAll()];
        }
    }
    public function showAll(){
        $class=$this->class;
        $allItems=$class::getAll();
        $this->view->renderPage($this->templateDir."/list.php",["items"=>$allItems]);
    }
    public function validateObject($object){
        foreach ($_POST as $method=>$value){
            if (in_array($method,$this->fieldsToCheck)){
                if (($value=="")||(ctype_space($value))){
                    $this->error[]="Поле пустое!";
                }
                elseif (strpos($method,"Name")!==false or strpos($method,"Style")!==false){
                    if (!preg_match("/^[^0-9*=+&^]+$/i",$value))
                        $this->error[]="Поле не должно содержать чисел и специальных символов!";
                    else
                        $object->$method($value);
                }
                elseif($method=="setFuneralDate"){
                    if (!preg_match("/\d{2}\.\d{2}\.[1-2]\d{3}\s\d{2}:\d{2}/",$value))
                        $this->error[]="Неправильный формат даты!";
                    else
                        $object->$method($value);
                }
                else{
                    if ($value<=0 or !is_numeric($value)){
                        $this->error[]="Поле должно быть неотрицательным числом!";
                    }
                    else
                        $object->$method($value);
                }
            }
        }
        return $object;
    }

    public function add(){
        $object=new $this->class;
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $object=$this->validateObject($object);
            if (!empty($this->error)){
                $this->array[]=["errors"=>$this->error];
                $this->view->renderPage($this->templateDir."/add.php",["data"=>$this->array]);
            }else{
                $object->save();
                if (!empty($object->getError())){
                    $this->array[]=["errors"=>$object->getError()];
                    $this->view->renderPage($this->templateDir."/add.php",["data"=>$this->array]);
                    die();
                }
                header("location: /LR_CRUDS/".$this->shortClass);
            }
        }
        else{
            $this->view->renderPage($this->templateDir."/add.php",["data"=>$this->array]);
        }
    }
    public function edit(int $id)
    {
        $object = $this->class::getById($id);//model
        $this->array[] = ["currentItem"=>$object];
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $object=$this->validateObject($object);
            if (!empty($this->error))
            {
                $this->array[] = ["errors" => $this->error];
                $this->view->renderPage($this->templateDir . "/edit.php", ["data" => $this->array]);
            }
            else
            {
                $object->update();
                if (!empty($object->getError()))
                {
                    $this->array[] = ["errors" => $object->getError()];
                    $this->view->renderPage($this->templateDir . "/edit.php", ["data" => $this->array]);
                    die();
                }
                header("location: /LR_CRUDS/" . $this->shortClass);
            }
        }
        else
        {
            $this->view->renderPage($this->templateDir . "/edit.php", ["data" => $this->array]);
        }
    }
    public function delete(int $id){
        $item=$this->class::getById($id);
        if ($item!=null){
            $item->delete();
        }
        header("location: /LR_CRUDS/".$this->shortClass);
    }

}
