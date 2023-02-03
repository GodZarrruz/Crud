<?php

include '../index.php';

$id = $_POST['id'];
$Name = $_POST['inputname'];
$LastName = $_POST['inputlastname'];
$NCard = $_POST['inputncard'];


$query = $bd->prepare("UPDATE library SET nombre = ?, lastname = ?, Ncard = ? WHERE id = ?");
$result = $query->execute([$Name,$LastName,$NCard,$id]);

if($result){
    header("Location: ../index.php");
}else{
    echo "Fallo en actualizacion de datos.";
}

include '../model/Connection.php';
?>