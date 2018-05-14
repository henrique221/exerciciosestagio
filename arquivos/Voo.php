<?php

class Voo
{
    public $numeroVoo;
    public $data;
    public $vagas;

    public function __construct()
    {
        $data = $this->data;
        $vagas = range(0, 100);
        $this->vagas = $vagas;
        $numeroVoo = $this->numeroVoo;
    }

    public function setDataEHorario($d, $m, $Y, $H, $i, $s)
    {
        $format = "d/m/Y H:i:s";

        if ($s < 10) {
            $s = sprintf("0%u", (string)$s);
        }

        $dataVoo = DateTime::createFromFormat($format, sprintf("%s/%s/%s %s:%s:%s", $d, $m, $Y, $H, $i, $s));
        $this->data = $dataVoo->format($format);

        return $this->data;
    }

    public function setNumeroDoVoo($numero)
    {
        $this->numeroVoo = $numero;
    }

    public function ocuparAssento()
    {
        
    }
}

$voo = new Voo;
var_dump(
    $voo->vagas[50] = "ocupado"
);