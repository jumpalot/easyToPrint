<?php
    include('DBCon.php');
    $sql = "UPDATE alumnos 
            SET Impreso = TRUE";
    if(isset($_GET['listcarnets'])){
        $carnets = explode(';', $_GET['listcarnets']);
        $sql .= " WHERE";
        foreach($carnets as $carnet)
            $sql .= " Carnet='$carnet' OR";
        $sql = substr($sql, 0, -3);
    } else {
        $sql.= " WHERE Curso = '".$_GET['curso']."'
            AND Division = '".$_GET['division']."'";
    }
    if (@$_GET['onlyWithPhotos'])
        $sql.= " AND NOT Foto = NULL";
    $db->query($sql);
    echo $db->error;
    mysqli_close($db);
    echo "completado";
?>