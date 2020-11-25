<?php
    require('view/simpleheader.html');
    require('model/funciones.php');
    $alumno = getAlumno($_GET['carnet'])[0];
    include('model/bindAlumno.php');
    $unico='id="only"';
    include('tpl/plantilla.php');
    require('view/footer.html');
?>