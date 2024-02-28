<?php

// $tela = fopen('php://stdout', 'w'); // saída padrão
// $tela = fopen('php://stderr', 'w'); // saída de erro
// fwrite(STDOUT, 'Olá Mundo!' . PHP_EOL);
// fwrite(STDOUT, 'Olá Mundo!' . PHP_EOL); contante da saída padrão

// echo 'Olá Mundo!' . PHP_EOL;
// print 'Olá Mundo!' . PHP_EOL;

$filmes = fopen('zip://arquivos.zip#lista-de-filmes.txt', 'r');
stream_copy_to_stream($filmes, STDOUT);