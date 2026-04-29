<?php
// 🔹 DATOS DE ALWAYS DATA
$host = "mysql-claseapi.alwaysdata.net"; // servidor MySQL
$user = "claseapi";                      // usuario MySQL
$pass = "clase1234";                     // contraseña MySQL (verifica en AlwaysData)
$db   = "claseapi_gestionusuarios";      // tu base de datos

// 🔹 CREAR CONEXIÓN
$conn = new mysqli($host, $user, $pass, $db);

// 🔹 VALIDAR CONEXIÓN
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

// 🔹 CONFIGURAR CARACTERES (recomendado)
$conn->set_charset("utf8");

// 🔹 MENSAJE OPCIONAL DE PRUEBA (puedes borrar luego)
// echo "✅ Conectado correctamente";
?>