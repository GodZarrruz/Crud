<?php
include './Controllers/Register.php';

include '../Controlles/getWorkers.php';
?>

<?php

$servername = "127.0.0.1:33065";
$password = "";
$user = "root";
$name_bd = "library";

try{
    
    $conn = new PDO("mysql:host=$servername", $name_bd, $password,
    
    array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));


} catch(Exception $e){
    echo "No funciono la conexion: ".$e->getMessage();
}
?>