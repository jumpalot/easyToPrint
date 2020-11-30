<?php
    $url = "http://mattprofe.com.ar:81/alumno/3635/TESIS";
    function getAlumnos($curso, $division){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumnos.php?curso=$curso&division=$division")
        );
    }
    function getAlumno($carnet){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumno.php?carnet=$carnet")
        );
    };
    function getFoto($carnet){
        global $url;
        return file_get_contents(
            "$url/getFoto.php?carnet=$carnet"
        );
    }
?>