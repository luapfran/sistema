<?php

$num1 = filter_input(INPUT_POST, 'numero1');
$num2 = filter_input(INPUT_POST, 'numero2');
$operacao = filter_input(INPUT_POST, 'operacao');

if (isset($num1) && empty($num1)) {
    echo "digite o numero1";
}
if (isset($num2) && empty($num2)) {
    echo "digite o numero2";
}
if (isset($operacao) && empty($operacao)) {
    echo "selecione uma operacao";
}

function calculo($num1, $num2, $operacao) {
    switch ($operacao) {
        case '1':
            return $num1 + $num2;
        case '2':
            return $num1 - $num2;
        case '3':
            return $num1 * $num2;
        case '4':
            return $num1 / $num2;
        case '5':
            return $num1 % $num2;
        default:
            echo "<br/> Por favor escolha um item";
            break;
    }
}
?>