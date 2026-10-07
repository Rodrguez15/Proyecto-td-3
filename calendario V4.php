<?php
require_once 'config/autenticacion.php';
$rol = $_SESSION['usuario_rol'] ?? 'Alumno';
$nombre = $_SESSION['usuario_nombre'] ?? $rol;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Calendario - VILAMIR</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="about-page">
        <header class="navbar">
            <div class="logo">VILAMIR</div>
            <nav>
                <a href="index.php">Inicio</a>
                <?php 
                if
                ($rol==='Administrador'): 
                ?>
                    <a href="admin.php">Administración</a>
                    <a href="reportes.php">Estadísticas</a>
                <?php 
            endif; 
            ?>
<?php 
if
($rol === 'Profesor'):
 ?>
    <a href="profesor.php">Mi espacio</a>
    <?php
     endif;
     ?>
<?php 
if
($rol === 'Alumno'): 
?>
<a href="portal.php">Mi cuenta</a>
<?php
 endif;
  ?>
<a href="calendario.php">Calendario</a>
<a href="logout.php">Cerrar sesión</a>
</nav>
</header>
<main class="wrap">
    <section class="hero">
        <h1>📅 Calendario de VILAMIR</h1>
        <p>Hola, <?=htmlspecialchars($nombre)?>. Aquí puedes consultar clases, seminarios y eventos.</p>
    </section>
<section class="card calendar-toolbar">
    <button id="prevMes">← Semana anterior</button>
    <button id="hoyMes" class="secondary">Hoy</button>
    <h2 id="tituloMes">

    </h2>
    <button id="nextMes">Semana siguiente →</button>
</section>
<section class="card calendar-filters" aria-label="Filtros del calendario">
    <div class="calendar-filter">
        <label for="filtroDisciplina">Disciplina</label>
        <select id="filtroDisciplina"><option value="0">Todas</option></select>
    </div>
    <div class="calendar-filter">
        <label for="filtroGrupo">Grupo</label>
        <select id="filtroGrupo"><option value="0">Todos</option></select>
    </div>
    <div class="calendar-filter">
        <label for="filtroTipo">Mostrar</label>
        <select id="filtroTipo">
            <option value="todos">Clases + eventos</option>
            <option value="clases">Solo clases</option>
            <option value="eventos">Solo eventos</option>
        </select>
    </div>
    <button id="limpiarFiltros" class="secondary" type="button">Limpiar filtros</button>
</section>
<section id="calendarioGeneral" class="calendar-full">

</section>
<section class="card">
    <h2>📌 Próximas actividades</h2>
    <div id="proximasActividades" class="cards-grid">

    </div>
</section>
</main>
<footer>© 2026 VILAMIR</footer>
<script src="js/calendario.js">

</script>
    <script src="js/mobile.js"></script>
</body>
</html>
