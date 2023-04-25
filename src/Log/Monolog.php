<?php
namespace App\Log;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Monolog
{
   
    static public function gerarLog(string $mensagem)
    {
        $log = new Logger('app');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

        // add records to the log
       
        $log->error($mensagem);


    }
}