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
        return $media;
    }
    public function calculaQuantoPrecisaParaProvaFinal()
    {
        $media = $this->calculaMedia();

        if($media > $this->mediaConstante){
            return 0;
        }
        else{
            return $this->mediaConstante - $media;
        }
    }
}

$aluno1 = new AlunosMatriculados(123, "Henrique", 3, 5, 2);
var_dump(
    $aluno1->calculaMedia(),
    $aluno1->calculaQuantoPrecisaParaProvaFinal()
);
