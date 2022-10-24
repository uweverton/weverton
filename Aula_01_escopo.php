
<?php
function MensagemBoaNoite() 
{
    echo "Boa noite <br>";
    echo "Vamos estudar ? <br>";
}

MensagemBoaNoite();
MensagemBoaNoite();
MensagemBoaNoite();

echo "<br>";

$num = 90;

function troca() 
{
    $num = 100;
    echo "Durante a função: $num <br>";
}

echo "new: $num <br>";
troca();
echo "after: $num <br>";

echo "<br>";

function TrocaNumero() 
{
    global $num;
    $num = 95;
    echo "Durante a função: $num <br>";
}

echo "new: $num <br>";
TrocaNumero();
echo "after: $num <br>";