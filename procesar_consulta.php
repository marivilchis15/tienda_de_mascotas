<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Consulta SQL para insertar los datos de consulta en la base de datos
    $consulta = "INSERT INTO consultas (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        // Éxito al guardar los datos en la base de datos
        // Puedes redirigir al usuario a una página de confirmación si lo deseas
        header("Location: confirmacion_consulta.php");
        exit;
    } else {
        // Error al guardar los datos en la base de datos
        echo "Error: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
