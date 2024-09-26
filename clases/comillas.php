<?php

$var = 'Hola';

echo 'Un texto de una linea
varias lineas, no puedo usar una $var' . "\n";

echo "Aqui si puedo usar $var" . "\n";

$courses = [
    'back' => [
        'PHP',
        'Node'
    ]
    ];

// echo "sin embargo esto no lo puedo hacer $courses['back'][0]";
echo "Tengo que usar las llaves para poder hacerlo {$courses['back'][0]}" . "\n";

class User {
    public $name = 'Raul';
}

$usuario = new User;

echo "$usuario->name quiere aprender {$courses['back'][0]}" . "\n";

// Variables variables

function getTeacher(){
    return 'teacher';
}

$teacher = 'Raul';

// Al llamar a nuestra funcion getTeacher dentro de ${}, como devuelve "teacher"
// se estara imprimiento realmente nuestra variable $teacher debido a que
// este codigo es como si escribiesemos:
// echo "$teacher enseña JS" . "\n";

echo "${getTeacher()} enseña JS" . "\n";