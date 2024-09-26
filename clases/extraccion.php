<?php

// $data = 'Estudio PHP';

// echo $data[0] . "\n";

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus repellendus nesciunt autem blanditiis illo hic rerum officia ex reiciendis, accusamus corporis vero quam recusandae porro nemo, quibusdam culpa architecto sequi.";

$extract = substr($post, 0, 20);

echo "$extract... ver más" . "\n";

// String to Arrays
$data = 'javascript, php, laravel';
$tags = explode(',', $data);

var_dump($tags);

// Arrays to String
$tagsString = implode(", ",$tags);

echo $tagsString . "\n";

// Eliminar  espacios
$espacios = "    Hay espacios      ";

$espacios = trim($espacios);

echo $espacios . "\n";