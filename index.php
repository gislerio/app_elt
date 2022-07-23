<?php

require __DIR__ . "/vendor/autoload.php";

use App\Leitor;



$leitor = new Leitor();

$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';