
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeLooks - Tu Destino de Belleza</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <nav>
            <div class="logo">
                <img src="logo.jpg" alt="LuxeLooks Logo">
            </div>
            <ul>
                <li><a href="#home">Inicio</a></li>
                <li><a href="../productos/index.html">Productos</a></li>
                <li><a href="../contacto/index.html">Contactos</a></li>
                <li><a href="../login/login.php" class="btn-login">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>Divine Glow</h1>
                <p>Donde tu brillo interior se encuentra con el poder del maquillaje.</p>
                <button class="cta-button" id="comprarAhoraBtn">Comprar ahora</button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Divine Glow. Belleza con estilo. Todos los derechos reservados.</p>
    </footer>

    <script>
        document.getElementById('comprarAhoraBtn').addEventListener('click', function() {
            // Redirigir a la página de productos
            window.location.href = '../carrito/index.html'; // Cambia esta URL según sea necesario
        });
    </script>
</body>
</html>

```