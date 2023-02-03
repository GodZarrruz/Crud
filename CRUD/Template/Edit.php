<?php

include '../model/Connection.php';

$idWorker = $_GET['id'];

$query = $bd->prepare("SELECT * FROM library WHERE  id = ?");

$query->execute([$idWorker]);

$worker = $query->fetch(PDO::FETCH_OBJ);
?>

<div class="container">
<div class="card">
    <div class="card-header"> Ingrese los datos 
        <form action="./Controlles/Register.php" method="POST">
            <div class="m-3">
                <label>Name</label>
                <input class="form-control" type="text" placeholder="Ingrese Name" value="<?php echo $worker->Name ?>" name="inputName" require>
            </div> 
             <div class="m-3">
                <label>LastName</label>
                <input class="form-control" type="text" placeholder="Ingrese LastName" value="<?php echo $worker->LastName ?>" name="inputLastName" require>
             </div>
              <div class="m-3">
                <label>NCard</label>
                <input class="form-control" type="text" placeholder="Ingrese NCard" value="<?php echo $worker->NCard ?>" name="inputNCard" require>
             </div>
             <input type="hidden" name="id" value="<?php echo $worker->id ?>">
              <input type="submit" class="btn btn-primary m-2" value="Registrar">
        </form>
    
</div>
</div>
<?php
include './template/Footer.php';
?>