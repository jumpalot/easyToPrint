<?php
    include('DBCon.php');
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, Sexo, Edad, hasImg, Dni FROM alumnos";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>