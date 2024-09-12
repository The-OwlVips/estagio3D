<?php

class Produto {
    private string $codBarra;
    private string $nome;
    private string $preco;

    public function getPreco(){
        return $this->preco;
    }
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setCodigo($codProduto) {
        $this->codBarra = $codProduto;
    }

    public function setNome($nome) {
         $this->nome = $nome;
    }

}

$moto1 = new Produto();

$moto1->setNome("Yamaha FZ25");
$moto1->setPreco("15.000");
$moto1->setCodigo("001");

$moto2 = new Produto();

$moto2->setNome("Suzuki Hayabusa");
$moto2->setPreco("124.500");
$moto2->setCodigo("002");

$moto3 = new Produto();

$moto3->setNome("Kawasaki Ninja 1000");
$moto3->setPreco("51.990");
$moto3->setCodigo("003");

$moto4 = new Produto();

$moto4->setNome("KTM 1390 SUPER DUKE R");
$moto4->setPreco("135.000");
$moto4->setCodigo("004");

$moto5 = new Produto();

$moto5->setNome("Harley Davidson Road King");
$moto5->setPreco("145.250");
$moto5->setCodigo("505");

//echo "R$ ".$moto1->getPreco();
//echo "Nome: ".$moto1->getNome();
//echo "Cod: ".$moto1->getCodigo();

$todosProdutos = [];

$todosProdutos[] = $moto1;
$todosProdutos[] = $moto2;
$todosProdutos[] = $moto3;
$todosProdutos[] = $moto4;
$todosProdutos[] = $moto5;

var_dump($todosProdutos);
