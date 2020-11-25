<?php
   
require 'vendor/autoload.php';
include('DBCon.php');


use RebaseData\InputFile\InputFile;
use RebaseData\Converter\Converter;

$inputFile = new InputFile($_FILES['base']);//aqui metes la base de datos a convertir
$inputFiles = [$inputFile];

$converter = new Converter();
$database = $converter->convertToDatabase($inputFiles);
$table = $database->getTable('alumnos');//aqui llama a la tabla

foreach ($table->getRowsIterator() as $row) {
	

        $datos= explode(" ", $row['nombre']);//recorta el nombre 

        

        if ($row['turno']=="T") {//pasa el turno a la idturno de la db del host
            $turno=1;
        }elseif ($row['turno']=="V") {
            $turno=2;
        }else{
            $turno=0;
        }
        
        //aqui inserta los datos en la db
        $sql = "INSERT INTO alumnos 
        (Carnet, Curso, Division, Nombre, Apellido, Dni, Turno ) 
        values (
        '".$row['carnet']."', 
        '".$row['curso']."',
        '".$row['division']."',
        '".$datos[1].$datos[2]."', 
        '".$datos[0]."',
        '".$row['dni']."',
        '".$turno."'
        )
    ";
    $db->query($sql);
    mysqli_close($db);
    
 

    }
    

//dni! carnet! nombre! sexo curso! division! turno! año pago impreso fechain horain fechapa horapa telefono
//nombre apellido dni carnet foto miniatura haslmg curso division idturno
?>
