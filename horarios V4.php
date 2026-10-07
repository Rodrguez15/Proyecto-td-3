<?php
require_once 'config/autenticacion.php';
$rol = $_SESSION['usuario_rol'] ?? '';
if (!in_array($rol, ['Alumno','Profesor'], true)) { header('Location: index.php'); exit; }
$nombre = $_SESSION['usuario_nombre'] ?? ($rol === 'Profesor' ? 'Profesor' : 'Alumno');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Horarios y promociones - VILAMIR</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="about-page">
<header class="navbar">
    <div class="logo">Escuela Combate VILAMIR</div>
    <nav>
<a href="index.php">Inicio</a>
<?php 
if 
($rol === 'Alumno'): 
?>
<a href="portal.php">Mi cuenta</a>
<a href="grupos.php">Grupos</a>
<?php 
else:
 ?>
 <a href="profesor.php">Mi espacio</a>
 <a href="grupos.php">Grupos</a>
 <?php 
endif;
 ?>
<a href="horarios.php">Horarios</a>
<a href="seminarios.php">Seminarios y eventos</a>
<a href="logout.php">Cerrar sesión</a>
</nav>
</header>
<main class="about-container">
<section class="hero">
    <h1>📅 Horarios y promociones</h1>
    <p>Bienvenido, <strong>
        <?= htmlspecialchars($nombre) ?>
    </strong>.
</p>
</section>
<?php
 if ($rol === 'Alumno'): 
 ?>
<section class="project-info">
    <h2>🎁 Promociones vigentes</h2>
    <div id="promociones" class="cards-grid">
        <p>Cargando...</p>
    </div>
</section>

<section class="project-info">
    <h2>🥋 Días y horarios de clases</h2>
    <p class="small">Se muestran los horarios de todos los grupos. Tus grupos aparecen marcados como <strong>Mi grupo</strong>.
</p>
    <div id="horarios" class="cards-grid">
        <p>Cargando...</p>
    </div>
    <h3 style="margin:28px 0 14px">📅 Vista semanal</h3>
    <div id="calendarioAlumno" class="calendar">
        
    </div>
</section>
<?php 
else:
 ?>
<section class="project-info">
    <h2>👨‍🏫 Mi cronograma de clases</h2>
    <p class="small">Aquí aparecen únicamente los grupos y horarios que tienes asignados.</p>
    <div id="horariosProfesor" class="cards-grid">
        <p>Cargando...</p>
    </div>
</section>
<?php
 endif; 
 ?>
</main>
<footer>© 2026 VILAMIR</footer>
<script>const ROL=<?= json_encode($rol) ?>;
</script>
<script src="js/horarios.js">

</script>
    <script src="js/mobile.js"></script>
</body>
</html>