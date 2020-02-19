<?php

echo ("Generalidades de PHP <br>");


$cantidadEstudiantes=25;
$cantidadProfesores=5;

//Quiero Saber si Hay mas estudiantes que profes

if($cantidadEstudiantes>$cantidadProfesores){
    echo("Hay mas estudiantes que profesores <br>");
}else{
    echo("Hay mas profesores que estudiantes");
}

//Quiero saber que fruta tengo en mi variable $fruta:
$fruta="manzana";
switch ($fruta) {
    case "manzana":
        echo "es una manzana";
        break;
    case "Pera":
        echo "es una Pera";
        break;
    case "Banano":
        echo "es un Banano";
        break;
    default:
        echo "No hay fruta";
        break;
}


?>