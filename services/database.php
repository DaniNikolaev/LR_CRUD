<?php
namespace services;
class database
{
    public $pdo;
    private static $instance;
    public $errorArray;
    private function __construct()
    {
        $options = (require $_SERVER["DOCUMENT_ROOT"] . '/LR_CRUDS/services/settings.php')['db'];
        try {
            $this->pdo = new \PDO('mysql:host=' . $options['host'] . ';dbname=' . $options['dbname'], $options['user'], $options['password']);
        } catch (\PDOException $e) {
            if ($e->getCode() == 1049) {
                $this->pdo = new \PDO('mysql:host=' . $options['host'], $options['user'], $options['password']);
                $this->pdo->exec("CREATE DATABASE " . $options['dbname']);
                $this->pdo->exec("USE " . $options['dbname']);
            } else die('Error: ' . $e->getMessage() . ' Code: ' . $e->getCode());
        }
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        $this->checkTableExists();
    }
    public function checkTableExists(){
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS `Necropolises` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` varchar(45) NOT NULL,
        UNIQUE (`name`))");

        $this->pdo->exec("CREATE TABLE IF NOT EXISTS `Brigades` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` varchar(45) NOT NULL,
        `quantity` INT(11) NOT NULL,
        `price` INT(11) NOT NULL,
        UNIQUE (`name`))");

        $this->pdo->exec("CREATE TABLE IF NOT EXISTS `Monuments` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `style` varchar(45) NOT NULL,
        `price` INT(11) NOT NULL)");

        $this->pdo->exec("CREATE TABLE IF NOT EXISTS `Halls` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` varchar(45) NOT NULL,
        `price` INT(11) NOT NULL,
        `capacity` INT(11) NOT NULL,
        UNIQUE (`name`))");

        $this->pdo->exec("CREATE TABLE IF NOT EXISTS `Plots` (
        `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `number` INT(11) NOT NULL,
        `id_necropolis` INT(11) NOT NULL,
        FOREIGN KEY(`id_necropolis`) REFERENCES Necropolises(`id`))");

        $this->pdo->exec("CREATE TABLE IF NOT EXISTS `Funerals` (
            `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `name` varchar(45) NOT NULL,
            `date` TEXT(45) NOT NULL,
            `id_plot` INT(11) NOT NULL,
            `id_brigade` INT(11) NOT NULL,
            `id_monument` INT(11) NOT NULL,
            `id_hall` INT(11) NOT NULL,
            UNIQUE (`name`),
            FOREIGN KEY(`id_plot`) REFERENCES Plots(`id`),
            FOREIGN KEY(`id_brigade`) REFERENCES Brigades(`id`),
            FOREIGN KEY(`id_monument`) REFERENCES Monuments(`id`),
            FOREIGN KEY(`id_hall`) REFERENCES Halls(`id`))");

    }

    public function query(string $sql,array $params=[],string $className="stdClass"): ?array{
        $result=false;
        try{
            $statement=$this->pdo->prepare($sql);
            $result=$statement->execute($params);
        } catch (\PDOException $e){
            if ($e->getCode()==23000){
                $this->errorArray[]=$e->getCode().": Комбинация полей не уникальна!";
            } else{
                $this->errorArray[]=$e->getCode()." ".$e->getMessage();
            }
        }
        if ($result===false){
            return null;
        } else{
            if (strpos($sql,"DELETE")!==false or strpos($sql,"INSERT")!==false or strpos($sql,"UPDATE")!==false){
                return [];
                }
            else
                return $statement->fetchAll(\PDO::FETCH_CLASS,$className);
        }
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getErrors(){
        return $this->errorArray;
    }

}
