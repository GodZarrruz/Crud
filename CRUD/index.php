<?php
include('../CRUD/Header.php');

include './model/Connection.php';

include './Controlles/getWorkers.php';

?>
<div class="container">
<div class="row">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">LastName</th>
      <th scope="col">NCard</th>
    </tr>
  </thead>
  <tbody>
                <?php
                  foreach($worker as $dato){
                ?>
                <tr>
                    <th scope="row"><?php echo $dato->id ?>
                    <th><?php echo $dato->id ?></th>
                    <td><?php echo $dato->Name ?></td>
                    <td><?php echo $dato->LastName ?></td>
                    <td><?php echo $dato->NCard ?></td>
                    <td><a href="../Controlles/Edit.php?id=><?php echo $dato->id?>">Editar</a></td>
                    </th>
                    <?php
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div> 
</div>

<div class="card">
    <div class="card-header"> Ingrese los datos 
    <form action="./Controlles/Register.php" method="POST"> 
            <div class="m-3">
                <label>Name</label>
                <input class="form-control" type="text" placeholder="Ingrese Name" name="inputName" require>
            </div> 
             <div class="m-3">
                <label>LastName</label>
                <input class="form-control" type="text" placeholder="Ingrese apellido" name="inputLastName" require>
             </div>
              <div class="m-3">
                <label>N-Card</label>
                <input class="form-control" type="text" placeholder="Ingrese N-card" name="inputNCard" require>
             </div>
              <input type="submit" class="btn btn-primary m-2" value="Registrar">
        </form>
    </div>
</div>
</div>


<?php
include("../CRUD/Template/Footer.php")
?>