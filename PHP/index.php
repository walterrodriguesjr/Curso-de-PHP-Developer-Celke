<?php

/* 5 */
echo "teste curso PHP Celke";

echo "<br>";

/* 6 */
$idade = 22;
$nome = "Walter";
echo "Meu nome é " . $nome . " e tenho " . $idade . " anos de idade.";

echo "<br>";

/* 7 */
$result = "2";
var_dump($result);
echo "<br>";
$result_dois = $result + 1;
var_dump($result_dois);
echo "<br>";
$result_tres = (string)$result_dois;
var_dump($result_tres);
echo "<br>";
var_dump($result_quatro = (float)$result_tres);

echo "<br>";

/* 8 */
$x = 10;
$y = 5;
$result_soma = $x + $y;
echo "O resultado da soma é: " . $result_soma;

echo "<br>";

/* 9 */
$a = 1;
$b = 2;
$c = 3;
$result_atribuicao = 6;
echo "Somar o valor $result_atribuicao pelo valor $a <br>";
$result_atribuicao += $a;
echo "Resultado da adição: $result_atribuicao <br>";

/* 10 */
$aa = 5;
echo "O número é: " . $aa++ . "<br>";
echo "O número incrementado é: " . $aa . "<br>";

/* 11 */
$vv = 11;
if ($vv == 10) {
    echo "O número é igual a 10";
} else {
    echo "O número não é igual a 10";
}

echo "<br>";

/* 12 */
$numA = 10;
$numB = 5;
if ($numA && $numB === 10) {
    echo "O número " . $numA . " e o  " . $numB . " são iguais";
} else {
    echo "O número " . $numA . " e o  " . $numB . " não são iguais";
}

echo "<br>";

/* 13 */
$numf = 11;
if($numf == 10){
    echo "é igual a 10<br>";
}else{
    echo "não é igual a 10<br>";
};

/* 14 */
$numf = 15;
if($numf == 11){
    echo "é igual a 11<br>";
}else{
    echo "não é igual a 11<br>";
};