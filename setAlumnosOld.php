<?php
    $db = new mysqli('localhost','root','usbw','prueba');
    $sql = "INSERT INTO alumnos 
        (carnet, nombre, apellido, sexo, edad, curso) 
        values (
        '".$_POST['carnet']."', 
        '".$_POST['nombre']."', 
        '".$_POST['apellido']."', 
        '".$_POST['sexo']."', 
        '".$_POST['edad']."',
        '".$_POST['curso']."'
        )
    ";
    $db->query($sql);
    mysqli_close($db);
?>