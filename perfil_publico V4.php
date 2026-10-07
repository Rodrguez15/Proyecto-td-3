<?php require_once 'config/conexion.php';
 $codigo=trim($_GET['codigo']??'');
 $q=$conexion->prepare(
    "SELECT a.Nombre,a.Apellido,a.Codigo_qr 
    FROM ALUMNO a 
    WHERE a.Codigo_qr=?");
    $q->execute([$codigo]);
    $a=$q->fetch();
    if
    (!$a)die('Alumno no encontrado.');
    $n->execute([$codigo]);
    ?>
    <!doctype html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <title>Perfil VILAMIR</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body class="public-page">
            <main class="public-profile">
                <div class="profile-avatar">🥋</div>
                <h1><?=
                htmlspecialchars($a['Nombre'].' '.$a['Apellido']) 
                ?>
                </h1>
                <p>Alumno de Academia VILAMIR</p>
                <h2>Alumno de VILAMIR</h2>
                <p>Perfil público de identificación de la Academia VILAMIR.</p>
                <p class="small">Código de identificación: <?=
                htmlspecialchars($a['Codigo_qr'])
                ?>
                </p>
            </main>
            <script src="js/mobile.js"></script>
</body>
    </html>