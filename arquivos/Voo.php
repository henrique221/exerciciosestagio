<?php

class Voo
{
    public $numeroVoo;
    public $data;
    public $vagas;

    public function __construct()
    {
        $data = $this->data;
        $vagas = array_map(function() { return true; }, range(0, 100) );
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

    public function ocuparAssento($numeroVoo, $numero)
    {
        if ($numeroVoo != $this->numeroVoo) {
            if ($this->vagas[$numero] == true) {
                $this->vagas[$numero] = false;
                return true;
            }
        }
        return false;
    }
}
