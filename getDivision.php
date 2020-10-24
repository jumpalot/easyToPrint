<?php
    include('DBCon.php');
    $cur=$_POST['curso']; $divi=$_POST['division'];
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, hasImg, Dni, Turno 
            FROM alumnos NATURAL JOIN turnos
            WHERE Curso=$cur AND Division=$divi";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>