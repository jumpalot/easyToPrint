<?php
    $archiURL=fopen("direccion.txt","r");
    $url = fgets($archiURL);
    function getAlumnos($curso, $division){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumnos.php?curso=$curso&division=$division")
        );
    }
    function getAlumnosByCarnet($carnets){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumnos.php?carnets=$carnets")
        );
    }
    function getAlumno($carnet){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumno.php?carnet=$carnet")
        );
    };
    function getFoto($carnet, $original){
        global $url;
        return file_get_contents(
            "$url/getFoto.php?carnet=$carnet&original=$original"
        );
    }

    fclose($archiURL);
?>