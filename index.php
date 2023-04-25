<?php

require __DIR__.'/vendor/autoload.php';
// require "helpers\Pdf.php";
\App\Log\Monolog::gerarLog("treinaweb");
\App\Log\Monolog::gerarLog("cursos");

echo gerarPdf("<h1>olá mundo</h1>");
?>