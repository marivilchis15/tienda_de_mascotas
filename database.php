<?php
$host = "localhost"; // Cambia esto si tu base de datos no está en el servidor local
$usuario = "usuario"; // Cambia esto por el usuario de tu base de datos
$contrasena = "contraseña"; // Cambia esto por la contraseña de tu base de datos
$base_de_datos = "tienda_de_mascotas"; // Cambia esto por el nombre de tu base de datos

// Conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error de conexión a MySQL: " . mysqli_connect_error();
    exit();
}
?>
