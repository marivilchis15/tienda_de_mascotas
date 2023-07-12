<?php
include 'database.php';

// Resto del código de la página
// ...
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tienda de Mascotas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Tienda de Mascotas</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="adopcion.php">Adopción</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="carrito.php">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <section id="productos">
        <h2>Productos Disponibles</h2>
        <section id="producto">
        <h2>PRODUCTOS</h2>
        <div class="producto">
            <img src="croqueta.jfif" alt="Producto 1">
            <h3>Comida para Perros</h3>
            <p> Encuentra croquetas y treats de tus marcas favoritas. 
                <br>Hill's, Purina, Royal Canin y mas 1 a 12 de 
                <br>mas de 2,000 croquetas para Perros,
                <br> Adulto para diferentes razas, con Omega 3 y 6, 
                <br>presentacion de 8 kg. 10,102.</p>
                <button><a href="guarda.html">Agrega al carrito</a></button>
        </div>

        <div class="producto">
            <img src="croque.jpg" alt="Producto 2">
            <h3>CROQUETAS PARA GATO</h3>
            <p>Selecciona las mejores croquetas tu gato: 
                <br>1.1 Hill’s Science Diet Gato; 1.2 Felix Travesuras; 
                <br>1.3 Nupec Gato Adulto; 1.4 Royal Canin Indoor; 
                <br>1.5 Diamond Natural Indoor Cat.</p>
                <button><a href="carrito.php">Agrega al carrito</a></button>
        </div>
        <div class="producto">
            <img src="ac.jpg" alt="Producto 2">
            <h3>ALIMENTOS PARA AVEZ</h3>
            <p>Contamos con la mejor alimentación profesional con base de alpiste 
                <br> para tus aves en sus diferentes etapas. 
                <br> Semillas, pastas de cria y papillas para canarios, periquitos,
                <br> loros, finches, agapornis, ninfas, etc.</p>
                <button><a href="carrito.php">Agrega al carrito</a></button>
        </div>
        <div class="producto">
            <img src="trans.jpg" alt="Producto 2">
            <h3>TRANSPORTE</h3>
            <p>LLEVA A TUS MASCOTAS COMODAMENTE:
                <br> lleva tus cajas,jaulas,bolsas
                <br> de mano etc. Todo lo que ayudara a </p>
                <button><a href="carrito.php">Agrega al carrito</a></button>
        </div>
        <div class="producto">
            <img src="jug.jfif" alt="Producto 2">
            <h3>JUGETES</h3>
            <p>LLEVA A TUS MASCOTAS COMODAMENTE:
                <br> te damos ideales para tu mascota. 
                <br> Juguetes para cachorros Los juguetes que tienen cuerdas 
            <br>y cintas son de sus favoritos</p>
            <button><a href="carrito.php">Agrega al carrito</a></button>
        </div>
        

        <div class="producto">
            <img src="collares.jpg" alt="Producto 2">
            <h3>COLLARES </h3>
            <p>LA MEJOR LINAEA DE COLLARES PÁRA TUS MASCOTAS:
                <br> te damos una amplia gama de opciones.
                <br> collres y correas para tus amigos.
            <br>y cintas son de sus favoritos</p>
            <button><a href="carrito.php">Agrega al carrito</a></button>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
