<?php

echo("TALLER 1 GENERALIDADES PHP-Elaborado por Juan José Gallego <br>");

//Ejercicio 1
$numero1=4;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo("<br>Ejercicio # 1");
echo("<br>La suma de ".$numero1."+".$numero2."=".$suma);
echo("<br>La resta de ".$numero1."-".$numero2."=".$resta);
echo("<br>La multiplicación de ".$numero1."x".$numero2."=".$multiplicacion);
echo("<br>La mdivisión de ".$numero1."/".$numero2."=".$division);

//Ejercicio 2
echo("<br>");
$peso=85;
$altura=1.78;
$imc=$peso/($altura*$altura);

echo("<br>Ejercicio # 2");
echo("<br>Señor usuario su estatura es de: ".$altura."m y su peso es de: ".$peso."Kg");

if($imc<=18.4){
    echo("<br>Su indice de masa corporal es de: ".$imc.". Por la tanto usted tiene Insuficiencia de peso");
}else if($imc>=18.5 && $imc<=24.9){
    echo("<br>Su indice de masa corporal es de: ".$imc.". Por la tanto usted tiene peso normal");
}else if($imc>=25 && $imc<=29.9){
    echo("<br>Su indice de masa corporal es de: ".$imc.". Por la tanto usted tiene sobrepeso");
}else if($imc>=30 && $imc<=34.9){
    echo("<br>Su indice de masa corporal es de: ".$imc.". Por la tanto usted tiene Obesidad Grado 1");
}else if($imc>=35 && $imc<=39.9){
    echo("<br>Su indice de masa corporal es de: ".$imc.". Por la tanto usted tiene Obesidad Grado 2");
}else if($imc>=40){
    echo("<br>Su indice de masa corporal es de: ".$imc.". Por la tanto usted tiene Obesidad Grado 3");
}


//Ejercicio 3
echo("<br>");
$precioParZapatos=150000;
$cantidadVendida=5;
$costoTotal;
$costoDescuento;
$descuento=0;

if($cantidadVendida==3){
    $descuento=0.1;
}else if($cantidadVendida>3 && $cantidadVendida<=5){
    $descuento=0.2;
}else if($cantidadVendida>5){
    $descuento=0.4;
}

$costoNeto=$cantidadVendida*$precioParZapatos;
$costoDescuento=$costoNeto*$descuento;
$costoTotal=($cantidadVendida*$precioParZapatos)-$costoDescuento;

echo("<br>Ejercicio # 3");
echo("<br>.................................................<br>");
echo ("Cantidad Vendida: ".$cantidadVendida."<br>");
echo ("Costo Neto: ".$costoNeto."<br>");
echo ("Descuento: ".($descuento*100)."%<br>");
echo ("Valor del Descuento: ".$costoDescuento."<br>");
echo ("Valor Total a pagar: ".$costoTotal);
echo("<br>.................................................<br>");


//Ejercicio 4
echo("<br>");
$horasTrabajadas=36;
$valorHora;
$salario;

if($horasTrabajadas<=40){
    $valorHora=20000;
}else{
    $valorHora=25000;
}


$salario=$valorHora*$horasTrabajadas;

echo("<br>Ejercicio # 4<br>");
echo ("Para un total de: ".$horasTrabajadas." Horas, se obtiene un valor hora de: $".$valorHora);
echo ("<br>El salario devengado en la semana es de: $".$salario);

//Ejercicio 5
echo("<br>");
$mayorIngreso;

$nombre1="Juan Perez";
$nombre2="Ana Gaviria";
$nombre3="Pedro Mesa";
$nombre4="Catalina Castaño";
$nombre5="Gabriel Rodriguez";

$telefono1="3224567898";
$telefono2="3014569852";
$telefono3="3108965474";
$telefono4="3148555555";
$telefono5="3001234879";

$direccion1="Cll 100 sur # 35a-25";
$direccion2="Cll 90 # 10-80";
$direccion3="Cll 85 # 25-10";
$direccion4="Cll 100 sur # 35a-27";
$direccion5="Cr 37 # 100-20";

$salario1=3520000;
$salario2=4580000;
$salario3=1250000;
$salario4=3800000;
$salario5=6490000;

$sumatoriaA=$salario1+$salario2+$salario3+$salario4+$salario5;
$sumatoriaB=20000000;
$sumatoriaC=15000000;

echo("<br>Ejercicio # 5");
echo ("<br>Los usuarios registrados en la sucursal A son: ");
echo("<br>");
echo ("<br>".$nombre1." - ".$telefono1." - ".$direccion1." - $".$salario1);
echo ("<br>".$nombre2." - ".$telefono2." - ".$direccion2." - $".$salario2);
echo ("<br>".$nombre3." - ".$telefono3." - ".$direccion3." - $".$salario3);
echo ("<br>".$nombre4." - ".$telefono4." - ".$direccion4." - $".$salario4);
echo ("<br>".$nombre5." - ".$telefono5." - ".$direccion5." - $".$salario5."<br>");


if($sumatoriaA>$sumatoriaB && $sumatoriaA>$sumatoriaC){
    $mayorIngreso="El mayor ingreso lo tiene la sucursal A";
}else if($sumatoriaB>$sumatoriaA && $sumatoriaB>$sumatoriaC){
    $mayorIngreso="El mayor ingreso lo tiene la sucursal B";
}else if($sumatoriaC>$sumatoriaA && $sumatoriaC>$sumatoriaB){
    $mayorIngreso="El mayor ingreso lo tiene la sucursal C";
}

echo ("<br>".$mayorIngreso);

?>