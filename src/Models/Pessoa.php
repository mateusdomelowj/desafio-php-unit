<?php

namespace Mateus\Phpunit\Models;

abstract class Pessoa
{
    private string $nome;
    private int $idade;
    private string $cpf;


    public function __construct(string $nome, int $idade, string $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarIdade(): int
    {
        return $this->idade;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
    }
}
