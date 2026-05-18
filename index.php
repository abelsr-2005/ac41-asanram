<?php

$conexion = new mysqli(
    "db",
    "root",
    getenv("Admin1.")
);

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}

echo "Conexion exitosa a MariaDB";

?>
