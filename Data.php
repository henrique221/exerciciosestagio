<?php
class Data
{
    public $dia;
    public $mes;
    public $ano;

    public function __construct($dia, $mes, $ano)
    {
        $this->verificaDia($dia);
        $this->verificaMes($mes);
    }
    public function verificaDia($dia)
    {
        if ($dia <= -1) {
            $dia = $dia * -1;
        }
        if ($dia == 0){
            return "Dia invalido";
        }

        switch ($dia) {
            case ($dia > 30):
                return "Dia maior que 30";
            case ($dia < 10):
                $this->dia = sprintf("0%u",(string)$dia);
                return $this->dia;
            case ($dia >= 10):
                $this->dia = (string)$dia;
                break;
        }
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

$data = new Data(25, 5, 2018);
var_dump($data->getDia(),$data->getMes(), $data->ano);
