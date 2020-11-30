<?php
    include('DBCon.php');
    $nom = $_POST['nom'];
    $sql = "INSERT INTO listas (nombre) VALUES ('$nom')";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
?>