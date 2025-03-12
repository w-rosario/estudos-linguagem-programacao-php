<?php
$salario = 2000;


if ($salario <= 1903.98) {
    $aliquota = 0;
} elseif ($salario <= 2826.65) {
    $aliquota = 0.075;
}elseif ($salario <= 3751.05) {
    $aliquota = 0.15;
} elseif ($salario <= 4664.68) {
    $aliquota = 0.225;
} else {
    $aliquota = 0.275;
}

$imposto = $salario * $aliquota;

echo "<strong>Salário:</strong> $salario<br><strong>Imposto:</strong> $imposto";
