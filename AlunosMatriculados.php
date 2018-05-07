<?php
class AlunosMatriculados
{
    public $matricula;
    public $nome;
    public $notaDaProva1;
    public $notaDaProva2;
    public $notaDeTrabalho;
    public $mediaConstante = 6;

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
        return (float) number_format($media, 2);
    }

    public function calculaQuantoPrecisaParaProvaFinal()
    {
        $media = $this->calculaMedia();

        if($media > $this->mediaConstante){
            return 0;
        }
        else{
            return (float) number_format($this->mediaConstante - $media, 2);
        }
    }

    public function getNotaDaProva1()
    {
        return $this->notaDaProva1;
    }

    public function getNotaDaProva2()
    {
        return $this->notaDaProva2;
    }

    public function getNomeDoAluno()
    {
        return $this->nome;
    }

    public function getNotaDoTrabalho()
    {
        return $this->notaDeTrabalho;
    }
}

$aluno1 = new AlunosMatriculados(123, "Henrique", 3, 5, 2);

var_dump(
    $aluno1
);
