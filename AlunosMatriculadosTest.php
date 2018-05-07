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
    /**
     * @test
     */
    public function deveRetornarNotaDaProva1()
    {
        $aluno = new AlunosMatriculados(12324543, "Henrique", 3, 5, 2);
        $this->assertEquals(3, $aluno->getNotaDaProva1());
    }
    /**
     * @test
     */
    public function deveRetornarNotaDaProva2()
    {
        $aluno = new AlunosMatriculados(12324543, "Henrique", 3, 5, 2);
        $this->assertEquals(5, $aluno->getNotaDaProva2());
    }
    /**
     * @test
     */
    public function deveRetornarONomeDoAluno()
    {
        $aluno = new AlunosMatriculados(123123123, "Henrique", 3, 5, 2);
        $this->assertEquals("Henrique", $aluno->getNomeDoAluno());
    }
    /**
     * @test
     */
    public function deveRetornarANotaDeTrabalho()
    {
        $aluno = new AlunosMatriculados(123123123, "Henrique", 3, 5, 2);
        $this->assertEquals(2, $aluno->getNotaDoTrabalho());
    }
}