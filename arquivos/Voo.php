<?php

class Voo
{
    public $numeroVoo;
    public $data;
    public function __construct()
    {
        $data = $this->data;
        $numeroVoo = $this->numeroVoo;
    }

    public function setDataEHorario($d, $m, $Y, $H, $i, $s)
    {
        $format = "d/m/Y H:i:s";
        $dataVoo = DateTime::createFromFormat($format, '11/05/1992 11:50:00');
        $this->data = $dataVoo->format($format);

        return $this->data;
    }
}

$voo = new Voo;
$voo->setDataEHorario(11, 05, 2019, 15, 20, 00);

var_dump(
    $voo
);