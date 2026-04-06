<?php

//https:// -> Protocolo
// www.youtube.com/ ---> Dominio
// watch -> layout
// ? -> envio de variables por metodo get 
// v= -> definir variables en metodo get 
// 7LD9 - wofjIs -> valor de la variable
// & -> separador de variables 
// %20 -> espacio en la url

// Esto es un comentario de una linea 
/* Esto tambien es un comentario*/


$nombre = "Vianey";
$edad = "24 años";
$estatura = "1.48 cm";
$ColorPiel = "Blanca";
$peso = "53 kg";
$ColorFav = "Azul";
$Nacionalidad = "Mexicana";
$EstadoCivil = "Soltera";
$Nacimiento = "27/08/2002";
$Colonia = "San Juanico";

echo "Hola, mi nombre es " . $nombre . " Tengo " . $edad . " Mido " . $estatura . " Mi color de piel es " . $ColorPiel . 
" Peso " . $peso . "<br> Mi color favorito es " . $ColorFav . "<br> Soy de nacionalidad " . $Nacionalidad . 
"<br> Estado civil: " . $EstadoCivil . "<br> Fecha de nacimiento: " . $Nacimiento . "<br> Vivo en la colonia " . $Colonia;
?>