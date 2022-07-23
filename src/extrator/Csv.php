<?php

namespace App\extrator;

class Csv extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $hendle = fopen($caminho, 'r');

        while (($linha = fgetcsv($hendle, 1000, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
        fclose($hendle);
        return $this->getDados();
    }
}
