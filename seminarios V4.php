<?php
// Página de seminarios y eventos.
// El administrador puede crear, editar y eliminar eventos.
// Los alumnos pueden consultar e inscribirse a los eventos disponibles.
require_once 'config/autenticacion.php';

$admin = (($_SESSION['usuario_rol'] ?? '') === 'Administrador');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminarios y eventos - VILAMIR</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">
    <header class="navbar">
        <div class="logo">Escuela Combate VILAMIR</div>

        <nav>
            <a href="index.php">Inicio</a>

            <?php if ($admin): ?>
                <a href="admin.php">Administración</a>
            <?php else: ?>
                <a href="clases.php">Clases</a>
                <a href="mis_clases.php">Mis clases</a>
            <?php endif; ?>

            <a href="grupos.php">Grupos</a>
            <a href="seminarios.php">Seminarios y eventos</a>
            <a href="logout.php">Cerrar sesión</a>
        </nav>
    </header>

    <main class="about-container">
        <h1>Seminarios y eventos</h1>

        <?php if ($admin): ?>
            <section class="project-info">
                <h2>Crear seminario o evento</h2>

                <div class="form-stack">
                    <input
                        id="tituloSeminario"
                        placeholder="Nombre"
                    >

                    <textarea
                        id="descripcionSeminario"
                        placeholder="Descripción"
                    ></textarea>

                    <input
                        id="costoSeminario"
                        type="number"
                        step="0.01"
                        placeholder="Costo"
                    >

                    <input
                        id="fechaSeminario"
                        type="date"
                    >

                    <button id="btnGuardarSeminario">
                        Guardar
                    </button>
                </div>

                <p id="mensajeSeminario"></p>
            </section>
        <?php endif; ?>

        <section class="project-info">
            <h2>Próximos seminarios y eventos</h2>
            <p class="small">Consulta las actividades disponibles y realiza tu inscripción directamente desde aquí.</p>

            <!-- js/seminarios.js genera las tarjetas y el botón de inscripción aquí. -->
            <div id="listaSeminarios" class="team cards-grid"></div>
        </section>
    </main>

    <footer>© 2026 MMA Systems</footer>

    <script src="js/seminarios.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
