<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Parqueadero PRO-INSULAR</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f6f9;
}

header{
    background:#0c3c78;
    color:white;
    text-align:center;
    padding:25px;
}

.contenedor{
    width:90%;
    margin:auto;
    margin-top:30px;
}

.bienvenida{
    background:white;
    padding:30px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 0 15px rgba(0,0,0,0.1);
}

.bienvenida h1{
    color:#0c3c78;
    margin-bottom:15px;
}

.modulos{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
    margin-top:30px;
}

.card{
    width:220px;
    background:white;
    padding:20px;
    border-radius:12px;
    text-align:center;
    text-decoration:none;
    color:black;
    box-shadow:0 0 10px rgba(0,0,0,0.15);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    background:#eef4ff;
}

.card h3{
    color:#0c3c78;
    margin-bottom:10px;
}

footer{
    background:#0c3c78;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:40px;
}

</style>

</head>

<body>

<header>
    <h1>SISTEMA DE PARQUEADERO PRO-INSULAR</h1>
</header>

<div class="contenedor">

<div class="bienvenida">

<h1>Bienvenido</h1>

<p>
Sistema de gestión y control de vehículos,
clientes y espacios de estacionamiento.
</p>

<div class="modulos">

<a href="clientes.php" class="card">
    <h3>👤 Clientes</h3>
    <p>Administración de clientes</p>
</a>

<a href="vehiculos.php" class="card">
    <h3>🚗 Vehículos</h3>
    <p>Registro de vehículos</p>
</a>

<a href="espacios.php" class="card">
    <h3>🅿️ Espacios</h3>
    <p>Control de espacios</p>
</a>

<a href="registros.php" class="card">
    <h3>📋 Registros</h3>
    <p>Ingresos y salidas</p>
</a>

<a href="dashboard.php" class="card">
    <h3>📊 Dashboard</h3>
    <p>Estadísticas generales</p>
</a>

</div>

</div>

</div>

<footer>
Sistema de Parqueadero PRO-INSULAR © 2026
</footer>

</body>

</html>