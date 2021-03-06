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

    public function calcularMedia()
    {
        $media = (($this->notaDaProva1 * 2.5) + ($this->notaDaProva2 * 2.5) + ($this->notaDeTrabalho * 2)) / 7;
        return (float) number_format($media, 2);
    }

    public function calcularNotaNecessariaParaProvaFinal()
    {
        $media = $this->calcularMedia();

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
