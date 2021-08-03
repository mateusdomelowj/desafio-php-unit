<?php

namespace Mateus\Phpunit\Exceptions;

use DomainException;

class SenhaInvalidaException extends DomainException
{
    public function __construct($nome)
    {
        $mensagem = "Lamento $nome, mas a senha informada é inválida! Não se preocupe, pode entrar como Convidado STANDARD." . PHP_EOL . PHP_EOL;
        parent::__construct($mensagem);
    }
}
