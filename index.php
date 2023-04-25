<?php

require __DIR__.'/vendor/autoload.php';

\App\Log\Monolog::gerarLog("treinaweb");
\App\Log\Monolog::gerarLog("cursos");

gerarPdf("<h1>olá mundo</h1>");
?>