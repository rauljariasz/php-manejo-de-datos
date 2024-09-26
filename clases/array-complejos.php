<?php

echo "Array Complejo" . "\n";
echo "---------------" . "\n";
#Array
//Es aquel elemento que no identificamos de manera directa.

$courses = [
	'frontend' => 'javascript', 
	'framework' => 'laravel', 
	'backend' => 'php'
];

var_dump($courses);


foreach ($courses as $key => $value){
	echo "$key: $value" . "\n";
}


$contador = 1;
foreach ($courses as $course){
	echo "$contador.- $course" . "\n";
	$contador++; 
}

function upper($course){
	echo strtoupper("$course") . "\n";
}

array_walk($courses, 'upper');

function upper1($course, $key){
	echo strtoupper($course) . ": $key" . "\n";
}

array_walk($courses, 'upper1');

/*	
	//Existe un Key
	array_key_exists('frontend', $courses);
	//Existe un valor
	in_array('javascript', $courses);
	//Muestra todos los Key
	array_keys($courses);
	//Muestra todos los valores
	array_values($courses);
*/