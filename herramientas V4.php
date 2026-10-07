<?php require_once 'config/admin.php';
 ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Herramientas - VILAMIR</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="navbar">
            <div class="logo">Escuela Combate VILAMIR</div>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="admin.php">Administración</a>
                <a href="reportes.php">Reportes</a>
                <a href="herramientas.php">Herramientas</a>
                <a href="publica.php">Web pública</a>
                <a href="logout.php">Cerrar sesión</a>
            </nav>
        </header>
        <main class="about-container">
            <h1>🛠️ Herramientas avanzadas</h1>
            <section class="project-info">
                <h2>🔎 Buscador global</h2>
                <div class="search-bar">
                    <input id="busqueda" placeholder="Buscar alumno, profesor, grupo o seminario...">
                    <select id="tipoBusqueda">
                        <option value="todos">Todo</option>
                        <option value="alumnos">Alumnos</option>
                        <option value="profesores">Profesores</option>
                        <option value="grupos">Grupos</option>
                        <option value="seminarios">Seminarios</option>
                        <option value="disciplinas">Disciplinas</option>
                    </select>
                </div>
                <div id="resultadosBusqueda"></div>
            </section>
            <section class="project-info">
                <h2>📤 Exportaciones</h2>
                <div class="export-grid">
                    <?php 
                    foreach(['alumnos'=>'Alumnos','pagos'=>'Pagos','asistencia'=>'Asistencia','seminarios'=>'Seminarios'] as $k=>$v):
                     ?>
                        <div class="export-card">
                            <h3>
                                 <?=htmlspecialchars($v)?>
                                </h3>
                            <a class="btn" href="exportar.php?tipo=<?=$k?>&formato=csv">Excel / CSV</a>
                            <a class="btn secondary" href="exportar.php?tipo=<?=$k?>&formato=pdf" target="_blank">PDF</a>
                        </div>
                    <?php 
                endforeach;
                 ?>
                </div>
            </section>
            <section class="project-info">
                <h2>🕘 Actividad reciente</h2>
                <p>Últimas acciones registradas en el sistema.</p>
                <div id="actividadSistema" class="search-results"><p class="small">Cargando actividad...</p></div>
            </section>
            <section class="project-info">
                <h2>🖼️ Galería</h2>
                <p>Subí fotos de seminarios y eventos para mostrarlas en la academia.</p>
                <a class="btn" href="galeria.php">Administrar galería</a>
                <a class="btn secondary" href="galeria.php?publico=1">Ver galería</a>
            </section>
        </main>
        <footer>© 2026 VILAMIR</footer>
        <script src="js/herramientas.js">
            
        </script>
        <script src="js/mobile.js"></script>
</body>
</html>