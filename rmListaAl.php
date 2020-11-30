<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $idl = $_POST['idl'];
    $sql = "DELETE FROM alumno_lista WHERE idLista='$idl' AND Carnet='$carnet'";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
?>