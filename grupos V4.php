<?php
// Vista de grupos de entrenamiento. Presenta grupos y permite su gestión cuando el usuario es administrador.
// Protección server-side: redirige a login.html si no hay sesión
require_once 'config/autenticacion.php';
$rol = $_SESSION['usuario_rol'] ?? '';
$esAdmin = ($rol === 'Administrador');
$titulo = 'Organización de Grupos de Entrenamiento';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Grupos - MMA Systems</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">

    <header class="navbar"><div class="logo">Escuela Combate VILAMIR</div><nav>
<?php if ($esAdmin): ?><a href="index.php">Inicio</a><a href="alumnos.php">Alumnos</a><a href="profesores.php">Profesores</a><a href="responsables.php">Responsables</a><a href="clases.php">Clases</a><a href="grupos.php">Grupos</a><a href="seminarios.php">Seminarios</a><a href="about.html">About Us</a>
<?php else: ?><a href="index.php">Inicio</a><a href="clases.php">Clases</a><a href="mis_clases.php">Mis clases</a><a href="grupos.php">Grupos</a><a href="seminarios.php">Seminarios y eventos</a><a href="logout.php">Cerrar sesión</a><?php endif; ?></nav></header>

    <main class="about-container">
        <h1><?php echo htmlspecialchars($titulo); ?></h1>

        <!-- Formulario para la Creación de Divisiones -->
<?php if ($esAdmin): ?>
        <section class="project-info section-accent">
            <h2>Crear Nuevo Grupo Operativo</h2>
            <div class="form-grid-two form-grid-spaced">
                <div>
                    <label>Nombre del Grupo</label>
                    <input type="text" id="nombreGrupo" placeholder="Ej: MMA Pro, Kickboxing Inicial">
                </div>
                <div>
                    <label>Disciplina</label>
                    <select id="disciplinaGrupo">
                        <option value="">Cargando disciplinas...</option>
                    </select>
                </div>
                <div>
                    <label>Cupo máximo de alumnos</label>
                    <input type="number" id="cupoGrupo" min="1" value="20">
                </div>
                <div>
                    <label>Nivel de Clasificación</label>
                    <select id="nivelGrupo">
                        <option value="Principiante">Principiante (Recreativo)</option>
                        <option value="Intermedio">Intermedio (Técnico)</option>
                        <option value="Avanzado">Avanzado (Sparring)</option>
                        <option value="Competencia">Competencia (Vilamir Team)</option>
                    </select>
                </div>
                <div class="wide-field">
                    <label>Descripción Breve y Enfoque</label>
                    <input type="text" id="descripcionGrupo" placeholder="Ej: Enfocado en el desarrollo de técnicas básicas y acondicionamiento físico general.">
                </div>
                <div class="wide-field top-small">
                    <button id="btnGuardarGrupo">Establecer Grupo</button>
                </div>
            </div>
            <p id="mensajeGrupo" class="message-center message-top"></p>
        </section>
<?php endif; ?>

        <!-- Bloque de Visualización del Esquema Académico -->
        <section class="project-info">
            <h2>Grupos Configurados Vigentes</h2>
            <p class="muted-center spaced-bottom">
                Divisiones operativas actuales. Los alumnos pueden inscribirse hasta completar el cupo y los profesores pueden inscribirse en los grupos de las disciplinas que enseñan.
            </p>

            <!-- Contenedor adaptativo alineado con el motor js/grupos.js -->
            <div id="contenedorGrupos" class="team no-bottom-margin">
                <!-- Las tarjetas se estructurarán de forma automática aquí -->
            </div>
        </section>
    </main>

    <footer>
        © 2026 MMA Systems
    </footer>

    <script src="js/grupos.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
