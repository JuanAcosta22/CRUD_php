<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once "views/shared/head.php";
    ?>
</head>
<body>
    <h1 class="title text-center">CRUD-PHP</h1>
        <?php
            include "model/connection.php";
            include "controller/delete_user.php";
        ?>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <h5 class="form-title text-center">Registro de usuarios</h5>
            <?php
                include "controller/create_user.php";
            ?>
            <div class="form-field">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-field">
                <label for="lastname" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="form-field">
                <label for="cc" class="form-label">Número identificación:</label>
                <input type="text" class="form-control" name="cc">
            </div>
            <div class="form-field">
                <label for="date" class="form-label">Fecha nacimiento:</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-field">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" class="form-control col-sm" name="mail">
            </div>
            <div class="text-center mt-3">
               <button type="submit" class="btn btn-add" name="btn-registrar" value="ok">Registrar</button>
            </div>
        </form>
        <div class="col-8">
            <div class="table-container">
                <table   table class="table caption-top">
                    <caption class="table-title text-center">Lista de usuarios</caption>
                    <thead>
                        <tr class="encabezado">
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">CC</th>
                            <th scope="col">Fecha nacimiento</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "model/connection.php";
                        $sql = $connectionString -> query("select * from tblUsuarios");
                        while ($datos = $sql -> fetch_object()){ ?>
                        <tr>
                            <td><?= $datos -> id?></td>
                            <td><?= $datos -> nombre?></td>
                            <td><?= $datos -> apellido?></td>
                            <td><?= $datos -> cc?></td>
                            <td><?= $datos -> fechaNacimiento?></td>
                            <td><?= $datos -> correo?></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="modificar_usuario.php?id=<?= $datos -> id?>" class="btn btn-warning"><span class="material-symbols-outlined">edit_square</span></a>
                                    <a onClick="return del()" href="index.php?id=<?= $datos -> id?>" class="btn btn-danger"><span class="material-symbols-outlined">delete</span></a>
                                </div>
                            </td>
                        </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
        require_once "views/shared/script.php";
    ?>
</body>
</html>
