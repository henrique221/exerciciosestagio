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
        $voo1 = new Voo;
        $voo1->setDataEHorario(10, 10, 2018, 10, 10, 10);
        $this->assertEquals("10/10/2018 10:10:10", $voo1->data);
    }
}