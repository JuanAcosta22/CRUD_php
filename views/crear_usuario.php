<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once "shared/head.php";
    ?>
</head>
<body>
    <form class="col-4 p-3" method="POST">
        <h5 class="text-center alert alert-secondary">Registro de usuarios</h5>
        <?php
            include "../controller/create_user.php";
        ?>
        <div class="mb-1">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-1">
            <label for="lastname" class="form-label">Apellido:</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-1">
            <label for="cc" class="form-label">Número identificación:</label>
            <input type="text" class="form-control" name="cc">
        </div>
        <div class="mb-1">
            <label for="date" class="form-label">Fecha nacimiento:</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="mb-1">
            <label for="email" class="form-label">Correo:</label>
            <input type="email" class="form-control" name="mail">
        </div>
        <div class="text-center mt-3">
           <a href="index.php" type="submit" class="btn btn-primary" name="btn-registrar" value="ok">Registrar</a>
        </div>
    </form>
</body>
</html>