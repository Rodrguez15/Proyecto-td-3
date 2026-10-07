<?php
require_once 'config/admin.php';
require_once 'config/conexion.php';

/*
 * Reportes robustos: cada bloque es independiente para que una tabla
 * opcional que todavía no exista no deje inutilizable toda la página.
 */
function reporteScalar(PDO $db, string $sql, $default = 0) {
    try { return $db->query($sql)->fetchColumn(); } catch (Throwable $e) { return $default; }
}
function reporteRows(PDO $db, string $sql): array {
    try { return $db->query($sql)->fetchAll(); } catch (Throwable $e) { return []; }
}

$anio = isset($_GET['anio']) ? max(2020, min(2100, (int)$_GET['anio'])) : (int)date('Y');
$mes = isset($_GET['mes']) ? (int)$_GET['mes'] : 0;
if ($mes < 0 || $mes > 12) $mes = 0;
$periodoLabel = $mes ? date('F', mktime(0,0,0,$mes,1,$anio)) . ' ' . $anio : 'Todo ' . $anio;
$fechaPagoFiltro = $mes ? "YEAR(Fecha)={$anio} AND MONTH(Fecha)={$mes}" : "YEAR(Fecha)={$anio}";
$fechaAsistenciaFiltro = $mes ? "YEAR(Fecha)={$anio} AND MONTH(Fecha)={$mes}" : "YEAR(Fecha)={$anio}";
$fechaInscripcionFiltro = $mes ? "YEAR(Fecha_ins)={$anio} AND MONTH(Fecha_ins)={$mes}" : "YEAR(Fecha_ins)={$anio}";

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    $filename = 'vilamir_reporte_' . $anio . ($mes ? '_mes_' . str_pad((string)$mes,2,'0',STR_PAD_LEFT) : '') . '.csv';
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    $out = fopen('php://output', 'w');
    fprintf($out, "\xEF\xBB\xBF");
    fputcsv($out, ['REPORTE VILAMIR', $periodoLabel], ';');
    fputcsv($out, ['Indicador','Valor'], ';');
    $csvRows = [
        ['Alumnos', (int)reporteScalar($conexion,'SELECT COUNT(*) FROM ALUMNO')],
        ['Profesores', (int)reporteScalar($conexion,'SELECT COUNT(*) FROM PROFESOR')],
        ['Disciplinas', (int)reporteScalar($conexion,'SELECT COUNT(*) FROM DISCIPLINA')],
        ['Grupos', (int)reporteScalar($conexion,'SELECT COUNT(*) FROM GRUPO')],
        ['Pagos pendientes', (int)reporteScalar($conexion,"SELECT COUNT(*) FROM PAGO WHERE Estado='Pendiente'")],
        ['Pagos vencidos', (int)reporteScalar($conexion,"SELECT COUNT(*) FROM PAGO WHERE Estado='Pendiente' AND Fecha_vencimiento IS NOT NULL AND Fecha_vencimiento < CURDATE()")],
        ['Importe pendiente', (float)reporteScalar($conexion,"SELECT COALESCE(SUM(Importe),0) FROM PAGO WHERE Estado='Pendiente'",0)],
        ['Importe cobrado en el período', (float)reporteScalar($conexion,"SELECT COALESCE(SUM(Importe),0) FROM PAGO WHERE Estado='Pagado' AND YEAR(Fecha)=".$anio.($mes?" AND MONTH(Fecha)=".$mes:""),0)],
    ];
    foreach ($csvRows as $row) fputcsv($out, $row, ';');
    fclose($out); exit;
}

$alumnos = (int) reporteScalar($conexion, 'SELECT COUNT(*) FROM ALUMNO');
$disciplinas = (int) reporteScalar($conexion, 'SELECT COUNT(*) FROM DISCIPLINA');
$grupos = (int) reporteScalar($conexion, 'SELECT COUNT(*) FROM GRUPO');
$profesores = (int) reporteScalar($conexion, 'SELECT COUNT(*) FROM PROFESOR');
$seminarios = (int) reporteScalar($conexion, 'SELECT COUNT(*) FROM SEMINARIO WHERE Fecha >= CURDATE()');

