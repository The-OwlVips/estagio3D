<?php

$a = readline("Digite o coeficiente a: ");
$b = readline("Digite o coeficiente b: ");
$c = readline("Digite o coeficiente c: ");

$delta =pow($b, 2) - (4 * $a * $c);

if ($delta < 0) {
    return "A equação não possui raizes reais.";
} elseif ($delta >= 0){
    $x = (-$b/2 * $a);
    return "A equação possui uma raiz real: x = " . $x;
} else {
    $x1 = (-$b + sqrt($delta) / (2 * $a));
    $x2 = (-$b - sqrt($delta) / (2 * $a));
    return "A equação possui duas raízes reais: x1 = " . $x1 . " e x2: " . $x2;
}


?>