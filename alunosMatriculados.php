<?php
class AlunosMatriculados
{
    public $matricula;
    public $nome;
    public $notaDaProva1;
    public $notaDaProva2;
    public $notaDeTrabalho;

    public function __construct($matricula, $nome, $notaDaProva1, $notaDaProva2, $notaDeTrabalho)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->notaDaProva1 = $notaDaProva1;
        $this->notaDaProva2 = $notaDaProva2;
        $this->notaDeTrabalho = $notaDeTrabalho;
    }
    public function calculaMedia()
    {
        $media = (($this->notaDaProva1 * 2.5) + ($this->notaDaProva2 * 2.5) + ($this->notaDeTrabalho * 2)) / 7;
        return $media;
    }
}

$aluno1 = new AlunosMatriculados(123, "Henrique", 5, 8, 10);
var_dump($aluno1, $aluno1->calculaMedia());