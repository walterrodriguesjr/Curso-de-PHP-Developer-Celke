/* 1 */
/* alert("JavaScript Externo") */

/* 2 */
var nome = "Walter";
var idade = 36;
var curso = "JavaScript";
document.write("Meu nome é " + nome + ", tenho " + idade + " anos de idade e estou fazendo o curso de " + curso + ".<hr>");


/* 3 */
const name = "Renan";
const curse = "Celke";
document.write("O aluno " + name + " está inscrito nos cursos da " + curse + ".<hr>");

/* 4 */
function nome_funcao() {
  alert("Login incorreto!");
}

function somar(a, b) {
  var total = a + b;
  alert("Valor da soma: " + total);
}

function desconto(a, b) {
  var totalDesc = a - b;
  return totalDesc;
  /* document.write("Valor final com desconto: " + totalDesc + "<br>"); */
}
var resultTotalDesc = desconto(95, 15);
/* document.write("Valor final com desconto: " + totalDesc + "<hr>"); */

/* 5 */
var valorUM = 10;
var valorDois = 3;
var totalAdicao = valorUM + valorDois;
document.write("Valor da adição: " + totalAdicao + "<br>");

/* 6 */
var c = 5;
var d = 6;
c += d;

document.write("O valor da soma é : " + c + "<hr>");

/* 7 */
var e = 5;
var f = 6;

if (e == f) {
  document.write("os valores: " + e + " e " + f + " são iguais.<hr>");
} else {
  document.write("os valores: " + e + " e " + f + " não são iguais.<hr>");
};

/* 8 */
var g = 6;
var h = 11;

if ((g > 10) && (h > 10)) {
  document.write("Os números: " + g + " e " + h + " são maiores que 10.<hr>");
} else {
  document.write("Os números: " + g + " e " + h + " não são maiores que 10.<hr>");
}

/* 9 */
var qntPessoa = 0;

for (let qntPessoa = 0; qntPessoa <= 10; qntPessoa++) {
  document.write(qntPessoa + " Pessoa entrou no show.<br>");
  if (qntPessoa == 10) {
    document.write("<hr>");
  }
}

/* 10 */
var i = 11;
var j = 13;
var k = 15;

if ((i >= k) && (j >= k)) {
  document.write(i + " e " + j + " são maiores ou iguais a " + k + ".<hr>");
} else if ((i >= k) || (j >= k)) {
  document.write(i + " ou " + j + " é maior ou igual a " + k + ".<hr>");
} else {
  document.write("nenhuma das opções é maior ou igual a " + k + ".<hr>");
};

/* 11 */
var l = 20;


switch (l) {
  case (l > 21):
    document.write(l + " é maior que 21");
    break;

  case (l > 15):
    document.write(l + " é maior que 15");
    break;

  default:
    document.write("Nenhuma das opções.<hr>");
};

/* 12 */
var m = 0;
while (m <= 10) {
  document.write(m + " passada<br>");
  if (m == 10) {
    document.write("<hr>");
  }
  m++;
}

/* 13 */
var n = 2;
do {
  document.write(n + " repetindo<hr>");
  n++;
} while (n < 2);

/* 14 */
var o = 0;
for (let o = 0; o <= 10; o++) {
  document.write(o + " valor<br>");
}
document.write("<hr>");

/* 15 */
var cadeira = {
  cor: "preto",
  altura: 118,
  largura: 74,
  profundidade: 64,
  peso: 17
};

document.write("Cor da cadeira: " + cadeira.cor + "<br>");
document.write("Altura da cadeira: " + cadeira.altura + "<br>");
document.write("Largura da cadeira: " + cadeira.largura + "<br>");
document.write("Profundidade da cadeira: " + cadeira.profundidade + "<br>");
document.write("Peso da cadeira: " + cadeira.peso + "<br>");
document.write("<br>");

var mesa = new Object();
mesa.cor = "preta";
mesa.altura = 80;
mesa.qntCadeiras = 4;
document.write("Cor da mesa: " + mesa.cor + "<br>");
document.write("Altura da mesa: " + mesa.altura + "<br>");
document.write("Quantidade de cadeiras da mesa: " + mesa.qntCadeiras + "<br>");

document.write("<hr>");

/* 16 */
var frutas = [
"Abacate", "Banana", "Maçã", "Pera", "Mamão"
];

frutas.forEach(fruta => {
  document.write(fruta + "<br>");
});
document.write("Total de frutas: " + frutas.length + "<br>");

document.write("<hr>");

/* 17 */
function carConteudo(){
  document.getElementById("conteudo").innerHTML ="lorem asuhs huash h asu hasuhsa us haus haus haush";
}

/* 18 */








