<?php
// Portal del alumno para consultar las disciplinas en las que está inscrito.
require_once 'config/autenticacion.php';

if (($_SESSION['usuario_rol'] ?? '') !== 'Alumno') {
    header('Location: index.php');
    exit;
}

$nombreUsuario = $_SESSION['usuario_nombre'] ?? 'Alumno';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis clases - Vilamir</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">
<header class="navbar">
    <div class="logo">Escuela Combate VILAMIR</div>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="clases.php">Clases</a>
        <a href="mis_clases.php">Mis clases</a>
        <a href="grupos.php">Grupos</a>
        <a href="seminarios.php">Seminarios y eventos</a>
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</header>

<main class="about-container">
    <h1>Mis clases</h1>
    <p class="muted-center spaced-bottom">
        Hola <?php echo htmlspecialchars($nombreUsuario); ?>. Aquí puedes consultar las clases en las que estás inscrito.
    </p>

    <section class="project-info">
        <div id="misClases" class="team cards-grid">
            <p class="muted-center full-grid">Cargando tus clases...</p>
        </div>
        <p id="mensajeMisClases" class="message-center"></p>
    </section>
</main>
<footer>© 2026 MMA Systems</footer>
<script src="js/mis_clases.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
