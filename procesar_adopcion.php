<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mascota = $_POST["mascota"];
    $mensaje = $_POST["mensaje"];

    // Consulta SQL para insertar los datos de adopción en la base de datos
    $consulta = "INSERT INTO formulario (nombre, email, mensaje, telefono, fecha) VALUES ('$nombre', '$email', '$mensaje', 'telefono', 'fecha')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        // Éxito al guardar los datos en la base de datos
        // Puedes redirigir al usuario a una página de confirmación si lo deseas
        header("Location: confirmacion_adopcion.php");
        exit;
    } else {
        // Error al guardar los datos en la base de datos
        echo "Error: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
