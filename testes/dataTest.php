<?php

use PHPUnit\Framework\TestCase as PHPUnit;

require_once '../arquivos/data.php';

class DataTest extends PHPUnit
{
    /**
     * @test
     */
    public function deveRetornarDiaPositivoCasoSejaPassadoValorNegativo()
    {
        $data = new Data(-11, 05, 1992);
        $this->assertEquals(11, $data->verificaDia(11));
    }
}