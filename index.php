<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Gestión de Usuarios</title>

<style>
body { font-family: Arial; margin: 40px; }
input { margin: 5px; padding: 8px; }
button { padding: 8px; }
table { border-collapse: collapse; width: 100%; margin-top: 20px; }
th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
</style>

</head>
<body>

<h2>Agregar Usuario</h2>

<form action="crear.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="cedula" placeholder="Cédula" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <button type="submit">Guardar</button>
</form>

<h2>Lista de Usuarios</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM usuarios");

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['cedula']}</td>
        <td>{$row['telefono']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a> |
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>