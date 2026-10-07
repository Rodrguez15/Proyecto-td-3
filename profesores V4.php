<?php
// Página informativa del cuerpo docente.
// La gestión completa se realiza desde el panel de administración.
require_once 'config/admin.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores - VILAMIR</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">
    <header class="navbar">
        <div class="logo">Escuela Combate VILAMIR</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="admin.php">Administración</a>
            <a href="reportes.php">Reportes</a>
            <a href="responsables.php">Responsables</a>
            <a href="logout.php">Cerrar sesión</a>
        </nav>
    </header>

    <main class="admin">
        <section class="hero">
            <h1>Profesores</h1>
            <p>Los profesores forman parte del cuerpo docente y están a cargo de las disciplinas y clases de la academia.</p>
            <p><a href="admin.php">Ir a Administración → Profesores</a></p>
        </section>
    </main>

    <footer>© 2026 VILAMIR</footer>
    <script src="js/mobile.js"></script>
</body>
</html>
