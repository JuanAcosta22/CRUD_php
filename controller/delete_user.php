<?php

if (!empty ($_GET["id"])) {
    $id=$_GET["id"];
    $sql = $connectionString -> query("delete from tblUsuarios where id = $id");

    if ($sql == 1) {
        echo '<div class="alert alert-success">Usuario eliminado!</div>';
    } else {
        echo '<div class="alert alert-danger">Error al intentar eliminar usuario</div>';
    }
}

?>