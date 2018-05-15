<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once './arquivos/Voo.php';

class DataTest extends PHPUnit
{
    /**
     * @test
     */
    public function deveRetornarADataEHorarioDoVoo()
    {
        $voo = new Voo;
        $voo->setDataEHorario(10, 1, 2018, 10, 10, 0);
        $this->assertEquals("10/01/2018 10:10:00", $voo->data);
    }
    /**
     * @test
     */

    public function deveRetornarONumeroDoVoo()
    {
        $voo = new Voo;
        $voo->setNumeroDoVoo(10);
        $this->assertEquals(10, $voo->numeroVoo);
    }

    /**
     * @test
     */
    public function deveOcuparUmaCadeiraERetornarVerdadeiroCasoACadeiraAindaNaoEstiverOcupada()
    {
        $voo = new Voo;
        $numeroVoo = $voo->setNumeroDoVoo(9);
        $this->assertTrue($voo->ocuparAssento($numeroVoo, 10));
    }
}
