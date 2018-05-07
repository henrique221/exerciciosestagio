<?php
class Data
{
    public $dia;
    public $mes;
    public $ano;

    public function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }
    public function verificaDia()
    {
        if ($this->dia <= -1) {
            $this->dia = $this->dia * -1;
        }
        if ($this->dia < 10){
            $this->dia = sprintf("0%u", (string)$this->dia);
        }
        if ($this->dia > 30){
            $this->dia = "01";
        }

        return (string)$this->dia;
    }

    public function verificaMes()
    {
        if ($this->mes <= -1) {
            $this->mes = $this->mes * -1;
        }
        if ($this->mes < 10){
            $this->mes = sprintf("0%u", (string)$this->mes);
        }
        if ($this->mes > 12){
            $this->mes = "01";
        }
        return (string) $this->mes;
    }
}

$data = new Data(25, -3, 2018);
var_dump($data->verificaDia(), $data->verificaMes(), $data->ano);
