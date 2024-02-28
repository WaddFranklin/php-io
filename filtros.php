<?php

// Não funcionou. Pesquisar um dia...
require 'MeuFiltro.php';

$file = fopen('lista-de-filmes.txt', 'r');

stream_filter_register('alura.de', MeuFiltro::class);
stream_filter_append($file, 'alura.de');

echo fread($file, filesize('lista-de-filmes.txt'));
