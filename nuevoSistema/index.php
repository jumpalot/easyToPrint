<?php
    require('../vendor/autoload.php');
    
    require('funciones.php');
    switch(@$_GET['page']){
        case 'list':
            $alumnos = getAlumnos($_GET['curso'], $_GET['division']);
            include('view/simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    include('bindAlumno.php');
                    include('plantilla.php');
                }
            }
            include('js/autoprint.html');
            break;
        case 'reverse':
            $alumnos = getAlumnos($_GET['curso'], $_GET['division']);
            include('view/simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    $carnet=$alumno->Carnet;
                    include('parteAtras.php');
                }
            }
            include('js/autoprint.html');
            break;  
        default:
            include('view/header.html');
            include('view/main.html');
            include('view/importador.html');
    }
    require('view/footer.html');
?>