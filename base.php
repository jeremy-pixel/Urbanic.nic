<?php
$conexion = new mysqli("localhost", "isuario", "contrasena", basededatos"");

if ($conexion->connect_error) {
    die("conexion fallida: " . $conexion->connect_error);
}

$comentario = $_POST['comentario'];
$comentario = $conexion->real_escape_string($comentario);

$sql = "INSERT INTO comentarios (mensaje) VALUES ('$comentario')";

if ($conexion->query($sql) === TRUE) {
    echo "comentario guardado correctamente.";
}    else {
    echo "ERROR: " . $conexion->error;
}

$conexion->close();

?>