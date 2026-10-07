<?php
// Página administrativa para gestionar responsables de alumnos menores.
require_once 'config/admin.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsables - VILAMIR</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">
    <header class="navbar">
        <div class="logo">Escuela Combate VILAMIR</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="admin.php">Administración</a>
            <a href="reportes.php">Reportes</a>
            <a href="about.html">About Us</a>
            <a href="logout.php">Cerrar sesión</a>
        </nav>
    </header>

    <main class="admin">
        <section class="hero">
            <h1>Responsables de alumnos</h1>
            <p>Registra a la madre, padre o adulto responsable de un alumno menor.</p>
        </section>
        <div id="responsablesApp" class="module"></div>
    </main>

    <footer>© 2026 VILAMIR</footer>
    <script src="js/responsables.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
