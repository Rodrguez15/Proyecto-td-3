<?php
require_once 'config/autenticacion.php'; 
require_once 'config/conexion.php';
$id=(int)($_GET['id']??0);
$q=$conexion->prepare(
    "SELECT c.*,
    CONCAT(a.Nombre,' ',a.Apellido) Alumno,
    COALESCE(s.Nombre,s.Titulo)
     Seminario FROM CERTIFICADO c
      JOIN ALUMNO a ON a.ID_Alumno=c.ID_Alumno 
      LEFT JOIN SEMINARIO s ON 
      s.ID_Seminario=c.ID_Seminario
       WHERE c.ID_Certificado=?");
       $q->execute([$id]);
       $c=$q->fetch();
       if
       (!$c)die('Certificado no encontrado.');
function esc($s)
{$s=str_replace(['\\','(',')'],
['\\\\','\\(','\\)'],
(string)$s);
return $s;
}
$lines=['ACADEMIA VILAMIR','CERTIFICADO DE PARTICIPACIÓN','Se certifica que',
$c['Alumno'],
$c['Titulo'],
$c['Descripcion']
?:'Ha participado satisfactoriamente en la actividad indicada.',
'Fecha de emisión: '.$c['Fecha_emision'],
'Código: '.$c['Codigo']];
$content="BT /F1 24 Tf 150 730 Td (".esc($lines[0]).")
             Tj /F1 18 Tf 0 -55 Td (".esc($lines[1]).")
              Tj /F1 12 Tf 0 -70 Td (".esc($lines[2]).") 
              Tj /F1 22 Tf 0 -40 Td (".esc($lines[3]).")
                Tj /F1 16 Tf 0 -50 Td (".esc($lines[4]).") 
                Tj /F1 11 Tf 0 -35 Td (".esc($lines[5]).")
                 Tj 0 -55 Td (".esc($lines[6]).")
                  Tj 0 -25 Td (".esc($lines[7]).") 
                  Tj ET";
$objects=[];
$objects[]='<< /Type /Catalog /Pages 2 0 R >>';
$objects[]='<< /Type /Pages /Kids [3 0 R] /Count 1 >>';
$objects[]='<< /Type /Page /Parent 2 0 R /MediaBox [0 0 842 595] /Resources << /Font << /F1 4 0 R >> >> /Contents 5 0 R >>';
$objects[]='<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica >>';
$objects[]='<< /Length '.strlen($content).' >>\nstream\n'.
$content.'\nendstream';
$pdf="%PDF-1.4\n";
$offs=[0];
foreach
($objects as $i=>$o)
{$offs[$i+1]=strlen($pdf);
$pdf.=($i+1).' 0 obj\n'.
$o.'\nendobj\n';}
$xref=strlen($pdf);
$pdf.='xref\n0 '
.(count($objects)+1).'\n0000000000 65535 f \n';
for($i=1;$i<=count($objects);$i++)
    $pdf.=sprintf('%010d 00000 n \n',
$offs[$i]);
$pdf.='trailer\n<< /Size '.(count($objects)+1).' /Root 1 0 R >>\nstartxref\n'.
$xref.'\n%%EOF';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="certificado_'.$c['Codigo'].'.pdf"');
echo $pdf;
