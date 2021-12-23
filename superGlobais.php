<?php
// Superglobais
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $COOKIE
    $_SESSION
    */

    $x = 7;
    $y = 10;

    function soma(){
       echo $GLOBALS['x'] + $GLOBALS['y'];
         
    }
    soma();
    echo "<hr>";
    //esse comando informa o nome da pasta
    echo $_SERVER['PHP_SELF'] . "<br>";
    
    echo "<hr>";
    //esse comando informa o nome do local que está hosteado 
    echo $_SERVER['SERVER_NAME'] . "<br>";
    
    echo "<hr>";
    //Informa o caminho absoluto do arquivo
    echo $_SERVER['SCRIPT_FILENAME'] . "<br>";

    echo "<hr>";
    //informa o diretorio raiz do script 
    echo $_SERVER['SCRIPT_ROOT'] . "<br>";

    echo "<hr>";
    //informa a porta do servidor web
    echo $_SERVER['SCRIPT_PORT'] . "<br>";

    echo "<hr>";
    //informa o endereço ip de onde o usuário está acessando a página
    echo $_SERVER['SCRIPT_ADDR'] . "<br>";


    