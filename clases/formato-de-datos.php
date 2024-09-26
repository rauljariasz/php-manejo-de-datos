<?php

#Alterar
$text = "PHP es UN LENGUAJE";
echo $text . "\n";
//Hacer un texto en minuscula
echo strtolower($text) . "\n";
//Hacer un texto en Mayuscula
echo strtoupper($text) . "\n";
//Convierte el primer elemento en minuscula
echo lcfirst($text) . "\n";
//Convierte el primer elemento en Mayuscula
echo ucfirst($text) . "\n";

#Reemplazar
//reemplazamos cada espacio vacio por un guión(-)
$slug = str_replace(' ', '-', $text);
echo $slug . "\n";
echo strtolower($slug) . "\n";

#Modificación
//Si tenemos una factura se imprima de la siguiente forma.
$code = 39;
//Vamos a tener 8 espacio con 8 carácteres
echo str_pad($code, 8, '#') . "\n";
//Ambos lados, izquierda y derecha
echo str_pad($code, 8, '#', STR_PAD_BOTH) . "\n";
echo str_pad($code, 8, '#', STR_PAD_LEFT) . "\n";
echo str_pad($code, 8, '#', STR_PAD_RIGHT) . "\n";

//En nuestra base de datos no se deben de guardar etiquetas.
//Con strip_tags eliminamos cualquier etiqueta html que contega el dato
$html = "<h1>Etiqueta HTML</h1>";
echo strip_tags($html) . "\n";

#ELEMENTOS MONOBYTES Y MULTIBYTES.
$text_uno = "PHP es UN LENGUAJE, año 2020, programación";
$text_dos = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($text_uno) . "\n";//monobye
//Al colocar mb_nombrefuncion con esto formateamos correctamente.
echo mb_strtoupper($text_dos) . "\n"; //multibyte