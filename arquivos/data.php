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
    public function getDia()
    {
        return $this->dia;
    }

    public function verificaMes($mes)
    {
        if ($mes <= -1) {
            $mes = $mes * -1;
        }
        if ($mes == 0){
            return "Mês invalido";
        }

        switch ($mes) {
            case ($mes > 12):
                return "Mes inexistente";
            case ($mes < 10):
                $this->mes = sprintf("0%u",(string)$mes);
                return $this->mes;
            case ($mes >= 10):
                $this->mes = (string)$mes;
                break;
        }
    }
    public function getMes()
    {
        return $this->mes;
    }
}

$data = new Data(-20, 5, 2018);
var_dump($data->verificaDia(), $data->getMes(), $data->ano);
