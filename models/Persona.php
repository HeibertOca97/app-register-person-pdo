<?php

class Persona extends Connection{
    private $db, $id, $nombre, $telefono, $email, $sexo;

    public function __construct(){
        parent::__construct();
        $con = new Connection();
        $this->db = $con->conectPDO();
    }

    public function set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }

    public function get($property){
        if(property_exists($this, $property)){
            $this->$property;
        }
    }

    public function getTotal(){
        $query = $this->db->prepare("SELECT * FROM personas");
        $query->execute();
        return $query->fetchObject()->numRows();
    }

    public function getAll(){
        $query = $this->db->prepare("SELECT * FROM personas");
        $query->execute();
        if ($query->fetchObject()->numRows() > 0) {
            return $query->fetchObject();
        }

        return null;
    }

    public function show(){
        $query = $this->db->prepare("SELECT * FROM personas WHERE id = :id");
        $query->bindParam(":id", $this->id, PDO::PARAM_INT);
        $query->execute();
        if ($query->fetchObject()->numRows() > 0) {
            return $query->fetchObject();
        }

        return null;
    }

    public function store(){
        $query = $this->db->prepare("INSERT INTO personas(nombre, telefono, email, sexo) VALUES(:n, :t, :e, :s)");
        $query->bindParam(":n", $this->nombre, PDO::PARAM_STR); 
        $query->bindParam(":t", $this->telefono, PDO::PARAM_STR); 
        $query->bindParam(":e", $this->email, PDO::PARAM_STR); 
        $query->bindParam(":s", $this->sexo, PDO::PARAM_BOOL);

        $query->execute();
    }

    public function update(){
        $query = $this->db->prepare("UPDATE personas SET nombre = :n, telefono = :t, email = :e, sexo = :e WHERE id = :id");
        $query->bindParam(":n", $this->nombre, PDO::PARAM_STR); 
        $query->bindParam(":t", $this->telefono, PDO::PARAM_STR); 
        $query->bindParam(":e", $this->email, PDO::PARAM_STR); 
        $query->bindParam(":s", $this->sexo, PDO::PARAM_BOOL);

        $query->execute();
    }

    public function delete(){
        $query = $this->db->prepare("UPDATE personas SET nombre = :n, telefono = :t, email = :e, sexo = :e WHERE id = :id");
        $query->bindParam(":n", $this->nombre, PDO::PARAM_STR); 
        $query->bindParam(":t", $this->telefono, PDO::PARAM_STR); 
        $query->bindParam(":e", $this->email, PDO::PARAM_STR); 
        $query->bindParam(":s", $this->sexo, PDO::PARAM_BOOL);
        
        $query->execute();
    }
}