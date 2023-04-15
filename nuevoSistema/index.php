<?php
    require('../vendor/autoload.php');
    
    require('model/funciones.php');
    switch(@$_GET['page']){
        case 'list':
            include('view/simpleheader.html');
            if (@$_GET['listcarnets'])
                $alumnos = getAlumnosByCarnet($_GET['listcarnets'], @$_GET['noImpresos']);
            else
                $alumnos = getAlumnos($_GET['curso'], $_GET['division'], @$_GET['noImpresos']);
            if(@$alumnos){
                if (@$_GET['onlyWithPhotos']) foreach($alumnos as $alumno){
                    if($alumno->hasImg){
                        include('model/bindAlumno.php');
                        include('tpl/plantilla.php');
                    }
                }
                else foreach($alumnos as $alumno){
                    include('model/bindAlumno.php');
                    include('tpl/plantilla.php');
                }
                include('js/autoprint.html');
            } else echo "No se recibieron alumnos";
            break;
        case 'reverse':
            include('view/simpleheader.html');
            if (@$_GET['listcarnets'])
                $alumnos = getAlumnosByCarnet($_GET['listcarnets']);
            else
                $alumnos = getAlumnos($_GET['curso'], $_GET['division']);
            if(@$alumnos){
                if (@$_GET['onlyWithPhotos']) foreach($alumnos as $alumno){
                    if($alumno->hasImg){
                        $carnet=$alumno->Carnet;
                        include('tpl/parteAtras.php');
                    }
                } else foreach($alumnos as $alumno){
                    $carnet=$alumno->Carnet;
                    include('tpl/parteAtras.php');
                }
                include('js/autoprint.html');
            } else echo "No se recibieron alumnos";
            break; 
        default:
            include('view/header.html');
            include('view/main.html');
            include('view/importador.html');
    }
    require('view/footer.html');
?>