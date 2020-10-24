<?php
    include('DBCon.php');
    $sql = "INSERT INTO alumnos 
        (Carnet, Curso, Division, Nombre, Apellido, Dni, Turno ) 
        values (
        '".$_POST['carnet']."', 
        '".$_POST['curso']."',
        '".$_POST['division']."',
        '".$_POST['nombre']."', 
        '".$_POST['apellido']."',
        '".$_POST['dni']."',
        '".$_POST['turno']."'
        )
    ";
    $db->query($sql);
    mysqli_close($db);
?>