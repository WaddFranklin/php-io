<?php

$filmes = file('lista-de-filmes.txt');

var_dump($filmes);

// $file = fopen('lista-de-filmes.txt', 'r');

// $fileSize = filesize('lista-de-filmes.txt');
// $filmes = fread($file, $fileSize);

// echo $filmes . PHP_EOL;

// while (!feof($file)) {
//     $filme = fgets($file);

//     echo $filme;
// }
// echo PHP_EOL;

// fclose($file);