$pendientes = (float) reporteScalar($conexion, "SELECT COALESCE(SUM(Importe),0) FROM PAGO WHERE Estado='Pendiente'");
$pagado = (float) reporteScalar($conexion, "SELECT COALESCE(SUM(Importe),0) FROM PAGO WHERE Estado='Pagado'");
$ingresosMes = (float) reporteScalar($conexion, "SELECT COALESCE(SUM(Importe),0) FROM PAGO WHERE Estado='Pagado' AND $fechaPagoFiltro");
$pagosVencidos = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM PAGO WHERE Estado='Pendiente' AND Fecha_vencimiento IS NOT NULL AND Fecha_vencimiento < CURDATE()");
$importeVencido = (float) reporteScalar($conexion, "SELECT COALESCE(SUM(Importe),0) FROM PAGO WHERE Estado='Pendiente' AND Fecha_vencimiento IS NOT NULL AND Fecha_vencimiento < CURDATE()");
$pagosPendientes = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM PAGO WHERE Estado='Pendiente'");
$pagosPagados = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM PAGO WHERE Estado='Pagado'");

$asistenciaTotal = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM ASISTENCIA WHERE $fechaAsistenciaFiltro");
$asistenciaPresente = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM ASISTENCIA WHERE Estado IN ('Presente','Justificado') AND $fechaAsistenciaFiltro");
$porcentajeAsistencia = $asistenciaTotal ? round(($asistenciaPresente / $asistenciaTotal) * 100) : 0;

$inscripcionesSeminarios = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM INSCRIPCION_SEMINARIO WHERE Estado='Activa'");
$espera = (int) reporteScalar($conexion, "SELECT COUNT(*) FROM LISTA_ESPERA WHERE Estado='En espera'");
$certificados = (int) reporteScalar($conexion, 'SELECT COUNT(*) FROM CERTIFICADO');

