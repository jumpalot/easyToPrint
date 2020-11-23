<?php
    include('DBCon.php');
    $curso = $_POST['curso'];
    $sql="SELECT DISTINCT Division FROM alumnos WHERE Curso='$curso' ORDER BY Division ASC";
    $res='';
    $q = $db->query($sql);
    while ($divi = $q->fetch_assoc())
        $res .= $divi['Division'].',';
    echo substr($res, 0, -1);
    mysqli_close($db);
?>