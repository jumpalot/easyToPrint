<?php
    include('DBCon.php');
    $sql = "SELECT *
            FROM listas
            ORDER BY idLista DESC";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    echo $db->error;
    mysqli_close($db);
?>