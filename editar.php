<?php
include("conexion.php");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Usuario</title>
</head>
<body>

<h2>Editar Usuario</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
    <input type="text" name="cedula" value="<?php echo $row['cedula']; ?>" required>
    <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>