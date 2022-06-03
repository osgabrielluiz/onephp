<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas com PHP</title>
</head>
<body>
    
<?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) / 2;

    echo "<h2>Valores recebidos: $n1 e $n2</h2>";

    
    echo "Contas matemáticas com php.</br>";
    
    echo "A soma vale ". ($n1 + $n2);
    
    echo "</br> A subtração vale ". ($n1 - $n2);
    
    echo "</br> A multiplicação vale ". ($n1 * $n2);
    
    echo "</br> A divisão vale ". ($n1 / $n2);
    
    echo "</br> O modulo vale ". ($n1 % $n2);
    
    echo "</br> A média vale ". ($m);

    echo "Contas matemáticas com php.</br>";

    echo "A soma vale ". ($n1 + $n2);

    echo "</br> A subtração vale ". ($n1 - $n2);

    echo "</br> A multiplicação vale ". ($n1 * $n2);

    echo "</br> A divisão vale ". ($n1 / $n2);

    echo "</br> O modulo vale ". ($n1 % $n2);

    echo "</br> A média vale ". ($m);

    echo "</br> Valor absoluto de $n2 é ". abs($n2);
 
    echo "</br> O valor de $n1<sup>$n2</sup> é ". pow($n1, $n2);
 
    echo "</br> A raiz de $n1 é ". sqrt($n1);
 
    echo "</br> O valor de $n2 arredondado é " . round($n2); //no lugar de round, pode ser usado ceil(arredonda pra cima) ou floor(arredonda para baixo).
                  
    echo "</br> A parte inteira de $n2 é ". intval($n2);
 
    echo "</br> O valor de $n1 em moeda é R$" . number_format($n1, 2, ",");

    $preco = $_GET["x"];

    echo "</br> O preço do produto é " .number_format($preco,2);

    $preco += $preco * 10 / 100;
    //para desconto basta inverter o + por -
    
    echo "</br> O novo preço com 10% de aumento é ".number_format($preco,2);

    $atual_ano = $_GET["ano"];

    echo "</br> O ano atual é $atual_ano e o ano anterior é ".--$atual_ano;
    
    


?>


</body>
</html>