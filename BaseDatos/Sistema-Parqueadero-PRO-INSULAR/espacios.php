<?php
include("conexion.php");

if(isset($_POST['guardar']))
{
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO espacios(numero_espacio,estado)
            VALUES('$numero','$estado')";

    mysqli_query($conexion,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Espacios</title>

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

input,select{
width:100%;
padding:10px;
margin-bottom:10px;
}

button{
background:#0c3c78;
color:white;
padding:10px;
border:none;
}

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

table,th,td{
border:1px solid #ccc;
padding:10px;
}

</style>

</head>

<body>

<div class="contenedor">

<h2>🅿️ Gestión de Espacios</h2>

<form method="POST">

<input type="number" name="numero" placeholder="Número de espacio" required>

<select name="estado">
<option value="Disponible">Disponible</option>
<option value="Ocupado">Ocupado</option>
</select>

<button type="submit" name="guardar">
Guardar Espacio
</button>

</form>

<br>

<a href="index.php">⬅ Volver al inicio</a>

<table>

<tr>
<th>ID</th>
<th>Espacio</th>
<th>Estado</th>
</tr>

<?php

$consulta = mysqli_query($conexion,"SELECT * FROM espacios");

while($fila = mysqli_fetch_array($consulta))
{
?>

<tr>
<td><?php echo $fila['id_espacio']; ?></td>
<td><?php echo $fila['numero_espacio']; ?></td>
<td><?php echo $fila['estado']; ?></td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>