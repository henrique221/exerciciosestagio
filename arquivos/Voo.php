<?php

class Voo
{
    public $numeroVoo;
    public $data;
    public $vagas = 100;

    public function __construct()
    {
        $data = $this->data;
        $vagas = $this->vagas;
        $numeroVoo = $this->numeroVoo;
    }

    public function setDataEHorario($d, $m, $Y, $H, $i, $s)
    {
        $format = "d/m/Y H:i:s";
        $dataVoo = DateTime::createFromFormat($format, sprintf("$d/$m/$Y $H:$i:$s"));
        $this->data = $dataVoo->format($format);

        return $this->data;
    }
}

$voo = new Voo;
$voo->setDataEHorario('11', '05', '2019', '15', '20', '00');

var_dump(
    $voo
);