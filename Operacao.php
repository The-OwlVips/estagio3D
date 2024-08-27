<?php

include "Pessoa.php";

$pessoa1 = new Pessoa();

$pessoa1->nome = "Perseus Jhonson";
$pessoa1->altura = "130";
$pessoa1->idade = 19;

var_dump($pessoa1);
echo "----------------------------------";
$pessoa1-> envelhecer(1);
$pessoa1-> formar("Filho de Poseidon")
?>