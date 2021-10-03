<?php
define("URL", "http://localhost/www/backend/php/app-persona-pdo/");
include "./Autoload.php";

if($_POST){
    $per = new Persona();
    $per->set("nombre", $_POST["nombre"]);
    $per->set("telefono", $_POST["telefono"]);
    $per->set("email", $_POST["email"]);
    $per->set("sexo", $_POST["sexo"]);
    $per->set("salario", $_POST["salario"]);
    $per->set("cargo", $_POST["cargo"]);
    $per->store();

    header("Location: ". URL);
}