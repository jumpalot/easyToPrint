<?php
    require('../vendor/autoload.php');
    
    require('funciones.php');
    $alumnos = getAlumnos();
    switch(@$_GET['page']){
        case 'list':
            include('simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    include('bindAlumno.php');
                    include('plantilla.php');
                }
            }
            break;
        case 'reverse':
            include('simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    $carnet=$alumno->Carnet;
                    include('parteAtras.php');
                }
            }
            break;  
        default:
            include('header.html');
            include('main.php');
    }
    require('footer.html');
?>