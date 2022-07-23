<?php

namespace App\extrator;

class Txt extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $hendle = fopen($caminho, 'r');

        while (!feof($hendle)) {
            $linha = fgets($hendle); // o ponteiro interno de leitura do arquivo é incrementado
            $this->setDados(
                substr($linha, 11, 30), //nome
                substr($linha, 0, 11), //cpf
                substr($linha, 41, 50) //email
            );
        }
        fclose($hendle);
        return $this->getDados();
    }
}
