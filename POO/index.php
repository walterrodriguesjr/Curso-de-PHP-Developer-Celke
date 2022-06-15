<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e objetos</title>
</head>

<body>

    <?php

    /* inclui o arquivo */
    require './Usuario.php';
    require "./Cliente.php";
    require "./ClientePessoaFisica.php";
    require "./ClientePessoaJuridica.php";

    $cliente = new Cliente();
    $cliente->logradouro = "Avenida Iguaçu A";
    $cliente->bairro = "Agua Verde";
    $msg = $cliente->verEndereco();
    echo $msg;
    echo "<hr>";

    $clientePf = new ClientePessoaFisica();
    $clientePf->logradouro = "Avenida Iguaçu B";
    $clientePf->bairro = "Agua Verde B";
    $clientePf->nome = "Walter";
    $clientePf->cpf = 31058969854;
    $msgPf = $clientePf->verInformacaoUsuario();
    echo $msgPf;
    echo "<hr>";

    $clientePj = new ClientePessoaJuridica();
    $clientePj->logradouro = "Avenida Iguaçu C";
    $clientePj->bairro = "Agua Verde C";
    $clientePj->nomeFantasia = "Celke";
    $clientePj->cnpj = 01010101010101;
    $msgPj = $clientePj->verInformacaoEmpresa();
    echo $msgPj;
    echo "<hr>";

    /* instancia a classe e cria o objeto $listarusuarios */
    $listarUsuarios = new Usuario();
    $result_usuarios = $listarUsuarios->listar();

    foreach ($result_usuarios as $row_usuario) {
        /* var_dump($row_usuario); */
        extract($row_usuario);

        echo "ID do usuário $id <br>";
        echo "Nome do usuário $nome <br>";
        echo "E-mail do usuário $email <br>";
        echo "<hr>";
    }

    ?>

</body>

</html>