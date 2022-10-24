
<?php

$subtracao = function ($a, $b) 
{
    return $a - $b;
};

echo $subtracao(9, 5) . "<br>";


echo "<br>";


function rodar($a, $b, $op, $funcao) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

rodar(2, 3, '-', $subtracao);


echo "<br>";


$multiplicacao = function($a, $b) 
{
    return $a * $b;
};

rodar(2, 3, '*', $multiplicacao);

