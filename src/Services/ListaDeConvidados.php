<?php

namespace Mateus\Phpunit\Services;

use Mateus\Phpunit\Models\Convidado;
use Mateus\Phpunit\Exceptions\IdadeIrregularException;
use Mateus\Phpunit\Exceptions\SenhaInvalidaException;

class ListaDeConvidados
{
    /** @var Convidado[] */
    private $convidados;
    private $numconvidados;

    public function __construct()
    {
        $this->convidados = [];
    }

    public function adicionarConvidado(Convidado $convidado)
    {
        if ($convidado->recuperarIdade() < 18) {
            throw new IdadeIrregularException();
        }

        if (ucfirst($convidado->recuperarSenhaSecreta()) != "Abacaxi") {
            throw new SenhaInvalidaException($convidado->recuperarNome());
        }

        // echo PHP_EOL . "Seja bem vindo(a), {$convidado->recuperarNome()} ! Você foi classificado como VIP! Entre e fique a vontade!" . PHP_EOL . "Bebida e comida por nossa conta! ;) \n \n";

        $this->convidados[] = $convidado;
    }

    /** @return Convidado[] */
    public function recuperarConvidados(): array
    {
        return $this->convidados;
    }

    public function recuperarNumConvidadosLista(): int
    {
        return $this->numconvidados;
    }
}
