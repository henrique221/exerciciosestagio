<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once 'AlunosMatriculados.php';

class AlunosMatriculadosTest extends PHPUnit
{
    /**
     * @test
     **/
    public function deveRetornarAMediaDoAluno()
    {
        $aluno = new AlunosMatriculados(1231454, "Henrique", 10, 10, 10);
        $this->assertEquals(10, $aluno->calculaMedia());
    }
    /**
     * @test
     */
    public function deveRetornarZeroQuandoNaoNecessitaMaisNotaNaProvaFinal()
    {
        $aluno = new AlunosMatriculados(1231454, "Henrique", 10, 10, 10);
        $this->assertEquals(0, $aluno->calculaQuantoPrecisaParaProvaFinal());
    }
    /**
     * @test
     */
    public function deveRetornarQuantosPontosNecessitaNaProvaFinal()
    {
        $aluno = new AlunosMatriculados(12324543, "Henrique", 3, 5, 2);
        $this->assertEquals(2.57, $aluno->calculaQuantoPrecisaParaProvaFinal());
    }
}