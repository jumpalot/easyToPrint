<?php
    include('DBCon.php');
    $carnet = (isset($_POST['carnet'])) ? $_POST['carnet'] : $_GET['carnet'];
    $sql = "SELECT Miniatura FROM alumnos WHERE Carnet='$carnet'";
    $aux = array();
    echo $db->query($sql)->fetch_array()[0];
    mysqli_close($db);
?> 