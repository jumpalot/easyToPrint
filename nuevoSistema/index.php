<?php
    require('../vendor/autoload.php');
    
    require('model/funciones.php');
    switch(@$_GET['page']){
        case 'list':
            if (@$_GET['listcarnets'])
                $alumnos = getAlumnosByCarnet($_GET['listcarnets']);
            else
                $alumnos = getAlumnos($_GET['curso'], $_GET['division']);
            include('view/simpleheader.html');
            foreach($alumnos as $alumno){
                if($alumno->hasImg){
                    include('model/bindAlumno.php');
                    include('tpl/plantilla.php');
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
                    include('tpl/parteAtras.php');
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