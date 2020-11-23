<?php
    include('DBCon.php');
    $curso = $_POST['curso'];
    $sql="SELECT DISTINCT Division FROM alumnos WHERE Curso='$curso' ORDER BY Division ASC";
    $res='';
    foreach($db->query($sql) as $cur)
        $res .= $cur[0].',';
    echo substr($res, 0, -1);
    mysqli_close($db);
?>