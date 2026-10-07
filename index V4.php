<?php
// Página principal autenticada: muestra el menú y contenido según el rol guardado en sesión.
require_once 'config/autenticacion.php';
$nombreUsuario = $_SESSION['usuario_nombre'] ?? 'Usuario';
$rol = $_SESSION['usuario_rol'] ?? '';
$esAdmin = ($rol === 'Administrador');
$esProfesor = ($rol === 'Profesor');
?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Vilamir - Inicio</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<header class="navbar"><div class="logo">Escuela Combate VILAMIR</div><nav>
<?php if ($esAdmin): ?><a href="index.php">Inicio</a><a href="alumnos.php">Alumnos</a><a href="profesores.php">Profesores</a><a href="responsables.php">Responsables</a><a href="clases.php">Clases</a><a href="grupos.php">Grupos</a><a href="seminarios.php">Seminarios</a><a href="about.html">About Us</a><a href="publica.php">Web pública</a>
<?php elseif ($esProfesor): ?><a href="index.php">Inicio</a><a href="profesor.php">Mi espacio</a><a href="clases.php">Clases</a><a href="grupos.php">Grupos</a><a href="seminarios.php">Seminarios y eventos</a><a href="about.html">About Us</a><a href="logout.php">Cerrar sesión</a><?php else: ?><a href="index.php">Inicio</a><a href="clases.php">Clases</a><a href="mis_clases.php">Mis clases</a><a href="grupos.php">Grupos</a><a href="seminarios.php">Seminarios y eventos</a><a href="portal.php">Mi cuenta</a><a href="about.html">About Us</a><?php endif; ?>
</nav></header>
<main class="container">
<section class="login-card dashboard-card"><h1>¡Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?>!</h1>
<p>Rol: <strong><?php echo htmlspecialchars($rol); ?></strong></p>
<p><?php echo $esAdmin ? 'Desde aquí puedes administrar el sistema de Vilamir.' : 'Desde aquí puedes consultar clases, grupos, seminarios y eventos, e inscribirte a tus clases.'; ?></p>
<div class="text-center"><a href="logout.php" class="register-link logout-button">Cerrar sesión</a></div></section>
<div class="contenedor-inicio dashboard-wide no-top-margin"><div class="panel">
<?php if ($esAdmin): ?>
<div class="opcion" onclick="location.href='admin.php'"><h2>Panel de administración</h2><p>Gestionar alumnos, profesores, disciplinas, grupos, horarios, pagos, notificaciones, seminarios, promociones y usuarios.</p></div><div class="opcion" onclick="location.href='clases.php'"><h2>Clases</h2><p>Gestionar clases y horarios.</p></div><div class="opcion" onclick="location.href='grupos.php'"><h2>Grupos</h2><p>Gestionar grupos de entrenamiento.</p></div><div class="opcion" onclick="location.href='seminarios.php'"><h2>Seminarios</h2><p>Gestionar eventos y seminarios.</p></div><div class="opcion" onclick="location.href='alumnos.php'"><h2>Alumnos</h2><p>Administrar alumnos.</p></div>
<?php elseif ($esProfesor): ?>
<div class="opcion" onclick="location.href='profesor.php'"><h2>Mi espacio como profesor</h2><p>Elegir disciplinas que enseñas y consultar tus grupos.</p></div><div class="opcion" onclick="location.href='clases.php'"><h2>Clases</h2><p>Consultar las disciplinas disponibles.</p></div><div class="opcion" onclick="location.href='grupos.php'"><h2>Grupos</h2><p>Consultar los grupos de entrenamiento.</p></div><div class="opcion" onclick="location.href='seminarios.php'"><h2>Seminarios y eventos</h2><p>Consultar próximos eventos.</p></div>
<?php else: ?>
<div class="opcion" onclick="location.href='clases.php'"><h2>Clases y cursos</h2><p>Ver clases disponibles e inscribirte.</p></div><div class="opcion" onclick="location.href='mis_clases.php'"><h2>Mis clases</h2><p>Ver las clases en las que estás inscrito.</p></div><div class="opcion" onclick="location.href='grupos.php'"><h2>Grupos</h2><p>Consultar grupos de entrenamiento.</p></div><div class="opcion" onclick="location.href='seminarios.php'"><h2>Seminarios y eventos</h2><p>Consultar próximos eventos.</p></div>
<?php endif; ?>
</div></div></main><footer>© 2026 MMA Systems</footer>    <script src="js/mobile.js"></script>
</body></html>
