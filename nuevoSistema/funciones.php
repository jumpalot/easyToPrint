<?php
    function getAlumnos($curso, $division){
        return json_decode(
            file_get_contents("https://itching-requirement.000webhostapp.com/getAlumnos.php?curso=$curso&division=$division")
        );
    }
    function getAlumno($tipo,$dato){
        return json_decode(
            file_get_contents("https://itching-requirement.000webhostapp.com/getAlumno.php?$tipo=$dato")
        );
    };
    function getFoto($carnet){
        return file_get_contents(
            "https://itching-requirement.000webhostapp.com/getFoto.php?carnet=$carnet"
        );
    }
?>