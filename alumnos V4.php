<?php
// Vista administrativa de alumnos. El acceso está protegido y los datos se gestionan mediante JavaScript y la API.
// Protección server-side: redirige a login.html si no hay sesión
require_once 'config/autenticacion.php';
if (($_SESSION['usuario_rol'] ?? '') !== 'Administrador') { header('Location: index.php'); exit; }
$titulo = 'Gestión de Alumnos';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo); ?> - MMA Systems</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">Escuela Combate VILAMIR</div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="alumnos.php">Alumnos</a>
            <a href="profesores.php">Profesores</a><a href="responsables.php">Responsables</a>
            <a href="clases.php">Clases</a>
            <a href="grupos.php">Grupos</a>
            <a href="seminarios.php">Seminarios</a>
            <a href="about.html">About Us</a>
        </nav>
    </header>

    <main class="about-container">
        <h1><?php echo htmlspecialchars($titulo); ?></h1>

        <!-- Formulario para agregar alumnos -->
        <section class="project-info section-spaced">
            <h2>Registrar Nuevo Alumno</h2>
            <div class="form-grid-two">
                <input type="text" id="nombreAlumno" placeholder="Nombre">
                <input type="text" id="apellidoAlumno" placeholder="Apellido">
                <input type="email" id="emailAlumno" placeholder="Correo Electrónico" class="wide-field">
                <button id="btnGuardarAlumno">Guardar Alumno</button>
            </div>
            <p id="mensajeAlumno" class="message-center message-top"></p>
        </section>

        <!-- Tabla o lista de alumnos -->
        <section class="project-info">
            <h2>Listado de Alumnos</h2>
            <div id="listaAlumnos">
                <p>Cargando alumnos...</p>
            </div>
        </section>
    </main>

    <footer>© 2026 MMA Systems</footer>
    <script src="js/alumnos.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
