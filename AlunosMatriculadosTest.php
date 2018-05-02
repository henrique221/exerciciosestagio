<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once 'AlunosMatriculados.php';

class AlunosMatriculadosTest extends PHPUnit
{
    /**
     * @test
     **/
    public function testType()
    {
        $aluno = new AlunosMatriculados(1231454, "Henrique", 10, 10, 10);
        $this->assertInternalType('int', $aluno->getMatricula());
    }
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
    public function deveRetornarQuantoNecessitaNaProvaFinal()
    {
        $aluno = new AlunosMatriculados(1231454, "Henrique", 10, 10, 10);
        $this->assertEquals(0, $aluno->calculaQuantoPrecisaParaProvaFinal());
    }
}