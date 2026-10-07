<?php
// Panel principal de administración.
// La autenticación verifica que el usuario tenga rol Administrador.
require_once 'config/admin.php';

// Obtiene el nombre del administrador para mostrarlo en pantalla.
$nombre = $_SESSION['usuario_nombre'] ?? 'Administrador';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - VILAMIR</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">
    <header class="navbar">
        <div class="logo">Escuela Combate VILAMIR</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="admin.php">Administración</a>
            <a href="reportes.php">Reportes</a><a href="herramientas.php">Herramientas</a><a href="publica.php">Web pública</a><a href="calendario.php">Calendario</a>
            <a href="about.html">About Us</a>
            <a class="logout" href="logout.php">Cerrar sesión</a>
        </nav>
    </header>

    <main class="admin">
        <section class="hero">
            <h1>Panel de Administración</h1>
            <p>
                Bienvenido,
                <strong><?= htmlspecialchars($nombre) ?></strong>.
                Gestiona alumnos, profesores, disciplinas, horarios, grupos,
                pagos, notificaciones, seminarios, promociones, usuarios
                e inscripciones.
            </p>
        </section>

        <!-- JavaScript carga aquí las estadísticas del sistema. -->
        <div id="stats" class="stats"></div>

        <!-- Resumen operativo del día. -->
        <section id="dashboard-extra" class="dashboard-extra" aria-label="Resumen administrativo"></section>

        <!-- JavaScript genera aquí las pestañas de cada módulo. -->
        <div id="tabs" class="tabs"></div>

        <!-- Aquí se muestra el formulario y la tabla del módulo seleccionado. -->
        <section id="module" class="module"></section>
    </main>

    <footer>© 2026 MMA Systems</footer>

    <script src="js/admin.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
