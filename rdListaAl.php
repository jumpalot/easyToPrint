<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $idl = $_POST['idl'];
    $sql = "UPDATE alumno_lista SET cantidad=cantidad-1 WHERE Carnet='$carnet' AND idLista='$idl'";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
?>