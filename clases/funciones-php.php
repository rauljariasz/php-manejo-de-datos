<?php

echo "Funciones PHP para arrays" . "\n";
echo "---------------" . "\n";

$courses = ['php', 'javascript', 'laravel'];
$course = [
	10 => 'php', 
	100 => 'javascript', 
	1000 => 'laravel'
];
//ordenar 
sort($courses);
#Ordenar de forma Recursiva
//rsort($courses);


#Ordenar por Key
ksort($course);
//krsort($course); //Ordenar de forma Recursiva

var_dump($courses);
var_dump($course);

#array_slide array rebanada
//en este caso eliminamos el Key 1
array_slice($courses, 1);

var_dump(array_slice($course, 1));
//Resultado
/*
array(2) {
	[0]=>
	string(10) "javascript"
	[1]=>
	string(7) "laravel"
  }
*/

#array_chunk array pedazo
$courses_chunk = ['php', 'javascript', 'laravel'];
//en este caso crea un 2 arrays y uno de ellos contiene dos elementos de los 3 que cotiene el array principal
array_chunk($courses_chunk, 2);
var_dump(array_chunk($courses_chunk, 2));


#array_shift() 
$courses_shift = ['php', 'javascript', 'laravel'];
//Quita un elemento del principio del array
array_shift($courses_shift);
var_dump(array_shift($courses_shift));


#array_pop()
$courses_pop = ['php', 'javascript', 'laravel'];
//Extrae el último elemento del final del array
array_pop($courses_pop);
var_dump($courses_pop);


#array_unshift()
$courses_unshift = ['php', 'javascript', 'laravel'];
//Añadir al inicio de un array uno a más elementos
array_unshift($courses_unshift, 'laravel2', 'javascript2');
var_dump($courses_unshift);


#array_push()
$courses_push = ['php', 'javascript', 'laravel'];
//Inserta uno o más elementos al final de un array
array_push($courses_push, 'laravel1', 'javascript1');
var_dump($courses_push);


#array_flip()
$courses_flip = [
	'backend' => 'php', 
	'forntend' => 'javascript'
];
//Intercambia todas las claves de un array con sus valores asociados
$intercambio = array_flip($courses_flip);
var_dump($intercambio);