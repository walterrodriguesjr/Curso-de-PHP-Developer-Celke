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
if ($numf == 10) {
    echo "é igual a 10<br>";
} else {
    echo "não é igual a 10<br>";
};

/* 14 */
$numf = 15;
if ($numf == 11) {
    echo "é igual a 11<br>";
} else {
    echo "não é igual a 11<br>";
};

/* 15 */
$numg = 20;

if ($numg == 10) {
    echo "$numg é igual a 10<br>";
} else if ($numg == 15) {
    echo "$numg é igual a 15<br>";
} else {
    echo "nenhuma igualdade<br>";
}

/* 16 */
$numh = 22;
switch ($numh) {
    case 1:
        echo "número 1<br>";
        break;
    case 22:
        echo "número 22<br>";
        break;
    default:
        echo "nenhum número<br>";
        break;
}

/* 17 */
$numI = 0;
while ($numI <= 10) {
    echo $numI . " usuário<br>";
    $numI++;
};

/* 18 */
$numJ = 1;
do {
    echo $numJ . " repetindo<br>";
    $numJ++;
} while ($numJ <= 1);

/* 19 */
$numK = 0;
for ($numK = 0; $numK < 10; $numK++) {
    echo "Cliente número: " . $numK . "<br>";
}

/* 20 */
$alunos = ["A", "B", "C", "D"];
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno . "<br>";
}

/* 21 */
$codigo = "cursophp";
function promocao($valor)
{
    echo "Acessou o curso<br>";
    echo "Parâmetro: $valor <br>";
    if ($valor == "cursophp") {
        $msg = "Código válido<br>";
    } else {
        echo "Código Inválido<br>";
        $msg = "Código Inválido<br>";
    }
    return $msg;
};
$retorno_dados = promocao($codigo);
echo $retorno_dados . "<br>";

/* 22 */
echo "<h4>Passagem por valor</h4>";

function salario($salario)
{
    $salario += 50;
    echo "Dentro da função - Salário com aumento: $salario <br>";
}
$salario = 8200;
salario($salario);
echo "Salário sem aumento: $salario <br>";
echo "<hr>";

function salario_a($numN)
{
    $numN += 50;
    echo "Fora da função - imprimindo o retorno: $numN <br>";
    return $numN;
}
$salario = 8500;
$salario_com_aumento = salario_a($salario);
echo "<hr>";

echo "<h4>Passagem por referência</h4>";
function salario_b(&$numO)
{
    $numO += 200;
    echo "Dentro da função - Salário com aumento: $numO <br>";
}
$salario_b = 9300;
echo "Salário sem aumento: $salario_b <br>";
salario_b($salario_b);
echo "Salário com aumento: $salario_b <br>";

/* 23 */
function exibe($numP)
{
    echo "Valor passado para a função: $numP <br>";
}
exibe(10);

/* 24 */
/* cookie válido por 7 dias */
setcookie("afiliado", "5323", time() + (7 * 24 * 3600));
if (isset($_COOKIE['afiliado'])) {
    $afiliado = $_COOKIE['afiliado'];
    echo "Número do afiliado: " . $afiliado . "<br>";
}



