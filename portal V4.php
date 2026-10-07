<?php
require_once 'config/autenticacion.php';
if (($_SESSION['usuario_rol'] ?? '') === 'Administrador') { header('Location: admin.php'); exit; }
$nombre = $_SESSION['usuario_nombre'] ?? 'Alumno';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Mi cuenta | VILAMIR</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="account-page">
<header class="navbar">
  <div class="logo">VILAMIR</div>
  <nav>
    <a href="index.php">Inicio</a><a href="clases.php">Clases</a><a href="mis_clases.php">Mis clases</a><a href="horarios.php">Horarios</a><a href="seminarios.php">Seminarios</a><a href="calendario.php">Calendario</a><a class="active" href="portal.php">Mi cuenta</a><a href="logout.php">Cerrar sesión</a>
  </nav>
</header>

<main class="account-shell">
  <section class="account-welcome">
    <div>
      <span class="account-eyebrow">MI CUENTA</span>
      <h1>Hola, <?= htmlspecialchars($nombre) ?> 👋</h1>
      <p>Todo lo importante de tu actividad en VILAMIR, en un solo lugar.</p>
    </div>
    <div class="account-actions">
      <a href="horarios.php" class="account-btn">📅 Mis horarios</a>
      <a href="seminarios.php" class="account-btn account-btn-dark">🎓 Seminarios y eventos</a>
    </div>
  </section>

  <div id="accountMessage" class="account-message" hidden></div>
  <section id="resumenCards" class="account-stats"></section>

  <div class="account-layout">
    <section class="account-panel account-profile-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">PERFIL</span><h2>Mis datos</h2></div><span class="profile-mark">👤</span></div>
      <div id="perfil" class="profile-details"><div class="account-loading">Cargando datos...</div></div>
      <div class="qr-box account-qr"><div><span class="panel-kicker">IDENTIFICACIÓN</span><h3>Mi código QR</h3><p>Podés presentarlo en la academia para identificar tu cuenta.</p></div><div id="qrAlumno"></div></div>
    </section>

    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">ESTADO</span><h2>Resumen de tu actividad</h2></div><span class="profile-mark">📊</span></div>
      <div id="estadoActividad" class="activity-summary"><div class="account-loading">Cargando...</div></div>
    </section>
  </div>

  <div class="account-layout account-layout-wide">
    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">AGENDA</span><h2>Próximas clases</h2></div><a href="horarios.php" class="account-link">Ver horarios →</a></div>
      <div id="proximasClases" class="account-list"></div>
    </section>
    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">AVISOS</span><h2>Notificaciones</h2></div><button class="account-link account-notif-all" type="button" onclick="leerTodasNotificaciones()">Marcar todas como leídas</button></div>
      <div id="notificaciones" class="account-list"></div>
    </section>
  </div>

  <section class="account-panel">
    <div class="account-panel-head"><div><span class="panel-kicker">ENTRENAMIENTO</span><h2>Mis disciplinas</h2><p class="panel-subtitle">Tus actividades y estado actual.</p></div><a href="clases.php" class="account-link">Explorar clases →</a></div>
    <div id="disciplinas" class="account-cards"></div>
  </section>

  <div class="account-layout account-layout-wide">
    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">OPORTUNIDADES</span><h2>Promociones disponibles</h2><p class="panel-subtitle">Beneficios que podés aprovechar actualmente.</p></div></div>
      <div id="promociones" class="account-cards"></div>
    </section>
    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">PRÓXIMAMENTE</span><h2>Próximos eventos</h2><p class="panel-subtitle">Seminarios y actividades que se acercan.</p></div><a href="seminarios.php" class="account-link">Ver actividades →</a></div>
      <div id="proximosEventos" class="account-list"></div>
    </section>
  </div>

  <div class="account-layout account-layout-wide">
    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">FINANZAS</span><h2>Estado de pagos</h2></div></div>
      <div id="resumenPagosAlumno" class="payment-account-summary"></div>
      <div id="pagos" class="account-list"></div>
    </section>
    <section class="account-panel">
      <div class="account-panel-head"><div><span class="panel-kicker">ACTIVIDADES</span><h2>Seminarios y eventos</h2></div><a href="seminarios.php" class="account-link">Ver todos →</a></div>
      <div id="seminarios" class="account-cards"></div>
    </section>
  </div>

  <section class="account-panel">
    <div class="account-panel-head"><div><span class="panel-kicker">HISTORIAL</span><h2>Mi historial</h2><p class="panel-subtitle">Consultá tus pagos, actividades y asistencia registrada.</p></div></div>
    <div class="account-history-grid">
      <div><h3>💳 Pagos</h3><div id="historialPagos" class="account-list"></div></div>
      <div><h3>🎓 Actividades</h3><div id="historialActividades" class="account-list"></div></div>
      <div><h3>🥋 Asistencia</h3><div id="historialAsistencia" class="account-list"></div></div>
    </div>
  </section>

  <section class="account-panel">
    <div class="account-panel-head"><div><span class="panel-kicker">DOCUMENTOS</span><h2>Mis certificados</h2><p class="panel-subtitle">Certificados de participación y actividades realizadas.</p></div></div>
    <div id="certificadosAlumno" class="account-cards"></div>
  </section>
</main>
<footer>© 2026 MMA Systems · VILAMIR</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="js/portal.js"></script>
    <script src="js/mobile.js"></script>
</body>
</html>
