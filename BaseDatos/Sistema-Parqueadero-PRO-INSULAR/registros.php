<?php
include("conexion.php");

if(isset($_POST['guardar']))
{
    $vehiculo = $_POST['vehiculo'];
    $espacio = $_POST['espacio'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $hora_ingreso = $_POST['hora_ingreso'];
    $fecha_salida = $_POST['fecha_salida'];
    $hora_salida = $_POST['hora_salida'];

    $sql = "INSERT INTO registros
    (
        fecha_ingreso,
        hora_ingreso,
        fecha_salida,
        hora_salida,
        id_vehiculo,
        id_espacio
    )
    VALUES
    (
        '$fecha_ingreso',
        '$hora_ingreso',
        '$fecha_salida',
        '$hora_salida',
        '$vehiculo',
        '$espacio'
    )";

    mysqli_query($conexion,$sql);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registros</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:#f4f6f9;
}

.contenedor{
    width:85%;
    margin:auto;
    background:white;
    margin-top:20px;
    padding:25px;
    border-radius:12px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

h2{
    color:#0c3c78;
}

input,select{
    width:100%;
    padding:10px;
    margin-bottom:10px;
}

button{
    background:#0c3c78;
    color:white;
    padding:10px 20px;
    border:none;
    cursor:pointer;
}

button:hover{
    background:#072c5a;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table,th,td{
    border:1px solid #ccc;
}

th{
    background:#0c3c78;
    color:white;
}

th,td{
    padding:10px;
    text-align:center;
}

a{
    text-decoration:none;
    color:#0c3c78;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="contenedor">

<h2>📋 Registro de Ingreso y Salida</h2>

<form method="POST">

<label>Fecha de Ingreso</label>
<input type="date" name="fecha_ingreso" required>

<label>Hora de Ingreso</label>
<input type="time" name="hora_ingreso" required>

<label>Fecha de Salida</label>
<input type="date" name="fecha_salida" required>

<label>Hora de Salida</label>
<input type="time" name="hora_salida" required>

<label>Vehículo</label>

<select name="vehiculo">

<?php

$vehiculos = mysqli_query($conexion,"SELECT * FROM vehiculos");

while($v = mysqli_fetch_array($vehiculos))
{
?>

<option value="<?php echo $v['id_vehiculo']; ?>">
    <?php echo $v['placa']; ?>
</option>

<?php
}
?>

</select>

<label>Espacio</label>

<select name="espacio">

<?php

$espacios = mysqli_query($conexion,"SELECT * FROM espacios");

while($e = mysqli_fetch_array($espacios))
{
?>

<option value="<?php echo $e['id_espacio']; ?>">
    Espacio <?php echo $e['numero_espacio']; ?>
</option>

<?php
}
?>

</select>

<button type="submit" name="guardar">
Registrar
</button>

</form>

<br>

<a href="index.php">⬅ Volver al inicio</a>

<table>

<tr>
<th>ID</th>
<th>Fecha Ingreso</th>
<th>Hora Ingreso</th>
<th>Fecha Salida</th>
<th>Hora Salida</th>
<th>Vehículo</th>
<th>Espacio</th>
</tr>

<?php

$consulta = mysqli_query($conexion,"
SELECT * FROM registros
");

while($fila = mysqli_fetch_array($consulta))
{
?>

<tr>
<td><?php echo $fila['id_registro']; ?></td>
<td><?php echo $fila['fecha_ingreso']; ?></td>
<td><?php echo $fila['hora_ingreso']; ?></td>
<td><?php echo $fila['fecha_salida']; ?></td>
<td><?php echo $fila['hora_salida']; ?></td>
<td><?php echo $fila['id_vehiculo']; ?></td>
<td><?php echo $fila['id_espacio']; ?></td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>