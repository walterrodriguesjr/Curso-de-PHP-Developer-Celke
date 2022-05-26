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
