<?php
include "model/connection.php";

$id=$_GET["id"];

$sql = $connectionString -> query("select * from tblUsuarios where id = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
            <h5 class="text-center alert alert-secondary">Modificar usuarios</h5>
            <input type="hidden" class="form-control" name="id" value="<?= $id?>">
            <?php
            include "controller/edit_user.php";
            while ($datos = $sql -> fetch_object()){ ?>
                <div class="mb-1">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="name" value="<?= $datos -> nombre?>">
                </div>
                <div class="mb-1">
                        <label for="lastname" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="lastname" value="<?= $datos -> apellido?>">
                </div>
                <div class="mb-1">
                        <label for="cc" class="form-label">Número identificación:</label>
                        <input type="text" class="form-control" name="cc" value="<?= $datos -> cc?>">
                </div>
                <div class="mb-1">
                        <label for="date" class="form-label">Fecha nacimiento:</label>
                        <input type="date" class="form-control" name="date" value="<?= $datos -> fechaNacimiento?>">
                </div>
                <div class="mb-1">
                        <label for="email" class="form-label">Correo:</label>
                        <input type="email" class="form-control" name="mail" value="<?= $datos -> correo?>">
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary" name="btn-editar" value="ok">Editar</button>
                </div>
            <?php }
            ?>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>