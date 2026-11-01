<?php
include("conexion.php");

if(isset($_POST['guardar'])){

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "INSERT INTO clientes(nombre, cedula, telefono, correo)
VALUES('$nombre','$cedula','$telefono','$correo')";

mysqli_query($conexion,$sql);

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Clientes</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
}

.contenedor{
width:80%;
margin:auto;
background:white;
padding:20px;
margin-top:20px;
border-radius:10px;
}

input{
width:100%;
padding:10px;
margin-bottom:10px;
}

button{
background:#0c3c78;
color:white;
padding:10px;
border:none;
cursor:pointer;
}

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

table,th,td{
border:1px solid #ccc;
}

th,td{
padding:10px;
}

</style>

</head>

<body>

<div class="contenedor">

<h2>Registro de Clientes</h2>

<form method="POST">

<input type="text" name="nombre" placeholder="Nombre" required>

<input type="text" name="cedula" placeholder="Cédula" required>

<input type="text" name="telefono" placeholder="Teléfono">

<input type="email" name="correo" placeholder="Correo">

<button type="submit" name="guardar">
Guardar Cliente
</button>

</form>

<h3>Clientes Registrados</h3>

<table>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Cédula</th>
<th>Teléfono</th>
<th>Correo</th>
</tr>

<?php

$consulta = mysqli_query($conexion,"SELECT * FROM clientes");

while($fila = mysqli_fetch_array($consulta))
{
?>

<tr>
<td><?php echo $fila['id_cliente']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['cedula']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['correo']; ?></td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>