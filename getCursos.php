<?php
    include('DBCon.php');
    $sql="SELECT DISTINCT Curso FROM alumnos ORDER BY Curso ASC";
    $res='';
    $q = $db->query($sql);
    while ($cur = $q->fetch_assoc())
        $res .= $cur['Curso'].',';
    echo substr($res, 0, -1);
    mysqli_close($db);
?>