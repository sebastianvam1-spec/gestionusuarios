<?php
include("conexion.php");

$id       = $_POST['id'];
$nombre   = $_POST['nombre'];
$cedula   = $_POST['cedula'];
$telefono = $_POST['telefono'];

$sql = "UPDATE usuarios 
        SET nombre='$nombre', cedula='$cedula', telefono='$telefono'
        WHERE id=$id";

$conn->query($sql);

header("Location: index.php");
?>