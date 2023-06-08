<?php
namespace models;
use services\database;

class entity{
    public $errorArray;
    public function save(){
        $array=$this->constructData();
        $database=database::getInstance();
        $sql="INSERT INTO " . static::getTableName()."(".$array["dbColumns"].") VALUES (".$array["params"].")";
        $database->query($sql,$array["values"],static::class);
        $this->errorArray=$database->getErrors();
    }
    public function update(){
        $array = $this->constructData();
        $database = database::getInstance();
        $sql = "UPDATE " . static::getTableName() . " SET " . $array["updateColumns"] . " WHERE id = :id";
        $database->query($sql, $array["values"],static::class);
        $this->errorArray = $database->getErrors();
    }
    public static function getById(int $id):?self{
        $database=database::getInstance();
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = :id";
        $values = [":id" => $id];
        $result = $database->query($sql, $values, static::class);
        return $result ? $result[0] : null;
    }
    public static function getAll():?array{
        $database = database::getInstance();
        $sql = "SELECT * FROM " . static::getTableName();
        $result = $database->query($sql, [], static::class);
        return $result;
    }
    public function delete(){
        $database = database::getInstance();
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id = :id";
        $values = [":id" => $this->id];
        $database->query($sql, $values);
    }
    public function getError(){
        return $this->errorArray;
    }
    public function constructData():array{
        $reflector = new \ReflectionObject($this);
        $properties = $reflector->getProperties();
        $valuePart = [];
        $dbColumns = [];
        $params = [];
        $updateColumns = [];
        foreach ($properties as $property) {
            if($property->getName()!="errorArray")
            {
                $propertyName = $property->getName();
                $propertyValue = $this->$propertyName;
                // формируем строки для insert
                $params [] = ":" . $propertyName;
                $valuePart[":" . $propertyName] = $propertyValue;
                $dbColumns[] = $propertyName;
                // формируем строки для update
                $updateColumns [] = $propertyName . "=:" . $propertyName;
            }

        }
        $builtData["values"] = $valuePart;
        $builtData["dbColumns"] = implode(",", $dbColumns);
        $builtData["params"] = implode(",", $params);
        $builtData["updateColumns"] = implode(",", $updateColumns);
        return $builtData;
    }
}