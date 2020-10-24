<?php
    function getAlumnos(){
        return json_decode(
            file_get_contents("https://itching-requirement.000webhostapp.com/getAlumnos.php")
        );
    }
    function getAlumno($dni){
        return json_decode(
            file_get_contents("https://itching-requirement.000webhostapp.com/getAlumno.php?dni=$dni")
        );
    };
    function getFoto($carnet){
        return file_get_contents(
            "https://itching-requirement.000webhostapp.com/getFoto.php?carnet=$carnet"
        );
    }
?>