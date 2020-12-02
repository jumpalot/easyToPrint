<?php
    include('DBCon.php');
    $idl = $_POST['idl'];
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, cantidad
            FROM alumno_lista 
            NATURAL JOIN alumnos
            WHERE idLista='$idl'
            ORDER BY Curso ASC, Division ASC, Apellido ASC";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>
