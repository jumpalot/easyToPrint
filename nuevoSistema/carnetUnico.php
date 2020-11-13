<?php
    require('header.html');
    require('funciones.php');
    $alumno = getAlumno($_GET['carnet'])[0];
    include('bindAlumno.php');
    $unico='id="only"';
    include('plantilla.php');
    require('footer.html');
?>