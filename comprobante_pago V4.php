<?php
require_once 'config/sesion.php';

if (!isset($_SESSION['usuario_id'])) {
    http_response_code(401);
    exit('Sesión no disponible.');
}
require_once 'config/conexion.php';

$id = max(0, (int)($_GET['id'] ?? 0));
if ($id <= 0) { http_response_code(400); exit('Comprobante no válido.'); }

$rol = trim((string)($_SESSION['usuario_rol'] ?? ''));
if (strcasecmp($rol, 'administrador') === 0) { $rol = 'Administrador'; }
elseif (strcasecmp($rol, 'alumno') === 0) { $rol = 'Alumno'; }
elseif (strcasecmp($rol, 'profesor') === 0) { $rol = 'Profesor'; }
$q = $conexion->prepare('SELECT p.*,
 a.Nombre, a.Apellido, u.Email 
 FROM PAGO p JOIN ALUMNO a ON a.ID_Alumno=p.ID_Alumno 
 LEFT JOIN USUARIO u ON u.ID_Usuario=a.ID_Usuario WHERE p.ID_Pago=? LIMIT 1');
$q->execute([$id]);
$pago = $q->fetch();
if (!$pago) { http_response_code(404); exit('Pago no encontrado.'); }

if (strcasecmp($rol, 'Administrador') !== 0) {
    $q = $conexion->prepare('SELECT a.ID_Alumno FROM ALUMNO a WHERE a.ID_Usuario=? LIMIT 1');
    $q->execute([(int)($_SESSION['usuario_id'] ?? 0)]);
    $alumno = (int)$q->fetchColumn();
    if (!$alumno || $alumno !== (int)$pago['ID_Alumno']) { http_response_code(403); exit('No tienes permiso para ver este comprobante.'); }
}

$estado = trim((string)$pago['Estado']);
if (strcasecmp($estado,'Pendiente')===0 && !empty($pago['Fecha_vencimiento']) && $pago['Fecha_vencimiento'] < date('Y-m-d')) $estado='Vencido';
$fecha = $pago['Fecha'] ? date('d/m/Y', strtotime($pago['Fecha'])) : '—';
$venc = !empty($pago['Fecha_vencimiento']) ? date('d/m/Y', strtotime($pago['Fecha_vencimiento'])) : '—';
$importe = number_format((float)$pago['Importe'], 2, ',', '.');
$metodo = trim((string)($pago['Metodo_pago'] ?? ''));
$tipo = trim((string)($pago['Tipo'] ?? ''));
$estadoClase = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $estado));
?>
<!DOCTYPE html>
<html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>Comprobante #<?= (int)$pago['ID_Pago'] ?> | VILAMIR</title><link rel="stylesheet" href="css/style.css"></head>
<body class="payment-receipt-page">
<main class="payment-receipt">
  <div class="receipt-top">
    <div class="receipt-brand"><span class="receipt-brand-mark">🥋</span><div><strong>ACADEMIA VILAMIR</strong><span>Comprobante oficial de pago</span></div></div>
    <button type="button" class="account-btn" onclick="window.print()">🖨️ Imprimir</button>
  </div>
  <div class="receipt-heading"><span class="account-eyebrow">REGISTRO DE PAGO</span><h1>Comprobante #<?= (int)$pago['ID_Pago'] ?></h1><p>Documento generado desde el sistema de gestión de Academia VILAMIR.</p></div>
  <section class="receipt-card">
    <div class="receipt-status"><span>Estado</span><b class="receipt-state receipt-state-<?= htmlspecialchars($estadoClase) ?>"><?= htmlspecialchars($estado) ?></b></div>
    <div class="receipt-amount"><small>Importe</small><strong>$<?= $importe ?></strong></div>
    <div class="receipt-grid">
      <div><span>Alumno</span><b><?= htmlspecialchars($pago['Nombre'].' '.$pago['Apellido']) ?></b></div>
      <div><span>Correo</span><b><?= htmlspecialchars($pago['Email'] ?: 'No informado') ?></b></div>
      <div><span>Concepto</span><b><?= htmlspecialchars($tipo ?: 'Pago') ?></b></div>
      <div><span>Fecha de pago</span><b><?= $fecha ?></b></div>
      <div><span>Vencimiento</span><b><?= $venc ?></b></div>
      <div><span>Método</span><b><?= htmlspecialchars($metodo ?: 'No informado') ?></b></div>
      <div><span>ID de pago</span><b>#<?= (int)$pago['ID_Pago'] ?></b></div>
    </div>
    <div class="receipt-total-line"><span>Total registrado</span><strong>$<?= $importe ?></strong></div>
    <p class="receipt-note">Este comprobante corresponde al registro de pago almacenado en el sistema de Academia VILAMIR. Conservá el número de comprobante para futuras consultas.</p>
  </section>
</main>
</body></html>
