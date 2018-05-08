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
        $this->assertInternalType("string", $data->verificaMes());
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
        $this->assertInternalType("string", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornarMesComZeroAEsquerdaCasoSejaMenorQue10()
    {
        $data = new Data(11, 3, 1992);
        $this->assertEquals("03", $data->verificaMes());
        $this->assertInternalType("string", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornar01CasoMesSejaIgualAZero()
    {
        $data = new Data(3, 0, 1992);
        $this->assertEquals("01", $data->verificaMes());
        $this->assertInternalType("string", $data->verificaMes());
    }
    /**
     * @test
     */
    public function deveRetornar0001CasoOAnoForMaiorQue9999()
    {
        $data = new Data(3, 5, 10000);
        $this->assertEquals("0001", $data->verificaAno());
        $this->assertInternalType("string", $data->verificaAno());
    }
    /**
     * @test
     */
    public function deveRetornar0001CasoAnoForMenorQue1000()
    {
        $data = new Data(3,5,999);
        $this->assertEquals("0001", $data->verificaAno());
    }
    /**
     * @test
     */
    public function deveRetornarADataCompletaNoFormatoDDMMAAA()
    {
        $data = new Data(3, 5, 2018);
        $this->assertEquals("03/05/2018", $data->geraData());
    }
}