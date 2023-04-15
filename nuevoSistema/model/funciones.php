<?php
    
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? "https" : "http")."://{$_SERVER['HTTP_HOST']}".parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url = substr($url, 0, strlen($url)-strlen("/nuevoSistema/"));
    function getAlumnos($curso, $division, $noImp){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumnos.php?curso=$curso&division=$division&noImpresos=$noImp")
        );
    }
    function getAlumnosByCarnet($carnets, $noImp){
        global $url;
        return json_decode(
            file_get_contents("$url/getAlumnos.php?carnets=$carnets&noImpresos=$noImp")
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
?>