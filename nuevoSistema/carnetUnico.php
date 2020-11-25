<?php
    require('simpleheader.html');
    require('funciones.php');
    if(isset($_GET['carnet']))
        $alumno = getAlumno('carnet', $_GET['carnet'])[0];
    else
        $alumno = getAlumno('dni', $_GET['dni'])[0];
    include('bindAlumno.php');
    $unico='id="only"';
    include('plantilla.php');
    require('footer.html');
?>