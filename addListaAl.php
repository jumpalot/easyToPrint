<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $idl = $_POST['idl'];
    $sql = "INSERT INTO alumno_lista(Carnet, idLista)
            VALUES ($carnet, $idl) 
            ON DUPLICATE KEY UPDATE cantidad=cantidad+1";
    echo $db->error;
    mysqli_close($db);
?>