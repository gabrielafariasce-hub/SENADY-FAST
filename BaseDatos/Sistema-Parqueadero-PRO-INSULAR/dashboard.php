<?php
include("conexion.php");

$totalClientes = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM clientes"));
$totalVehiculos = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM vehiculos"));
$totalEspacios = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM espacios"));
$totalRegistros = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM registros"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
}

.contenedor{
width:90%;
margin:auto;
padding:20px;
}

.titulo{
text-align:center;
color:#0c3c78;
margin-bottom:25px;
}

.cards{
display:flex;
gap:20px;
flex-wrap:wrap;
justify-content:center;
}

.card{
background:white;
width:220px;
padding:20px;
border-radius:10px;
text-align:center;
box-shadow:0 0 10px rgba(0,0,0,0.1);
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

<h1 class="titulo">📊 Dashboard PRO-INSULAR</h1>

<div class="cards">

<div class="card">
<h3>👤 Clientes</h3>
<div class="numero"><?php echo $totalClientes; ?></div>
</div>

<div class="card">
<h3>🚗 Vehículos</h3>
<div class="numero"><?php echo $totalVehiculos; ?></div>
</div>

<div class="card">
<h3>🅿️ Espacios</h3>
<div class="numero"><?php echo $totalEspacios; ?></div>
</div>

<div class="card">
<h3>📋 Registros</h3>
<div class="numero"><?php echo $totalRegistros; ?></div>
</div>

</div>

<br><br>

<a href="index.php">⬅ Volver al inicio</a>

</div>

</body>
</html>