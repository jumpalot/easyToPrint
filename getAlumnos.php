<?php
    include('DBCon.php');
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, hasImg, Dni, Turno 
            FROM alumnos NATURAL JOIN turnos";
    if(isset($_GET['curso']) && $_GET['curso']!="0" ){
        $curso=$_GET['curso'];
        $sql.=" WHERE Curso='$curso'";
        if(isset($_GET['division']) && $_GET['division']!="0"){
            $division=$_GET['division'];
            $sql.=" AND Division='$division'";
        }
    } else if(isset($_GET['division']) && $_GET['division']!="0"){
        $division=$_GET['division'];
        $sql.=" WHERE Division='$division'";
    } else if(isset($_GET['listcarnets'])){
        $carnets = explode(';', $_GET['listcarnets']);
        $sql .= " WHERE";
        foreach($carnets as $carnet)
            $sql .= " Carnet='$carnet' OR";
        $sql = substr($sql, 0, -3);
    }
    $sql .= " ORDER BY Curso ASC, Division ASC, hasImg ASC, Apellido ASC";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);
?>
