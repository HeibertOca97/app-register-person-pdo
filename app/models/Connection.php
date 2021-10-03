<?php

class Connection{
    private $host = "localhost", 
    $database = "db_persona", 
    $username = "root", 
    $password = "", 
    $pdo, 
    $options = [
        PDO::ATTR_EMULATE_PREPARES => false, 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    public function __construct(){
        try {
            $this->pdo = new PDO("mysql:dbname=".$this->database.";host=".$this->host, $this->username, $this->password, $this->options);
        } catch (\PDOException $pde) {
            print "PDOException: " . $pde->getMessage();
            exit();
        } catch (\Throwable $th) {
            print "Throwable: " . $th->getMessage();
            exit();
        }
    }

    public function conectPDO(){
        return $this->pdo;
    }

}