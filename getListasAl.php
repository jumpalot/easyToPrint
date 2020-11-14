<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $sql = "SELECT lal.cantidad, listas.nombre, lal.idLista
            FROM alumno_lista As lal
            INNER JOIN listas 
            ON lal.idLista = listas.idLista
            WHERE lal.Carnet=$carnet
            ORDER BY lal.caducidad, listas.caducidad ASC";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    echo $db->error;
    mysqli_close($db);
?>