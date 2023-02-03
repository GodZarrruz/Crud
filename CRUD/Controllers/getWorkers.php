<?php

include './Controlles/Register.php';
$query = $bd->query("SELECT * from library");
$worker = $query->fetchAll(PDO::FETCH_OBJ)

?>