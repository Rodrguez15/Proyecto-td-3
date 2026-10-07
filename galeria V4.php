<?php require_once 'config/autenticacion.php';
 require_once 'config/conexion.php';
  $admin=strcasecmp(trim($_SESSION['usuario_rol']??''),
  'Administrador')===0;
   $eventos=$conexion->query(
    "SELECT ID_Seminario,COALESCE(NULLIF(Nombre,''),
    Titulo) Nombre 
    FROM SEMINARIO 
    ORDER BY Fecha DESC")->fetchAll();
     ?>
    <!doctype html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <title>Galería VILAMIR</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <header class="navbar">
                <div class="logo">🥋 Academia VILAMIR</div>
                <nav>
                    <a href="index.php">Inicio</a>
                    <?php
                     if($admin): 
                        ?>
                        <a href="herramientas.php">Herramientas</a>
                    <?php
                 endif; 
                 ?>
                    <a href="publica.php">Web pública</a>
                    <a href="logout.php">Cerrar sesión</a>
                </nav>
            </header>
            <main class="about-container">
                <h1>🖼️ Galería de eventos</h1>
                <?php if($admin): ?>
                    <section class="project-info">
                        <h2>Agregar fotografía</h2>
                        <form action="api/avanzadas.php?entity=galeria" method="post" enctype="multipart/form-data" class="form-grid-two">
                            <input name="titulo" placeholder="Título" required>
                            <select name="seminario">
                                <option value="0">Evento relacionado</option>
                                <?php 
                                foreach($eventos as $e):
                                 ?>
                                    <option value="<?=$e['ID_Seminario']?>"><?=htmlspecialchars($e['Nombre'])?></option>
                                <?php 
                            endforeach;
                             ?>
                            </select>
                            <input type="file" name="imagen" accept="image/jpeg,image/png,image/webp" required>
                            <input name="descripcion" placeholder="Descripción">
                            <button>Subir imagen</button>
                        </form>
                    </section>
                <?php 
            endif; 
            ?>
                <section class="gallery-grid" id="gallery"></section>
            </main>
            <footer>© 2026 VILAMIR</footer>
            <script>
                fetch('api/avanzadas.php?entity=galeria')
                    .then(r => r.json())
                    .then(d => {
                        document.getElementById('gallery').innerHTML = (d.rows || []).map(x => `
                            <article class="gallery-card">
                                <img src="uploads/gallery/${encodeURIComponent(x.Imagen)}" alt="${x.Titulo}">
                                <div>
                                    <h3>${x.Titulo}</h3>
                                    <p>${x.Descripcion || ''}</p>
                                    <small>${x.Evento || ''}</small>
                                </div>
                            </article>
                        `).join('') || '<p>No hay imágenes todavía.</p>';
                    });
            </script>
            <script src="js/mobile.js"></script>
</body>
    </html>