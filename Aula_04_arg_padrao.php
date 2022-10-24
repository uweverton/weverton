
<?php
function bemVindo($nome = "Senhor(a)", $sobrenome = "Cliente") 
{
    return "Olá, $nome $sobrenome!<br>";
}

echo bemVindo();
echo bemVindo(null);
echo bemVindo(null, null);
echo bemVindo("Amado", "Mestre");

echo "<br>";

function anotarCompra($comprar, $vender = "Suco") 
{
    echo "Para comprar: $comprar <br>";
    echo "Para vender: $vender <br>";
}

anotarPedido("Hamburguer");
//anotarPedido("Pizza", "Refrigerante");

echo "<br>";

function anotarCompra2($vender = "Água", $comprar) {
    echo "Para comprar: $comprar <br>";
    echo "Para vender: $vender <br>";
}


anotarCompra2("Teclado", "Monitor");