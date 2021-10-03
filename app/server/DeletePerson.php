<?php
define("URL", "http://localhost/www/backend/php/app-persona-pdo/");
include "./Autoload.php";

if($_GET){
    $per = new Persona();
    $per->set("id", $_GET["id"]);
    $per->delete();

    header("Location: ". URL);
}