<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title> 

</head>
<body>
    
<?php

define('PI', 3.14);
define('TITULO', 'comprimento da circunferência');
$raio = 3;
$circunferencia = 2 * PI * $raio;
echo TITULO . ":" . $circunferencia;


$x = 10;
echo "$x </br>";
$x += 5;
echo "$x </br>";
$x -= 3;
echo "$x </br>";
$x /= 5;
echo "$x </br>";
$x *= 2;
echo "$x </br>";
$x %= 2;
echo "$x </br>";

$s = "Olá";
$s .= " Mundo";
echo "$s </br>";

$a = 5;
$b = $a ++;
echo "$b </br>";


$a = 5;
$b = ++ $a;
echo "$b </br>";

$a = 5;
$resto = $a % 2;
echo $resto;

$a = 5;
$b = 3;

if ($a == $b ) echo "</br>$a e $b são iguais";
if ($a != $b ) echo "$a e $b são diferentes</br>";
if ($a >= $b ) echo "$a é maior que $b</br>";
if ($a <= $b ) echo "$a é menor que $b</br>";
if ($a >= $b ) echo "$a é maior ou igual a $b</br>";
if ($a <= $b ) echo "$a é maior ou igual a $b</br>";

if ($a === $b ) echo "$a e $b possuem valores e tipos iguais</br>";
if ($a !== $b ) echo "$a e $b possuem valores e tipos diferentes</br>";


function foo() {
    return true or false;
}

$a = (false && foo());
$b = (true || foo());
$c = (false and foo());
$d = (true or foo());


$e = false || true;
$f = false or true;
var_dump($e,$f);

$g = true && false;
$h = true and false;
echo "</br>". var_dump($g,$h);

$sexo = "M";

$c = ($a > $b) ? "maior" : "menor ou igual";

$tratamento = ("M" == $sexo) ? "Sr." : "Srª";
echo "$tratamento</br>";

function testeglobal(){
    global $valor, $res;
    $valor +=1;
    $res +=1;
    echo "Valor (dentro da função): " .$valor. ",resultado (dentro da função):" .$res."</br>";

}



$valor = 100;
$res = 10 * $valor;
echo "Valor (antes da função): " .$valor . ", resultado (antes da função): ". $res. "</br>";
testeglobal();
echo "Valor (depois da função): " .$valor. ", resultado (depois da função): " .$res."</br>";




?>

</body>
</html>