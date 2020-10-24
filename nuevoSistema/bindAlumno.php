<?php
    $carnet=$alumno->Carnet;
    $nombre=$alumno->Apellido." ".$alumno->Nombre;
    $dni=$alumno->Dni;
    $turno="TURNO";
    $curso=$alumno->Curso.'º '.$alumno->Division.'ª';
    $escuela="Escuela";
    $foto=getFoto($carnet);
?>