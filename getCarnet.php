<?php
    include('DBCon.php');
    $sql = "SELECT Carnet
            FROM alumnos
            WHERE Dni=".$_POST['dni'];
    $res = $db->query($sql);
    if ($db->error="") echo $res->fetch_array()["Carnet"];
    else echo "0";
    mysqli_close($db);
?>