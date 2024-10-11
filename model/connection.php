<?php
$host = "localhost";
$dbname = "dbUsuarios";
$username = "root";
$password = "Abcd1234*";

try {
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   $connectionString = new mysqli($host, $username, $password, $dbname);
   $connectionString -> set_charset("utf8");

} catch (mysqli_sql_exception $e) {
   echo "Error en la conexión: " . $e -> getMessage();
}
?>