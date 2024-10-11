<?php
if (!empty ($_POST["btn-registrar"])){
    if (!empty ($_POST["name"]) and !empty ($_POST["lastname"]) and !empty ($_POST["cc"]) and !empty ($_POST["date"]) and !empty ($_POST["mail"])){
        
        $nombre = $_POST["name"];
        $apellido = $_POST["lastname"];
        $cc = $_POST["cc"];
        $fechaNacimiento = $_POST["date"];
        $correo = $_POST["mail"];

        $sql = $connectionString -> query("insert into tblUsuarios (nombre, apellido, cc, fechaNacimiento, correo) values ('$nombre', '$apellido', '$cc', '$fechaNacimiento', '$correo')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al intentar registrar usuario</div>';
        }
        

    } else {
        echo '<div class="alert alert-warning">!Ojo!...Faltan campos por diligenciar</div>';
    }
}
?>