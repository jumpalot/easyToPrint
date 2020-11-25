<?php
    $carnet=$alumno->Carnet;
    $nombre=$alumno->Apellido." ".$alumno->Nombre;
    $dni=$alumno->Dni;
    $turno=$alumno->Turno;
    $curso=$alumno->Curso.'º '.$alumno->Division.'ª';
    $escuela=($alumno->Division<4)?"Técnica":"Secundaria";
    $foto=getFoto($carnet);
?>