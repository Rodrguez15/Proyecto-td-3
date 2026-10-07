<?php
// Página de disciplinas/clases.
// El administrador puede crear y modificar disciplinas.
// El alumno puede consultar las disciplinas e inscribirse.
require_once 'config/autenticacion.php';

$admin = (($_SESSION['usuario_rol'] ?? '') === 'Administrador');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases y disciplinas - VILAMIR</title>
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
        <h1>
            <?= $admin ? 'Gestión de disciplinas / clases' : 'Clases y cursos disponibles' ?>
        </h1>

        <?php if ($admin): ?>
            <section class="project-info">
                <h2>Agregar disciplina</h2>

                <div class="form-stack">
                    <input
                        id="nombreClase"
                        placeholder="Nombre de la disciplina"
                    >

                    <textarea
                        id="descripcionClase"
                        placeholder="Descripción"
                    ></textarea>

                    <input
                        id="costoClase"
                        type="number"
                        step="0.01"
                        placeholder="Costo"
                    >

                    <button id="btnGuardarClase">
                        Guardar disciplina
                    </button>
                </div>

                <p id="mensajeClase"></p>
            </section>
        <?php else: ?>
            <section class="project-info">
                <p class="muted-center">
                    Selecciona una clase para inscribirte.
                    Luego podrás verla en
                    <a href="mis_clases.php">Mis clases</a>.
                </p>

                <p id="mensajeClase"></p>
            </section>
        <?php endif; ?>

        <section class="project-info">
            <!-- js/clases.js genera las tarjetas de disciplinas aquí. -->
            <div id="listaClases" class="team cards-grid"></div>
        </section>
    </main>

    <footer>© 2026 MMA Systems</footer>

    <script src="js/clases.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
