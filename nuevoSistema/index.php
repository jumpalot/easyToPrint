<?php
    require('../vendor/autoload.php');
    require('header.html');
    require('funciones.php');
    $alumnos = getAlumnos();
    switch(@$_GET['page']){
        case 'list':
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    include('bindAlumno.php');
                    include('plantilla.php');
                }
            }
            break;
        case 'reverse':
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    $dni=$alumno->Dni;
                    include('parteAtras.php');
                }
            }
            break;  
        default:
            include('main.php');
    }
    require('footer.html');
?>