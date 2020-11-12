<?php
    include('DBCon.php');
    $sql = "UPDATE alumnos SET
                Curso       = '".$_POST['curso']."',
                Division    = '".$_POST['division']."',
                Nombre      = '".$_POST['nombre']."',
                Apellido    = '".$_POST['apellido']."',
                Dni         = '".$_POST['dni']."',
                Turno       = '".$_POST['turno']."'
            WHERE Carnet    = '".$_POST['carnet']."'
    ";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
?>