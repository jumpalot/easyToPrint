<?php
    
    require 'vendor/autoload.php';
    include('DBCon.php');


    use RebaseData\InputFile\InputFile;
    use RebaseData\Converter\Converter;

    function getArchivo(){
        $nombre = './imports/'.basename($_FILES['base']['name']);
        move_uploaded_file($_FILES['base']['tmp_name'], $nombre);
        return $nombre;
    }
    function getNomApe($row){
        $datos= explode(" ", $row);//recorta el nombre 
        switch (count($datos)){
            case 0:
                $nombre = "desconocido";
                $apellido = "";
            break;
            case 2:
                $nombre = $datos[1];
                $apellido = $datos[0];
            break;
            case 3:
                $nombre = $datos[1]." ".$datos[2];
                $apellido = $datos[0];
            break;
            case 3:
                $nombre = $datos[2]." ".$datos[3];
                $apellido = $datos[0]." ".$datos[1];
            break;
            default:
                $nombre = $datos[0];
                $apellido = "";
        }
        return [$nombre, $apellido];
    }
    function getTurno($row){
        switch($row){
            case "T": $turno=1; break;
            case "V": $turno=2; break;
            default:  $turno=0;
        }
        return $turno;
    }

    $file = getArchivo();
    $inputFile = new InputFile($file);//aqui metes la base de datos a convertir
    $inputFiles = [$inputFile];

    $converter = new Converter();
    $database = $converter->convertToDatabase($inputFiles);
    $table = $database->getTable('alumnos');//aqui llama a la tabla

    foreach ($table->getRowsIterator() as $row) {
        
        [$nombre, $apellido] = getNomApe($row['nombre']);
        
        $turno = getTurno($row['turno']);
        
        //aqui inserta los datos en la db
        $sql = "INSERT INTO alumnos 
                (Carnet, Curso, Division, Dni, Nombre, Apellido, Turno ) 
                VALUES (
                    '".$row['carnet']."', 
                    '".$row['curso']."',
                    '".$row['div']."',
                    '".$row['dni']."',
                    '$nombre', 
                    '$apellido',
                    '$turno'
                )
        ";
        $db->query($sql);
    }
    mysqli_close($db);   //cerramos la conexion con la base de datos
    unlink($file);       //por último, elimino el archivo que me enviaron
    //dni! carnet! nombre! sexo curso! division! turno! año pago impreso fechain horain fechapa horapa telefono
    //nombre apellido dni carnet foto miniatura haslmg curso division idturno
?>
