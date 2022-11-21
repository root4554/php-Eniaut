<?php

$mifecha = new DateTime(); 
echo "$fechaHoy[weekday], $fechaHoy[month] $fechaHoy[mday], $fechaHoy[year]";
$dataSalida = 

$HoraHoy=$_GET['HoraHoy'];
$DiaSalida=$_GET['DiaSalida'];
$HoraSalida=$_GET['HoraSalida'];

$HorasDesdeHoy=$HoraHoy+24*$DiaHoy;
$HorasDesdeSalida=$HoraSalida+24*$DiaSalida;

$DiferenciaHoras=$HorasDesdeSalida-$HorasDesdeHoy;
$HorasDiferencia=$DiferenciaHoras%24;
$DiasDiferencia=($DiferenciaHoras-$HorasDiferencia)/24;

print "Faltas $DiasDiferencia Dias y $HorasDiferencia Horas";
?>