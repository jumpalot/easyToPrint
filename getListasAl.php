<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $sql = "SELECT listas.*
            FROM alumno_lista As lal
            NATURAL JOIN listas
            WHERE lal.Carnet=$carnet
            ORDER BY lal.caducidad, listas.caducidad ASC";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    echo $db->error;
    mysqli_close($db);
?>