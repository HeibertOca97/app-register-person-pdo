<?php

class Persona extends Connection{
    
    use Resource;
    
    private $db, $id, $nombre, $telefono, $email, $sexo, $salario, $cargo;

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
            return $this->$property;
        }
    }

    public function getTotal(){
        $query = $this->db->prepare("SELECT COUNT(*) FROM personas");
        $query->execute();
        return $query->fetchColumn(0);
    }

    public function getAll(){
        $query = $this->db->prepare("SELECT * FROM personas ORDER BY id DESC");
        $query->execute();
        return $query->fetchAll();
    }

    public function show(){
        $query = $this->db->prepare("SELECT * FROM personas WHERE id = :id");
        $query->bindParam(":id", $this->id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }

    public function store(){
        $query = $this->db->prepare("INSERT INTO personas(nombre, telefono, email, sexo, salario, cargo) VALUES(:n, :t, :e, :s, :sl, :c)");
        $query->bindParam(":n", $this->nombre, PDO::PARAM_STR); 
        $query->bindParam(":t", $this->telefono, PDO::PARAM_STR); 
        $query->bindParam(":e", $this->email, PDO::PARAM_STR); 
        $query->bindParam(":s", $this->sexo, PDO::PARAM_STR);
        $query->bindParam(":sl", $this->salario);
        $query->bindParam(":c", $this->cargo, PDO::PARAM_STR); 

        $query->execute();
    }

    public function update(){
        $query = $this->db->prepare("UPDATE personas SET nombre = :n, telefono = :t, email = :e, sexo = :s, salario = :sl, cargo = :c WHERE id = :id");
        $query->bindParam(":id", $this->id, PDO::PARAM_INT); 
        $query->bindParam(":n", $this->nombre, PDO::PARAM_STR); 
        $query->bindParam(":t", $this->telefono, PDO::PARAM_STR); 
        $query->bindParam(":e", $this->email, PDO::PARAM_STR); 
        $query->bindParam(":s", $this->sexo, PDO::PARAM_STR);
        $query->bindParam(":sl", $this->salario);
        $query->bindParam(":c", $this->cargo, PDO::PARAM_STR); 

        $query->execute();
    }

    public function delete(){
        $query = $this->db->prepare("DELETE FROM personas WHERE id = :id");
        $query->bindParam(":id", $this->id, PDO::PARAM_INT);         
        $query->execute();
    }

}