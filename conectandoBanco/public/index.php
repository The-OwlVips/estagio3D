<?php

include __DIR__."../app/data/conectarBanco.php";
include __DIR__."../app/model/Aluno.php";

//__DIR__  == Vai servir para indicar um endereço completo da pasta que vc esta

$alunosBanco = $banco->query("SELECT * FROM Aluno");
$alunoBanco = alunoBanco->fetchAll();

$aluno = new Aluno();

$objAluno->setNome($alunoBanco[0]['nome']);
$objAluno->setMatricula($alunoBanco[0]['matricula']);

?>