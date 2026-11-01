<?php
include("conexion.php");

if(isset($_POST['guardar']))
{
    $id_cliente = $_POST['id_cliente'];
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $color = $_POST['color'];

    $sql = "INSERT INTO vehiculos
    (id_cliente,placa,marca,modelo,color)
    VALUES
    ('$id_cliente','$placa','$marca','$modelo','$color')";

    mysqli_query($conexion,$sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Vehículos</title>

<style>

body{
font-family:Arial,sans-serif;
background:#f4f6f9;
}

.contenedor{
width:85%;
margin:auto;
background:white;
padding:20px;
margin-top:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
color:#0c3c78;
}

input,select{
width:100%;
padding:12px;
margin-bottom:10px;
border:1px solid #ccc;
border-radius:5px;
}

button{
background:#0c3c78;
color:white;
padding:10px 20px;
border:none;
cursor:pointer;
border-radius:5px;
}

button:hover{
background:#082a57;
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

table,th,td{
border:1px solid #ddd;
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
font-weight:bold;
}

</style>

</head>

<body>

<div class="contenedor">

<h2>🚗 Registro de Vehículos</h2>

<form method="POST">

<label>Propietario</label>

<select name="id_cliente" required>

<?php

$clientes = mysqli_query($conexion,"SELECT * FROM clientes");

while($cliente = mysqli_fetch_array($clientes))
{
?>

<option value="<?php echo $cliente['id_cliente']; ?>">
<?php echo $cliente['nombre']; ?>
</option>

<?php
}
?>

</select>

<input type="text" name="placa" placeholder="Placa" required>

<input type="text" name="marca" placeholder="Marca" required>

<input type="text" name="modelo" placeholder="Modelo">

<input type="text" name="color" placeholder="Color">

<button type="submit" name="guardar">
Guardar Vehículo
</button>

</form>

<br>

<a href="index.php">⬅ Volver al inicio</a>

<table>

<tr>
<th>Propietario</th>
<th>Placa</th>
<th>Marca</th>
<th>Modelo</th>
<th>Color</th>
</tr>

<?php

$consulta = mysqli_query($conexion,"
SELECT vehiculos.*, clientes.nombre
FROM vehiculos
INNER JOIN clientes
ON vehiculos.id_cliente = clientes.id_cliente
");

while($fila = mysqli_fetch_array($consulta))
{
?>

<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['placa']; ?></td>
<td><?php echo $fila['marca']; ?></td>
<td><?php echo $fila['modelo']; ?></td>
<td><?php echo $fila['color']; ?></td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>