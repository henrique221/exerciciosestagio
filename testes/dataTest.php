<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './arquivos/data.php';

class DataTest extends PHPUnit
{
    /**
     * @test
     */
    public function deveRetornarDiaPositivoCasoSejaPassadoValorNegativo()
    {
        $data = new Data(-11, 05, 1992);
        $this->assertEquals(11, $data->verificaDia());
    }
    /**
     * @test
     */
    public function deveRetornarDiaComZeroAEsquerdaCasoDataSejaMenorQueDez()
    {
        $data = new Data(8, 05, 1992);
        $this->assertEquals("08", $data->verificaDia());
        $this->assertInternalType("string", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornar01CasoODiaSejaMaiorQue30()
    {
        $data = new Data(35, 05, 1992);
        $this->assertEquals("01", $data->verificaDia());
        $this->assertInternalType("string", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornarMesPositivoCasoSejaPassadoValorNegativo()
    {
        $data = new Data(11, -10, 1992);
        $this->assertEquals("10", $data->verificaMes());
        $this->assertInternalType("string", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornar01CasoMesSejaMaiorQue12()
    {
        $data = new Data(11, 13, 1992);
        $this->assertEquals("01", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornarMesComZeroAEsquerdaCasoSejaMenorQue10()
    {
        $data = new Data(11, 3, 1992);
        $this->assertEquals("03", $data->verificaMes());
    }
}