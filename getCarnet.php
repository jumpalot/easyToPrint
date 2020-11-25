<?php
    include('DBCon.php');
    $sql = "SELECT Carnet
            FROM alumnos
            WHERE Dni=".$_POST['dni'];
    $aux = array();
    $res = $db->query($sql);
    if ($db->error="") echo $res->fetch_array()[0];
    echo "0";
    mysqli_close($db);
?>