<?php

echo "Array Simple" . "\n";
echo "---------------"  . "\n";
#Array
//Es aquel elemento que no identificamos de manera directa.
#Array Simple
//Es aquel que no le hemos definido un Key o clave
$course = [
	'javascrip', 
	'laravel', 
	'php', 
	'vue'
];
var_dump($course);

//Array con Key o clave definida 
$courses = [
	'javascrip', 
	'laravel', 
    // Si se le asigna un numero, afectara el siguiente tambien
	10 =>'php', 
	'vue'
];
var_dump($courses);