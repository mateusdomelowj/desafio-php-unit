<?php

use Mateus\Phpunit\Exceptions\IdadeIrregularException;
use Mateus\Phpunit\Exceptions\SenhaInvalidaException;
use Mateus\Phpunit\Models\Convidado;
use Mateus\Phpunit\Services\ListaDeConvidados;

require "vendor/autoload.php";

// Tratamento de erros desenvolvido com um objeto da classe Convidado, e esse recebe 4 argumentos:
//         Primeiro argumento NOME
//         Segundo argumento IDADE
//         Terceiro argumento CPF
//         E Quarto argumento SENHA-VIP

$listaconvidados = new ListaDeConvidados;

try {
    $convidado1 = new Convidado("Mateus", 23, "123.123.321-12", "Abacaxi");
    $listaconvidados->adicionarConvidado($convidado1);
} catch (SenhaInvalidaException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}

try {
    $convidado2 = new Convidado("Giulia", 22, "091.251.842-58", "Abacaxi");
    $listaconvidados->adicionarConvidado($convidado2);
} catch (IdadeIrregularException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}

try {
    $convidado3 = new Convidado("Angela", 16, "412.284.126-75", "Abacaxi");
    $listaconvidados->adicionarConvidado($convidado3);
} catch (IdadeIrregularException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}

try {
    $convidado4 = new Convidado("Fabricio", 28, "238.964.135.-96", "Abacaxi");
    $listaconvidados->adicionarConvidado($convidado4);
} catch (IdadeIrregularException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}

try {
    $convidado5 = new Convidado("Lucas", 18, "161.372.684-14", "Abacaxi");
    $listaconvidados->adicionarConvidado($convidado5);
} catch (IdadeIrregularException $exception) {
    echo $exception->getMessage();
} finally {
    echo "Próximo da fila..." . PHP_EOL . PHP_EOL;
}
