<?php
    $alumnos = json_decode('[
        {"Carnet":"1010","Curso":"3","Nombre":"fulanito","Apellido":"detal","Sexo":"f","Edad":"10"},
        {"Carnet":"1111","Curso":"3","Nombre":"menganito","Apellido":"perez","Sexo":"m","Edad":"12"},
        {"Carnet":"3635","Curso":"6","Nombre":"Juan Pablo","Apellido":"Gardey","Sexo":"m","Edad":"18"}
    ]');
    $cursos=array();
    foreach($alumnos as $alumno){
        if(isset($cursos[$alumno->Curso])) array_push($cursos[$alumno->Curso], $alumno);
        else $cursos[$alumno->Curso]=array($alumno);
    }
    print_r($cursos);
?>