<?php
   /* include('DBCon.php');
    $sql = "SELECT Carnet, Curso, Division, Nombre, Apellido, hasImg, Dni, Turno 
            FROM alumnos NATURAL JOIN turnos";
    $aux = array();
    foreach($db->query($sql) as $alumno)
        array_push($aux, $alumno);
    echo json_encode($aux);
    mysqli_close($db);*/
use RebaseData\InputFile\InputFile;
use RebaseData\Converter\Converter;

$inputFile = new InputFile('biblioteca2.mdb');
$inputFiles = [$inputFile];

$converter = new Converter();
$database = $converter->convertToDatabase($inputFiles);
$table = $database->getTable('alumnos');

foreach ($table->getColumns() as $column) {
    echo "Got column: ".$column->getName()."\n";
}
?>
