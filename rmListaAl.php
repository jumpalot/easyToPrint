<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $idl = $_POST['idl'];
    $sql = "DELETE FROM alumno_lista WHERE idLista=$idl AND Carnet=$carnet AND cantidad=1;
    INSERT INTO alumno_lista(Carnet, idLista)
            VALUES ($carnet, $idl) 
            ON DUPLICATE KEY cantidad=cantidad+1";
    echo $db->error;
    mysqli_close($db);
?>