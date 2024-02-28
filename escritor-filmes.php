<?php

// $file = fopen('filmes.txt', 'a');

$film = "Jogos Mortais X" . PHP_EOL;

file_put_contents('filmes.txt', $film, FILE_APPEND);
// fwrite($file, $film);

// fclose($file);