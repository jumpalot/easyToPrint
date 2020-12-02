<?php
    include('DBCon.php');
    $carnet = $_REQUEST['carnet'];
    $foto = (@$_GET['original'])?"Foto":"Miniatura";
    $sql = "SELECT $foto FROM alumnos WHERE Carnet='$carnet'";
    $res = $db->query($sql);
    if ($db->error!="") echo $db->error;
    else echo $res->fetch_array()[0];
    mysqli_close($db);
?> 