<?php
    include('DBCon.php');
    $idl = $_POST['idl'];
    $nom = $_POST['nom'];
    $sql = "UPDATE listas 
            SET nombre='$nom'
            WHERE idLista='$idl'";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
?>