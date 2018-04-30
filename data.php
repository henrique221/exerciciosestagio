<?php
class Data
{
    public $dia;
    public $mes;
    public $ano;

    public function __construct($dia, $mes, $ano)
    {
        $this->verificaDia($dia);
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
}

$data = new Data(25, 11, 2018);
var_dump($data->dia, $data->mes, $data->ano);