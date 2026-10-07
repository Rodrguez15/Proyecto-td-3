<?php
require_once 'config/conexion.php';

$disc = $conexion->query(
    "SELECT ID_Disciplina,Nombre,Descripcion,Costo FROM DISCIPLINA ORDER BY Nombre"
)->fetchAll();

$prof = $conexion->query(
    "SELECT ID_Profesor,Nombre,Apellido,Especialidad FROM PROFESOR ORDER BY Apellido,Nombre"
)->fetchAll();

$event = $conexion->query(
    "SELECT ID_Seminario,COALESCE(NULLIF(Nombre,''),Titulo) Nombre,Descripcion,Fecha,Costo,Lugar,Hora,Cupo,Ponente
     FROM SEMINARIO
     WHERE Fecha>=CURDATE()
     ORDER BY Fecha,Hora
     LIMIT 6"
)->fetchAll();

$promo = $conexion->query(
    "SELECT * FROM PROMOCION
     WHERE Activa=1
       AND (Fecha_inicio IS NULL OR Fecha_inicio<=CURDATE())
       AND (Fecha_fin IS NULL OR Fecha_fin>=CURDATE())
     ORDER BY Nombre
     LIMIT 6"
)->fetchAll();

try {
    $galeria = $conexion->query(
        "SELECT g.Titulo,g.Imagen,g.Descripcion,COALESCE(s.Nombre,s.Titulo) Evento
         FROM GALERIA_EVENTO g
         LEFT JOIN SEMINARIO s ON s.ID_Seminario=g.ID_Seminario
         ORDER BY g.Fecha DESC
         LIMIT 6"
    )->fetchAll();
} catch (Throwable $e) {
    $galeria = [];
}

$stats = [
    'disciplinas' => count($disc),
    'profesores' => count($prof),
    'eventos' => count($event),
];

