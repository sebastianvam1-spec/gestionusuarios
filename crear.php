<?php
include("conexion.php");

$nombre   = $_POST['nombre'];
$cedula   = $_POST['cedula'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, cedula, telefono)
        VALUES ('$nombre','$cedula','$telefono')";

$conn->query($sql);

header("Location: index.php");
?>