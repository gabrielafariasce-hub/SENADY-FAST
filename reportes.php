<?php
include("conexion.php");

$totalClientes = mysqli_num_rows(
mysqli_query($conexion,"SELECT * FROM clientes")
);

$totalVehiculos = mysqli_num_rows(
mysqli_query($conexion,"SELECT * FROM vehiculos")
);

$totalEspacios = mysqli_num_rows(
mysqli_query($conexion,"SELECT * FROM espacios")
);

$totalRegistros = mysqli_num_rows(
mysqli_query($conexion,"SELECT * FROM registros")
);
?>

<!DOCTYPE html>
<html>
<head>

<title>Reportes</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
}

.contenedor{
width:80%;
margin:auto;
margin-top:30px;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}

h1{
color:#0c3c78;
}

.numero{
font-size:40px;
font-weight:bold;
color:#0c3c78;
}

</style>

</head>

<body>

<div class="contenedor">

<h1>📊 Reportes del Sistema</h1>

<div class="card">
<h2>Total Clientes</h2>
<div class="numero"><?php echo $totalClientes; ?></div>
</div>

<div class="card">
<h2>Total Vehículos</h2>
<div class="numero"><?php echo $totalVehiculos; ?></div>
</div>

<div class="card">
<h2>Total Espacios</h2>
<div class="numero"><?php echo $totalEspacios; ?></div>
</div>

<div class="card">
<h2>Total Registros</h2>
<div class="numero"><?php echo $totalRegistros; ?></div>
</div>

<br>

<a href="index.php">⬅ Volver al inicio</a>

</div>

</body>
</html>