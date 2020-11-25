<?php
    include('DBCon.php');
    $dni = $_REQUEST['dni'];
    $sql = "SELECT Carnet FROM alumnos WHERE Dni='$dni'";
    $res = $db->query($sql);
    if ($db->error="") echo $res->fetch_array(MYSQLI_ASSOC)["Carnet"];
    else echo "0";
    mysqli_close($db);
?>