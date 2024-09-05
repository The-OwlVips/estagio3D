<?php

include __DIR__."../app/data/conectarBanco.php";
include __DIR__."../app/model/Aluno.php";

//__DIR__  == Vai servir para indicar um endereço completo da pasta que vc esta

$consulta = $banco->query("SELECT * FROM Aluno");

$alunos = $consulta->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;

foreach($alunos as $aluno){

    $objAluno[] = new aluno();
    $objAluno[$contador]-> setMatricula($aluno["matricula"]);
    $objAluno[$contador]-> setNome($aluno["nome"]);
    $objAluno[$contador]->getNome();

    //echo $alunosBanco["matricula"]."|".$alunosBanco["nome"]."|"."<br>";
}
?>