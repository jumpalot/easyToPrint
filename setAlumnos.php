<?php
    include('DBCon.php');
    $sql = "INSERT INTO alumnos 
        (Carnet, Nombre, Apellido, Sexo, Edad, Curso, Division, Dni, FechaNac) 
        values (
        '".$_POST['carnet']."', 
        '".$_POST['nombre']."', 
        '".$_POST['apellido']."', 
        '".$_POST['sexo']."', 
        '".$_POST['edad']."',
        '".$_POST['curso']."',
        '".$_POST['division']."',
        '".$_POST['dni']."',
        '".$_POST['fn']."'
        )
    ";
    $db->query($sql);
    mysqli_close($db);
?>