function pubDate($fecha) {
    return $fecha ? date('d/m/Y', strtotime($fecha)) : 'Fecha a confirmar';
}
function moneyPub($value) {
    return '$' . number_format((float)$value, 2, ',', '.');
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Academia VILAMIR: disciplinas de combate, clases, profesores, seminarios y eventos.">
    <title>Academia VILAMIR | Entrená. Aprendé. Superate.</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="public-page public-v16">
<header class="navbar public-navbar">
    <a class="logo public-logo" href="publica.php" aria-label="Academia VILAMIR - inicio">🥋 Academia VILAMIR</a>
    <nav>
        <a href="#disciplinas">Disciplinas</a>
        <a href="#equipo">Equipo</a>
        <a href="#eventos">Eventos</a>
        <a href="#promociones">Promociones</a>
        <a href="#contacto">Contacto</a>
        <a class="public-nav-cta" href="login.html">Ingresar</a>
    </nav>
</header>

<main>
    <section class="public-hero public-hero-v16">
        <div class="public-hero-content">
            <span class="eyebrow">ESCUELA DE COMBATE · VILAMIR</span>
            <h1>Convertí el entrenamiento en disciplina.</h1>
            <p>Entrená con objetivos claros, encontrá tu disciplina y participá de clases, seminarios y eventos desde una sola plataforma.</p>
            <div class="public-hero-actions">
                <a class="btn" href="login.html">Ingresar a mi cuenta</a>
                <a class="btn public-btn-secondary" href="#disciplinas">Conocer disciplinas</a>
            </div>
            <div class="public-hero-stats" aria-label="Resumen de la academia">
                <div><strong><?= $stats['disciplinas'] ?></strong><span>disciplinas</span></div>
                <div><strong><?= $stats['profesores'] ?></strong><span>profesores</span></div>
                <div><strong><?= $stats['eventos'] ?></strong><span>próximos eventos</span></div>
            </div>
        </div>
    </section>

    <section class="public-section public-intro">
        <div class="public-section-heading">
            <span class="eyebrow">VIVÍ VILAMIR</span>
            <h2>Entrenamiento, comunidad y progreso</h2>
            <p>Todo lo necesario para organizar tu entrenamiento y mantenerte conectado con la academia.</p>
        </div>
        <div class="public-feature-grid">
            <article class="public-feature"><span>🥋</span><h3>Disciplinas</h3><p>Elegí la disciplina que mejor se adapte a tus objetivos y consultá sus clases.</p></article>
            <article class="public-feature"><span>📅</span><h3>Clases y horarios</h3><p>Consultá grupos, días y horarios desde tu cuenta de alumno.</p></article>
            <article class="public-feature"><span>🏆</span><h3>Seminarios y eventos</h3><p>Reservá tu lugar en actividades especiales y mantené tus inscripciones al día.</p></article>
            <article class="public-feature"><span>📲</span><h3>Todo en un lugar</h3><p>Accedé desde el celular o la computadora a la plataforma de VILAMIR.</p></article>
        </div>
    </section>

    <section id="disciplinas" class="public-section alt">
        <div class="public-section-heading"><span class="eyebrow">ENTRENAMIENTO</span><h2>Nuestras disciplinas</h2><p>Conocé las opciones disponibles actualmente en la academia.</p></div>
        <div class="cards-grid public-cards-v16">
            <?php foreach ($disc as $d): ?>
            <article class="public-card public-discipline-card">
                <div class="public-card-icon">🥋</div>
                <h3><?= htmlspecialchars($d['Nombre']) ?></h3>
                <p><?= htmlspecialchars($d['Descripcion'] ?: 'Entrenamiento y formación integral.') ?></p>
                <?php if ((float)$d['Costo'] > 0): ?><strong><?= moneyPub($d['Costo']) ?></strong><?php else: ?><strong>Consultar</strong><?php endif; ?>
            </article>
            <?php endforeach; ?>
            <?php if (!$disc): ?><p class="public-empty">No hay disciplinas publicadas todavía.</p><?php endif; ?>
        </div>
    </section>

    <section id="equipo" class="public-section">
        <div class="public-section-heading"><span class="eyebrow">EQUIPO VILAMIR</span><h2>Profesores</h2><p>Conocé al equipo que acompaña el entrenamiento.</p></div>
        <div class="cards-grid public-cards-v16">
            <?php foreach ($prof as $p): ?>
            <article class="public-card public-prof-card">
                <div class="public-prof-avatar">🥊</div>
                <div><h3><?= htmlspecialchars($p['Nombre'].' '.$p['Apellido']) ?></h3><p><?= htmlspecialchars($p['Especialidad'] ?: 'Profesor VILAMIR') ?></p></div>
            </article>
            <?php endforeach; ?>
            <?php if (!$prof): ?><p class="public-empty">No hay profesores publicados todavía.</p><?php endif; ?>
        </div>
    </section>

    <section id="eventos" class="public-section alt">
        <div class="public-section-heading"><span class="eyebrow">AGENDA</span><h2>Próximos eventos</h2><p>Seminarios y actividades especiales disponibles para inscripción.</p></div>
        <div class="cards-grid public-cards-v16">
            <?php foreach ($event as $e): ?>
            <article class="public-card public-event-card">
                <div class="public-event-date"><strong><?= date('d', strtotime($e['Fecha'])) ?></strong><span><?= strtoupper(date('M', strtotime($e['Fecha']))) ?></span></div>
                <h3><?= htmlspecialchars($e['Nombre'] ?: 'Seminario / evento') ?></h3>
                <p><?= htmlspecialchars($e['Descripcion'] ?: 'Actividad especial de Academia VILAMIR.') ?></p>
                <div class="public-event-meta">
                    <span>🕒 <?= $e['Hora'] ? htmlspecialchars(substr($e['Hora'],0,5)) : 'Horario a confirmar' ?></span>
                    <span>📍 <?= htmlspecialchars($e['Lugar'] ?: 'Lugar a confirmar') ?></span>
                </div>
                <strong><?= (float)$e['Costo'] > 0 ? moneyPub($e['Costo']) : 'Actividad gratuita' ?></strong>
            </article>
            <?php endforeach; ?>
            <?php if (!$event): ?><p class="public-empty">No hay próximos eventos publicados.</p><?php endif; ?>
        </div>
    </section>

    <section id="promociones" class="public-section">
        <div class="public-section-heading"><span class="eyebrow">OPORTUNIDADES</span><h2>Promociones</h2><p>Beneficios activos para aprovechar tu entrenamiento.</p></div>
        <div class="cards-grid public-cards-v16">
            <?php foreach ($promo as $p): ?>
            <article class="public-card public-promo-card"><span class="public-promo-tag">OFERTA ACTIVA</span><h3><?= htmlspecialchars($p['Nombre']) ?></h3><p><?= htmlspecialchars($p['Descripcion'] ?: 'Beneficio disponible según las condiciones de la promoción.') ?></p><strong><?= number_format((float)$p['Descuento'], 0, ',', '.') ?>% de descuento</strong></article>
            <?php endforeach; ?>
            <?php if (!$promo): ?><p class="public-empty">No hay promociones activas en este momento.</p><?php endif; ?>
        </div>
    </section>

    <section class="public-section alt">
        <div class="public-section-heading"><span class="eyebrow">MOMENTOS VILAMIR</span><h2>Galería</h2><p>Una mirada a las actividades de la academia.</p></div>
        <div class="public-gallery-v16">
            <?php foreach ($galeria as $g): ?>
                <article class="public-gallery-item"><img src="uploads/gallery/<?= rawurlencode($g['Imagen']) ?>" alt="<?= htmlspecialchars($g['Titulo']) ?>" loading="lazy"><div><h3><?= htmlspecialchars($g['Titulo']) ?></h3><?php if ($g['Evento']): ?><small><?= htmlspecialchars($g['Evento']) ?></small><?php endif; ?></div></article>
            <?php endforeach; ?>
            <?php if (!$galeria): ?><div class="public-gallery-empty">🖼️ Las fotos de la academia aparecerán aquí cuando se carguen desde la galería.</div><?php endif; ?>
        </div>
    </section>

    <section id="contacto" class="public-contact">
        <div><span class="eyebrow">¿LISTO PARA EMPEZAR?</span><h2>Sumate a VILAMIR.</h2><p>Ingresá a la plataforma para consultar las actividades disponibles, registrarte y gestionar tu entrenamiento.</p></div>
        <div class="public-contact-actions"><a class="btn" href="login.html">Ingresar</a><a class="btn public-btn-secondary" href="registrar.html">Crear cuenta</a></div>
    </section>
</main>

<footer class="public-footer-v16">
    <div><strong>🥋 Academia VILAMIR</strong><span>Entrená. Aprendé. Superate.</span></div>
    <div><a href="#disciplinas">Disciplinas</a><a href="#eventos">Eventos</a><a href="#contacto">Contacto</a><a href="login.html">Ingresar</a></div>
    <small>© 2026 Academia VILAMIR · Plataforma de gestión</small>
</footer>
<script src="js/mobile.js"></script>
</body>
</html>
