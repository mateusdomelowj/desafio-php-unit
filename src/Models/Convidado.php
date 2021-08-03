<?php

namespace Mateus\Phpunit\Models;

use Mateus\Phpunit\Exceptions\IdadeIrregularException;
use Mateus\Phpunit\Exceptions\SenhaInvalidaException;

class Convidado extends Pessoa
{
    private string $vip;
    private string $senhaSecreta;
    private static int $numConvidados = 0;

    public function __construct(string $nome, int $idade, string $cpf, string $senhaSecreta)
    {
        parent::__construct($nome, $idade, $cpf);
        // $this->validarIdade($idade, $nome);
        $this->senhaSecreta = $senhaSecreta;
        self::$numConvidados++;
        // $this->validarVip(ucfirst($senhaSecreta), $nome);
    }

    public function recuperarVip(): string
    {
        return $this->vip;
    }

    public function recuperarSenhaSecreta(): string
    {
        return $this->senhaSecreta;
    }
}
