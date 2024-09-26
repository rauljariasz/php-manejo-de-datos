<?php

// Valores
function greet($name) {
    return "Hola , $name";
}

echo greet('Raul') . "\n";

// Referencias
$course = "PHP";
// Al agregarle & (parametro por referencia) modificaremos tambien la variable $course global
function path(&$course) {
    $course = 'Laravel';
    echo $course . "\n";
}

path($course);
echo $course . "\n";

// Predeterminado
// Si no se le pasa ningun valor, tendra de valor por defecto "Raul"
function greeting($name = 'Raul') {
    return "Hola, $name";
}