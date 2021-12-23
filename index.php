<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /* Validações
    funções (filter_input - filter-var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL
    */
    
?>
<?php
if(isset($_POST['enviar-formulario'])){
    $erros = array();
    
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
        $erros[] = "idade precisa ser um número inteiro";
    }
    if(!empty($erros)){
        foreach($erros as $erro){
            echo"<li> $erro</li>";
        }
        
    }
}


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Idade:<input type="text" placeholder="digite a sua idade" name="idade"><br>
Email:<input type="text" placeholder="exemplo@exemplo.com" name="email"><br>
Peso:<input type="number" placeholder="Digite o seu peso" name="peso"><br>
IP:<input type="text" placeholder="IP" name="ip"><br>
URL:<input type="text" placeholder="URL" name="url"><br>
<button type="submit" name="enviar-formulario">Enviar</button><br>
</form>

</body>
</html>