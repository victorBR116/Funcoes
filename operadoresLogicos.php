<?php
//Operadores lógicos
//Nos permitem fazer comparações entre expressões
// e ($$ - and)
//ou(|| - or)
// ou exclusivo (xor)
// negação

$idade = 20;
$nome = "Victor";

if(($idade == 24) && ($nome == "Victor")){
    echo "Realmente você é o $nome";
}else{
    echo "É falso você não é o, $nome";
}