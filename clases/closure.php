<?php

$greet = function ($name) {
    return "Hola, $name";
};

echo $greet('Raul') . "\n";

// CLosure es una clase empleada para representar funciones anonimas.
function greetfs(Closure $lang, $name) {
    return $lang($name);
}

// Funciones anonimas segun el Lenguaje
$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

// En ingles
echo greetfs($en, "Raaul") . "\n";

echo greetfs(function ($name){
    return "Hola desde una función anonima dentro del arg de greetfs, $name";
}, "Raul") . "\n";