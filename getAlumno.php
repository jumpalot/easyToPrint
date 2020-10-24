<?php
    $db = new mysqli('localhost','id13103965_admin','UaZk=JqA5@SkVga~','id13103965_carnets');
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, Sexo, Edad, hasImg, Dni FROM alumnos
            WHERE Dni=".$_GET['dni'];
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>