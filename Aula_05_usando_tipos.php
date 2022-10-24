
<?php
function potencia($x, $b) 
{

    return $x ^ $b;
}

echo potencia(13, 21) . "<br>";
echo potencia(1.4, 9.5) . "<br>";

echo "<br>";

function potencia2(int $x, int $b)
{
    return $x ^ $b;
}

echo potencia2(4, 9) . "<br>";
echo potencia2(1.7, 2.5) . "<br>";

echo "<br>";

