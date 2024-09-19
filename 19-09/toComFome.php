<?php

require "AlunoLegalEbaaa.php";

$corvo = new AlunoLegalEbaaa("2002", "Corvine", "7.8", "9.0");
$mediaCorvo = $corvo->calcMedia();
var_dump($mediaCorvo);
var_dump($corvo);
echo $corvo->exibirSituacao($mediaCorvo)."\n";

$teteu = new AlunoLegalEbaaa("1357", "Mateus", "6.8", "8.0");
$mediaTeteu = $teteu->calcMedia();
var_dump($mediaTeteu);
var_dump($teteu);
echo $teteu->exibirSituacao($mediaTeteu)."\n";

$ruffles = new AlunoLegalEbaaa("0333", "Rafael", "8.0", "7.0");
$mediaRuffles = $ruffles->calcMedia();
var_dump($mediaRuffles);
var_dump($ruffles);
echo $ruffles->exibirSituacao($mediaRuffles)."\n";

?>