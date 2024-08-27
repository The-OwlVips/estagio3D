<?php

class Produto {
   private string $codigo;
   private string $nome;
   private float $preco;
   private int $quant = 0;

    public function __construct(string $codigo, string $nome, float $preco, int $quant) {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setCodigo($codigo);
        $this->addEstoque($quant);
    }

    public function getCodigo():string{
        return $this->codigo;
    }     
    public function getNome():string{
        return $this->nome;
    }
    public function getPreco():string{
        return $this->preco;
    }
    public function getQuant(int $quantProduto){
        $this->$quant = $quantProduto;
    }
    public function setCodigo(string $codigo){
        $this->codigo = $codigo;
    }
    public function setPreco(float $novoPreco){
        $this->preco = $novoPreco;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function addEstoque(int $novaQuant){
        $this-> $quant += $novaQuant;
    }
    public function removerEstoque(int $novaQuant){
        $this-> $quant -= $novaQuant;
    }
}
?>