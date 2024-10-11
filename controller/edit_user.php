<?php

if (!empty ($_POST["btn-editar"])){
    if (!empty ($_POST["name"]) and !empty ($_POST["lastname"]) and !empty ($_POST["cc"]) and !empty ($_POST["date"]) and !empty ($_POST["mail"])){
        
        $id = $_POST["id"];
        $nombre = $_POST["name"];
        $apellido = $_POST["lastname"];
        $cc = $_POST["cc"];
        $fechaNacimiento = $_POST["date"];
        $correo = $_POST["mail"];

        $sql = $connectionString -> query("update tblUsuarios set nombre = '$nombre', apellido = '$apellido', cc = '$cc', fechaNacimiento = '$fechaNacimiento', correo = '$correo' where id = $id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al intentar modificar usuario</div>';
        }

    } else {
        echo '<div class="alert alert-warning">!Ojo!...Faltan campos por diligenciar</div>';
    }
}

?>