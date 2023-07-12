<?php
include 'database.php';

// Resto del código de la página
// ...
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Contacto</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="adopcion.php">Adopción</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <section id="formulario">
        <h2>Envíanos tus consultas</h2>
        <form action="procesar_consulta.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar Consulta</button>
        </form>
    </section>
</body>
</html>
