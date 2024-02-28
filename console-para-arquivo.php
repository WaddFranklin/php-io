<?php

$novoFilme = trim(fgets(STDIN));

file_put_contents('lista-de-filmes.txt', "{$novoFilme}\n", FILE_APPEND);