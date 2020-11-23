<?php
    require('../vendor/autoload.php');
    
    require('funciones.php');
    switch(@$_GET['page']){
        case 'list':
            $alumnos = getAlumnos($_GET['curso'], $_GET['division']);
            include('simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    include('bindAlumno.php');
                    include('plantilla.php');
                }
            }
            include('autoprint.html');
            break;
        case 'reverse':
            $alumnos = getAlumnos($_GET['curso'], $_GET['division']);
            include('simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    $carnet=$alumno->Carnet;
                    include('parteAtras.php');
                }
            }
            include('autoprint.html');
            break;  
        default:
            include('header.html');
            include('main.php');
            include('importador.html');
    }
    require('footer.html');
?>