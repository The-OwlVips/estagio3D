<?php

class AlunoLegalEbaaa {
    private float $nota1;
    private float $nota2;
    private string $nome;
    private string $matricula;

    public function __construct(string $matricula, string $nome, float $nota1, float $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->matricula = $matricula;
    }

    public function calcMedia(){
        return ($this->nota1+$this->nota2)/2;
    }

    public function exibirSituacao($media){
        if($media>5){
            return "Aprovado!";
        }
        
            return "Reprovado";
        
    }


}


?>