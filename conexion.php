<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "parqueadero_pro_insular"
);

if (!$conexion) {
    die("Error de conexión");
}

?>