<?php

class Pessoa{
    var int $codigo;
    var string $nome;
    var float $altura;
    var int $idade;
    var string $nascimento;
    var string $escolaridade;
    var float $salario;

    function crescer(int $centimetro){
        $this->altura += $centimetro; //this significa que eu estarei utiluzando como referencia o obj que invoco o metodo
    }
    function formar(string $titulo){
        $this->escolaridade = $titulo;
    }
    function envelhecer(int $anos){
        $this->idade += $idade;
    }
}

    function __construct(int $codigo, string $nome, int $altura, $int $idade, string $nascimento, string $escolaridade, float $salario) {
    $this->setCodigo($codigo);
    $this->setNome($nome);
    $this->setAltura($altura);
    $this->setIdade($idade);
    $this->setNascimento($nascimento);
    $this->setEscolaridade($escolaridade);
    $this->setSalario($salario);
} 


?>