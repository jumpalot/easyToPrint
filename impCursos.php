<?php
    require('vendor/autoload.php');
    require('DBCon.php');
        
    use RebaseData\InputFile\InputFile;
    use RebaseData\Converter\Converter;

    function getArchivo(){
        $nombre = basename($_FILES['base']['name']);
        move_uploaded_file($_FILES['base']['tmp_name'], $nombre);
        return $nombre;
    }
    function getDB($nom){
        $inputFiles = [new InputFile($nom)];
        $converter = new Converter();
        return $converter->convertToDatabase($inputFiles);
    }
    function getEspecialidades($tcur){
        $esp = array();
        $id = 0;
        foreach ($tcur->getRowsIterator() as $cur)                      
            if(!isset($esp[ $cur["esp"] ]))
                $esp[ $cur["esp"] ] = $id++;                            
        return $esp;
    }
    function insertEspecialidades($especialidades){
        global $db;
        $sql = "INSERT INTO especialidades(idEspecialidad, nombre) VALUES";
        foreach($especialidades as $nom => $id)
            $sql .= " ('$id', '$nom'),";
        $sql = substr($sql, 0, -1);
        $sql .= " ON DUPLICATE KEY UPDATE nombre=VALUES(nombre)";
        $db->query($sql);
        echo $db->error.'\n';
    }
    function insertCursos($cursos, $especialidades){
        global $db;
        $sql = "INSERT INTO cursos(curso, division, idEspecialidad) VALUES";
        foreach($cursos->getRowsIterator() as $curso)
            $sql .= " ('"
                .$curso["curso"]                 ."', '"
                .$curso["div"]                   ."', '"
                .$especialidades[ $curso["esp"] ]."'),";
        $sql = substr($sql, 0, -1);
        $sql .= " ON DUPLICATE KEY UPDATE idEspecialidad=VALUES(idEspecialidad)";
        $db->query($sql);
        echo $db->error.'\n';
    }

    
    $nom = getArchivo();                                                //recibo el archivo de access por POST
    $impdb = getDB($nom);                                               //lo convierto a un objeto php
    $tcursos = $impdb->getTable('cursos');                              //selecciono la tabla de cursos          

    $especialidades = getEspecialidades($tcursos);                      //recibo una lista de especialidades
    insertEspecialidades($especialidades);                              //y las inserto en la base mysql
    insertCursos($tcursos, $especialidades);                            //luego inserto los cursos usando esas ids

    unlink($nom);                                                       //por último, elimino el archivo que me enviaron
?>