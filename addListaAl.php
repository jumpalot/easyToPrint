<?php
    include('DBCon.php');
    $carnet = $_POST['carnet'];
    $idl = $_POST['idl'];
    $sql = "INSERT INTO alumno_lista(Carnet, idLista)
<<<<<<< HEAD
            VALUES ('$carnet', '$idl') 
=======
            VALUES ($carnet, $idl) 
>>>>>>> 035c65ee75bc679e6f4c32f1f1cb07800515d0b5
            ON DUPLICATE KEY UPDATE cantidad=cantidad+1";
    echo $db->error;
    mysqli_close($db);
?>