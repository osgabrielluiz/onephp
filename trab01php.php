<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trab 01 - PHP</title>
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

echo "</br>A soma vale ". ($n1 + $n2);

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
if ($a != $b ) echo "</br>$a e $b são diferentes</br>";
if ($a >= $b ) echo "</br>$a é maior que $b</br>";
if ($a <= $b ) echo "</br>$a é menor que $b</br>";
if ($a >= $b ) echo "</br>$a é maior ou igual a $b</br>";
if ($a <= $b ) echo "</br>$a é maior ou igual a $b</br>";

if ($a === $b ) echo "</br>$a e $b possuem valores e tipos iguais</br>";
if ($a !== $b ) echo "</br>$a e $b possuem valores e tipos diferentes</br>";


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
    echo "</br>Valor (dentro da função): " .$valor. ",resultado (dentro da função):" .$res."</br>";

}



$valor = 100;
$res = 10 * $valor;
echo "Valor (antes da função): " .$valor . ", resultado (antes da função): ". $res. "</br>";
testeglobal();
echo "Valor (depois da função): " .$valor. ", resultado (depois da função): " .$res."</br>";


 
	$float = (int) 10.9; 
	var_dump( $float );
	 
	echo '</br>' . PHP_EOL;
	 
	$float2 = (int) 10.1;
	 
	var_dump( $float2 );




?>



</body>
</html>