$topSeminarios = reporteRows($conexion,
    "SELECT COALESCE(NULLIF(s.Nombre,''),s.Titulo) AS Nombre,
            COUNT(i.ID_Ins_seminario) AS Inscritos
     FROM SEMINARIO s
     LEFT JOIN INSCRIPCION_SEMINARIO i ON i.ID_Seminario=s.ID_Seminario AND i.Estado='Activa'
     GROUP BY s.ID_Seminario,s.Nombre,s.Titulo
     ORDER BY Inscritos DESC, s.Fecha DESC LIMIT 5");

$top = reporteRows($conexion,
    "SELECT d.Nombre, COUNT(i.ID_Ins_disciplina) AS Inscritos
     FROM DISCIPLINA d
     LEFT JOIN INSCRIPCION_DISCIPLINA i ON i.ID_Disciplina=d.ID_Disciplina AND i.Estado='Activa'
     GROUP BY d.ID_Disciplina,d.Nombre
     ORDER BY Inscritos DESC,d.Nombre LIMIT 10");

$recent = reporteRows($conexion,
    "SELECT CONCAT(a.Nombre,' ',a.Apellido) AS Alumno,
            d.Nombre AS Disciplina,i.Fecha_ins,i.Estado
     FROM INSCRIPCION_DISCIPLINA i
     INNER JOIN ALUMNO a ON a.ID_Alumno=i.ID_Alumno
     INNER JOIN DISCIPLINA d ON d.ID_Disciplina=i.ID_Disciplina
     WHERE $fechaInscripcionFiltro ORDER BY i.Fecha_ins DESC LIMIT 10");

$mensual = reporteRows($conexion,
    "SELECT MONTH(Fecha) AS Mes, COALESCE(SUM(CASE WHEN Estado='Pagado' THEN Importe ELSE 0 END),0) AS Cobrado,
            COALESCE(SUM(CASE WHEN Estado='Pendiente' THEN Importe ELSE 0 END),0) AS Pendiente
     FROM PAGO WHERE YEAR(Fecha)=" . $anio . " GROUP BY MONTH(Fecha) ORDER BY MONTH(Fecha)");
$mensualMap = [];
foreach ($mensual as $r) $mensualMap[(int)$r['Mes']] = ['Cobrado'=>(float)$r['Cobrado'], 'Pendiente'=>(float)$r['Pendiente']];
$maxIngreso = 1; foreach ($mensualMap as $r) $maxIngreso=max($maxIngreso,$r['Cobrado']);

$ocupacion = reporteRows($conexion,
    "SELECT g.Nombre,g.Cupo_maximo,COUNT(CASE WHEN iga.Estado='Activa' THEN iga.ID_Inscripcion END) AS Inscritos,
            d.Nombre AS Disciplina
     FROM GRUPO g LEFT JOIN DISCIPLINA d ON d.ID_Disciplina=g.ID_Disciplina
     LEFT JOIN INSCRIPCION_GRUPO_ALUMNO iga ON iga.ID_Grupo=g.ID_Grupo
     GROUP BY g.ID_Grupo,g.Nombre,g.Cupo_maximo,d.Nombre ORDER BY Inscritos DESC,g.Nombre LIMIT 10");

$asistenciaGrupos = reporteRows($conexion,
    "SELECT g.Nombre, COUNT(a.ID_Asistencia) AS Total,
            SUM(CASE WHEN a.Estado IN ('Presente','Justificado') THEN 1 ELSE 0 END) AS Presentes
     FROM GRUPO g LEFT JOIN ASISTENCIA a ON a.ID_Grupo=g.ID_Grupo
     GROUP BY g.ID_Grupo,g.Nombre ORDER BY Total DESC,g.Nombre LIMIT 10");
foreach ($asistenciaGrupos as &$ag) $ag['Porcentaje'] = ((int)$ag['Total']) ? round(((int)$ag['Presentes']/(int)$ag['Total'])*100) : 0;
unset($ag);

$nombre = $_SESSION['usuario_nombre'] ?? 'Administrador';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Reportes | VILAMIR</title><link rel="stylesheet" href="css/style.css">
</head>
<body class="reports-page">
<header class="navbar"><div class="logo">🥋 VILAMIR</div><nav>
<a href="index.php">Inicio</a><a href="admin.php">Administración</a><a class="active" href="reportes.php">Reportes</a><a href="logout.php">Cerrar sesión</a>
</nav></header>
<main class="reports-wrap">
<section class="reports-head"><div><span class="eyebrow">PANEL ADMINISTRATIVO</span><h1>Reportes y estadísticas</h1><p>Resumen de la actividad de la academia.</p></div><button class="report-print" onclick="window.print()">🖨 Imprimir</button></section>
<form class="report-filters" method="get">
<label>Año <select name="anio"><option value="<?=$anio?>"><?=$anio?></option><?php for($y=(int)date('Y')-3;$y<=(int)date('Y')+1;$y++): if($y===$anio) continue; ?><option value="<?=$y?>"><?=$y?></option><?php endfor; ?></select></label>
<label>Mes <select name="mes"><option value="0">Todo el año</option><?php $meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']; foreach($meses as $i=>$m): ?><option value="<?=($i+1)?>" <?=$mes===($i+1)?'selected':''?>><?=$m?></option><?php endforeach; ?></select></label>
<button type="submit">🔎 Aplicar filtros</button><a class="report-export" href="?anio=<?=$anio?>&mes=<?=$mes?>&export=csv">⬇️ Exportar CSV</a>
</form>
<section class="report-stats">
<?php foreach ([
 ['👥','Alumnos',$alumnos,'personas'],['🥋','Disciplinas',$disciplinas,'activas'],['👥','Grupos',$grupos,'grupos'],['👨‍🏫','Profesores',$profesores,'profesores'],['🎓','Próximos eventos',$seminarios,'eventos'],['📅','Inscripciones',$inscripcionesSeminarios,'seminarios'],['📋','Lista de espera',$espera,'personas'],['⚠️','Pagos vencidos',$pagosVencidos,'pendientes'],['⏳','Pagos pendientes',$pagosPendientes,'registros'],['🏅','Certificados',$certificados,'emitidos'],
] as $s): ?><article class="report-stat"><span class="report-icon"><?=$s[0]?></span><div><small><?=$s[1]?></small><strong><?=htmlspecialchars((string)$s[2])?></strong><em><?=$s[3]?></em></div></article><?php endforeach; ?>
</section>
<section class="report-finance"><article><span>💰 Pendiente</span><strong>$<?=number_format($pendientes,2,',','.')?></strong></article><article><span>✅ Total cobrado</span><strong>$<?=number_format($pagado,2,',','.')?></strong></article><article><span>📈 Ingresos del mes</span><strong>$<?=number_format($ingresosMes,2,',','.')?></strong></article><article><span>⚠️ Importe vencido</span><strong>$<?=number_format($importeVencido,2,',','.')?></strong></article><article><span>🟢 Asistencia</span><strong><?=$porcentajeAsistencia?>%</strong></article></section>
<section class="report-grid report-advanced">
<article class="report-panel report-wide"><h2>📈 Evolución de ingresos — <?=htmlspecialchars($anio)?></h2><div class="monthly-chart"><?php $labels=['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']; for($i=1;$i<=12;$i++): $r=$mensualMap[$i]??['Cobrado'=>0,'Pendiente'=>0]; $pct=$maxIngreso?round(($r['Cobrado']/$maxIngreso)*100):0; ?><div class="month-column"><div class="month-value">$<?=number_format($r['Cobrado'],0,',','.')?></div><div class="month-track"><div class="month-fill" style="height:<?=$pct?>%"></div></div><strong><?=$labels[$i-1]?></strong></div><?php endfor; ?></div></article>
<article class="report-panel"><h2>👥 Ocupación de grupos</h2><div class="report-table-list"><?php if(!$ocupacion): ?><p class="empty-report">No hay grupos.</p><?php else: foreach($ocupacion as $g): $c=max(1,(int)$g['Cupo_maximo']); $v=(int)$g['Inscritos']; $pct=min(100,round($v/$c*100)); ?><div class="mini-report-row"><div><strong><?=htmlspecialchars($g['Nombre'])?></strong><small><?=htmlspecialchars($g['Disciplina']??'Sin disciplina')?></small></div><span><?=$v?>/<?=$g['Cupo_maximo']?></span><div class="mini-track"><i style="width:<?=$pct?>%"></i></div></div><?php endforeach; endif; ?></div></article>
<article class="report-panel"><h2>🟢 Asistencia por grupo</h2><div class="report-table-list"><?php if(!$asistenciaGrupos): ?><p class="empty-report">No hay registros de asistencia.</p><?php else: foreach($asistenciaGrupos as $g): ?><div class="mini-report-row"><div><strong><?=htmlspecialchars($g['Nombre'])?></strong><small><?=$g['Total']?> registros</small></div><span><?=$g['Porcentaje']?>%</span><div class="mini-track"><i style="width:<?=min(100,(int)$g['Porcentaje'])?>%"></i></div></div><?php endforeach; endif; ?></div></article>
</section>
<section class="report-grid">
<article class="report-panel"><h2>📊 Disciplinas con mayor actividad</h2><div class="report-bars"><?php $maxTop=1; foreach($top as $r){$maxTop=max($maxTop,(int)$r['Inscritos']);} if(!$top): ?><p class="empty-report">Todavía no hay datos.</p><?php else: foreach($top as $r): $v=(int)$r['Inscritos']; $pct=$maxTop?round($v/$maxTop*100):0; ?><div class="report-bar-row"><span class="report-bar-label"><?=htmlspecialchars($r['Nombre'])?></span><div class="report-bar-track"><div class="report-bar-fill" style="width:<?=$pct?>%"></div></div><span class="report-bar-value"><?=$v?></span></div><?php endforeach; endif; ?></div></article>
<article class="report-panel"><h2>🎓 Eventos con más inscripciones</h2><div class="report-bars"><?php $maxSem=1; foreach($topSeminarios as $r){$maxSem=max($maxSem,(int)$r['Inscritos']);} if(!$topSeminarios): ?><p class="empty-report">Todavía no hay datos.</p><?php else: foreach($topSeminarios as $r): $v=(int)$r['Inscritos']; $pct=$maxSem?round($v/$maxSem*100):0; ?><div class="report-bar-row"><span class="report-bar-label"><?=htmlspecialchars($r['Nombre']?:'Sin nombre')?></span><div class="report-bar-track"><div class="report-bar-fill" style="width:<?=$pct?>%"></div></div><span class="report-bar-value"><?=$v?></span></div><?php endforeach; endif; ?></div></article>
<article class="report-panel report-wide"><h2>📝 Últimas inscripciones</h2><div class="table-scroll"><table><thead><tr><th>Alumno</th><th>Disciplina</th><th>Fecha</th><th>Estado</th></tr></thead><tbody><?php if(!$recent): ?><tr><td colspan="4">No hay inscripciones recientes.</td></tr><?php else: foreach($recent as $r): ?><tr><td><?=htmlspecialchars($r['Alumno'])?></td><td><?=htmlspecialchars($r['Disciplina'])?></td><td><?=htmlspecialchars($r['Fecha_ins'])?></td><td><span class="status-pill"><?=htmlspecialchars($r['Estado'])?></span></td></tr><?php endforeach; endif; ?></tbody></table></div></article>
</section>
</main><footer>© 2026 Academia VILAMIR</footer>
    <script src="js/mobile.js"></script>
</body></html>
