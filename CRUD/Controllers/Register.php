<?php

include './Controllers/Update.php';

include './getWorkers.php';

if( empty($_POST["inputName"])|| empty($_POST["inputLastName"])|| empty($_POST["inputNCard"]) ) {
    echo "Error, complete el formulario";
    exit();
}

?>