<?php
    function getAlumnos($curso, $division){
        return json_decode(
            file_get_contents("https://itching-requirement.000webhostapp.com/getAlumnos.php?curso=$curso&division=$division")
        );
    }
    function getAlumno($carnet){
        return json_decode(
            file_get_contents("https://itching-requirement.000webhostapp.com/getAlumno.php?carnet=$carnet")
        );
    };
    function getFoto($carnet){
        return file_get_contents(
            "https://itching-requirement.000webhostapp.com/getFoto.php?carnet=$carnet"
        );
    }
?>