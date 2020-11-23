<?php
    include('DBCon.php');
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, hasImg, Dni, Turno 
            FROM alumnos NATURAL JOIN turnos
            WHERE Carnet=".$_GET['carnet'];
            if(isset($_GET['curso']){
                $curso=$_GET['curso'];
                $sql.=" WHERE Curso='$curso'";
                if(isset($_GET['division']){
                    $division=$_GET['division'];
                    $sql.=" AND Curso='$division'"
                }
            }      
            else if(isset($_GET['division']){
                    $division$_GET['division'];
                    $sql.=" WHERE Division='$division'"
                    }
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>