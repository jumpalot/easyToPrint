<?php
    include('DBCon.php');
    $where =    (isset($_GET['carnet']))?
                "Carnet='".$_GET['carnet']."'":
                "Dni='".$_GET['dni']."'";
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, hasImg, Dni, Turno 
            FROM alumnos NATURAL JOIN turnos
            WHERE $where";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>