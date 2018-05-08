<?php
class Data
{
    public $dia;
    public $mes;
    public $ano;
    public $data;

    public function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        $this->data = $this->geraData();
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
        if ($this->mes > 12 || $this->mes == 0){
            $this->mes = "01";
        }
        return (string) $this->mes;
    }

    public function verificaAno()
    {
        if ($this->ano > 9999 || $this->ano < 1000){
            $this->ano = "0001";
        }
        return (string) $this->ano;
    }

    public function geraData()
    {
        $data = sprintf("%s/%s/%s", $this->verificaDia(), $this->verificaMes(), $this->verificaAno());
        return $data;
    }

    public function comparaDatas($data2)
    {
        if ($this->data == $data2->data){
            return 0;
        }
        else{
            if ($this->dia > $data2->dia || $this->mes > $data2->mes || $this->ano > $data2->ano){
                return 1;
            }
            else {
                return -1;
            }
        }
    }
}

