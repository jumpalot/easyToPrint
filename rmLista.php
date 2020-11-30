<?php
    include('DBCon.php');
    $idl = $_POST['idl'];
    $sql = "DELETE FROM listas WHERE idLista='$idl'";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
?>