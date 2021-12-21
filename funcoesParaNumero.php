<?php

$db = 123.56;
$preço = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preço";

echo "<hr>";
//essa função arredonda para baixo
echo floor(2.9);

echo "<hr>";
//essa função arrendonda para cima
echo ceil(2.2);

echo "<hr>";
//essa função ela arredonda para o mais próximo 
echo round(2.2);

echo "<hr>";
//essa função gera números aleatórios
echo rand(1, 50);