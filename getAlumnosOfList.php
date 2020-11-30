<?php
    include('DBCon.php');
    $idl = $_POST['idl'];
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido
            FROM alumno_lista 
            NATURAL JOIN alumnos
            WHERE idLista='$idl";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>
