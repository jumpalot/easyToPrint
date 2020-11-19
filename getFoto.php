<?php
    include('DBCon.php');
    $carnet = $_REQUEST['carnet'];
    $sql = "SELECT Miniatura FROM alumnos WHERE Carnet='$carnet'";
    $res = $db->query($sql);
    if ($db->error!="") echo $db->error;
    else echo $res->fetch_array()[0];
    mysqli_close($db);
?> 