<?php

namespace Mateus\Tests\Services;

use Mateus\Phpunit\Exceptions\IdadeIrregularException;
use Mateus\Phpunit\Exceptions\SenhaInvalidaException;
use PHPUnit\Framework\TestCase;
use Mateus\Phpunit\Models\Convidado;
use Mateus\Phpunit\Services\ListaDeConvidados;

class ListaDeConvidadosTest extends TestCase
{
    /** @dataProvider gerarLista */
    public function testListaDeConvidadosNaoDeveAceitarConvidadosMenoresDeIdade(ListaDeConvidados $listadeconvidados)
    {
        $this->expectException(IdadeIrregularException::class);
        $this->expectExceptionMessage("Desculpe, sua idade é inferior a classificação permitida. Entrada somente para maiores de 18 anos!" . PHP_EOL . PHP_EOL);

        $mateus = new Convidado("Mateus", 23, "123.123.123-12", "Abacaxi");
        $giulia = new Convidado("Giulia", 22, "321.312.312-12", "Abacaxi");
        $tonio = new Convidado("Tonio", 17, "726.161.720-12", "Abacaxi");

        $listadeconvidados->adicionarConvidado($mateus);
        $listadeconvidados->adicionarConvidado($giulia);
        $listadeconvidados->adicionarConvidado($tonio);
    }

    /** @dataProvider gerarLista */
    public function testListaDeConvidadosDeveIdentificarSenhaInformada(ListaDeConvidados $listadeconvidados)
    {
        $this->expectException(SenhaInvalidaException::class);

        $mateus = new Convidado("Mateus", 23, "123.123.123-12", "Maça");
        $giulia = new Convidado("Giulia", 22, "321.312.312-12", "Abacaxi");

        $listadeconvidados->adicionarConvidado($mateus);
        $listadeconvidados->adicionarConvidado($giulia);
    }

    public function gerarLista()
    {
        $listadeconvidados = new ListaDeConvidados;

        return [
            "Convidados aleatórios" => [
                $listadeconvidados
            ]
        ];
    }
}
