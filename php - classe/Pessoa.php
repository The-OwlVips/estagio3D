<?php

class Pessoa {
    private string $cpf;
    private string $nome;
    private string $idade;

    public function setCpf(){
        return $this->cpf;
    }

    public function setNome(){
        return $this->nome;
    }

    public function setIdade(){
        return $this->idade;
    }

}

?>