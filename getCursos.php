<?php
    include('DBCon.php');
    $sql="SELECT DISTINCT Curso FROM alumnos ORDER BY Curso ASC";
    $res='';
    foreach($db->query($sql) as $cur)
        $res .= $cur[0].',';
    echo substr($res, 0, -1);
    mysqli_close($db);
?>