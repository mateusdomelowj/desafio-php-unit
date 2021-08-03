<?php

namespace Mateus\Phpunit\Exceptions;

use DomainException;

class IdadeIrregularException extends DomainException
{
    public function __construct()
    {
        $mensagem = "Desculpe, sua idade é inferior a classificação permitida. Entrada somente para maiores de 18 anos!" . PHP_EOL . PHP_EOL;
        parent::__construct($mensagem);
    }
}
