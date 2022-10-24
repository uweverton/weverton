
<?php
function subtracao($a, $b) 
{
    return $a - $b;
}

echo subtracao(4, 5) . "<br>";
echo subtracao(20, 65, 9) . "<br>";

echo "<br>";

/*function subtracaoCompleta(...$numeros) 
{
    $subtracao = 0;
    foreach($numeros as $num) 
    {
        $subtracao += $num;
    }
    return $subtracao;
}

echo subtracaoCompleta(1, 2, 3, 4, 5);*/

echo "<br>";

/*function membros($titular, ...$dependentes) 
{
    echo "Titular: $titular <br>";
    if($dependentes) 
    {
        foreach($dependentes as $dep) 
        {
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
membros("Fulano", "Beltrano", "Sicrano", "Joãozinho");

echo '<br>';
membros("Edilson", "Ebert");*/