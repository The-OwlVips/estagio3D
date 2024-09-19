<?php

class Aluno {
    private string $nome;
    private float $nota1;
    private float $nota2;
    private string $matricula;

    public function getNome(){
        return $this->nome;
    }

    public function getNota1(){
        return $this->nota1;
    }

    public function getNota2(){
        return $this->nota2;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setNota1($nota1){
        $this->nota1 = $nota1;
    }

    public function setNota2($nota2){
        $this->nota2 = $nota2;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    } 
    
    public function calcularMedia(float $n1, float $n2):float{
        $media = ($n1 + $n2)/2;
        return $media;
    }

    public function exibirSituacao(float $media):string{
        if($media >= 5) {
            return "Aprovado!";
        }
        else {
            return "Reprovado";
        }
    }
}


?>