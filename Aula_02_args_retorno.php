
<?php
function novaMensagem() 
{
    return "Wakanda forever!!!";
}

novaMensagem();
$mensagem = novaMensagem();
echo $mensagem;
echo "<br>", novaMensagem();
echo "<br>";

echo "<br>";

function mensagemPara($nome) 
{
    return "Welcome, {$nome}!";
}

echo "<br>", mensagemPara("Weverton");
echo "<br>", mensagemPara("Lucio");

echo "<br>";

function multiplicação($x, $y) 
{
    return $x * $y;
    
}

$a = 4;
$b = 5;
echo "<br>", soma(90, 23);
echo "<br>", soma($a, $b);

