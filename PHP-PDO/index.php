<?php

include_once "conexao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-PDO</title>
</head>

<body>

    <?php

    echo "<h2>Listar Usuários</h2>";

    /* cria a query de select de usuarios e a atribui a uma variavel, variavel $result_usuarios
     recebe a configuração de conexão $conn e executa o método prepare() usando como parametro
      a query de select, em seguida a mesma variavel executa com o método execute() */
    $_c = "SELECT * FROM usuarios";
    $result_usuarios = $conn->prepare($_c);
    $result_usuarios->execute();

    /* cria um loop o qual exibe os usuarios na tela */
    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        /* var_dump($row_usuario); */
        echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "E-mail: " . $row_usuario['email'] . "<br>";
        echo "Senha: " . $row_usuario['senha'] . "<br>";
        echo "Cadastro: " . date('d/m/Y H:i:s', strtotime($row_usuario['created'])) . "<br>";
        if (!empty($row_usuario['modified'])) {
            echo "Editado: " . date('d/m/Y H:i:s', strtotime($row_usuario['modified'])) . "<br>";
        } else {
            echo "Editado: " . "Não informado" . "<br>";
        }
        echo "<hr>";
    }

    echo "<h2>Listar usuários otimizado</h2>";
    /* retornando a query, porem selecionando os atributos em especifíco, em vez de tudo (*) */
    $_c_b = "SELECT id, nome, email, senha, created, modified FROM usuarios";
    $result_usuarios_b = $conn->prepare($_c_b);
    $result_usuarios_b->execute();

    while ($row_usuario_b = $result_usuarios_b->fetch(PDO::FETCH_ASSOC)) {
        /* var_dump($row_usuario_b); */
        extract($row_usuario_b);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Senha: $senha <br>";
        echo "Cadastro: " . date('d/m/Y H:i:s', strtotime($created)) . "<br>";
        if (!empty($modified)) {
            echo "Editado: " . date('d/m/Y H:i:s', strtotime($modified)) . "<br>";
        } else {
            echo "Editado: " . "Não informado" . "<br>";
        }
        echo "<hr>";
    }
    ?>

    <h1>15-Como usar o LIMIT e OFFSET com MySQL e PHP</h1>
    <h2>Listar Usuários com LIMIT</h2>
    <?php

    $query_usuarios_c = "SELECT id, nome , email FROM usuarios LIMIT 2";
    $result_usuarios_c = $conn->prepare($query_usuarios_c);
    $result_usuarios_c->execute();

    while ($row_usuarios_c = $result_usuarios_c->fetch(PDO::FETCH_ASSOC)) {
        /* var_dump($row_usuarios_c); */
        extract($row_usuarios_c);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";
    }
    ?>
    <h2>Listar Usuários com LIMIT e OFFSET</h2>
    <?php

    /* o OFFSET diz a query a partir de qual dado será usado a busca */
    $query_usuarios_d = "SELECT id, nome, email FROM usuarios LIMIT 3 OFFSET 4";
    $result_usuarios_d = $conn->prepare($query_usuarios_d);
    $result_usuarios_d->execute();

    while ($row_usuarios_d = $result_usuarios_d->fetch(PDO::FETCH_ASSOC)) {
        /* var_dump($row_usuarios_d); */
        extract($row_usuarios_d);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";
    }
    ?>

    <h2>Visualizar usuario usando o WHERE</h2>
    <?php

    $query_usuarios_e = "SELECT id, nome, email
                         FROM usuarios
                         WHERE nome = 'Renan'
                         LIMIT 1";
    $result_usuario_e = $conn->prepare($query_usuarios_e);
    $result_usuario_e->execute();

    $row_usuario_e = $result_usuario_e->fetch(PDO::FETCH_ASSOC);
    /* var_dump($row_usuario_e); */
    extract($row_usuario_e);

    echo "ID: $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "<hr>";
    ?>

    <h2>Visualizar usuario ativo usando chave extrangeira Usuario Ativo</h2>
    <?php

    $query_usuarios_f = "SELECT id, nome, email, sists_usuario_id
                         FROM usuarios
                         WHERE sists_usuario_id = 1 
                         LIMIT 3";
    $result_usuario_f = $conn->prepare($query_usuarios_f);
    $result_usuario_f->execute();

    while ($row_usuarios_f = $result_usuario_f->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuarios_f);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $sists_usuario_id <br>";
        echo "<hr>";
    }
    ?>

    <h2>Visualizar usuario ativo usando chave extrangeira Níveis de acesso</h2>
    <?php

    $query_usuarios_g = "SELECT id, nome, email, sists_usuario_id, niveis_acesso_id
                         FROM usuarios
                         WHERE niveis_acesso_id = 3 
                         LIMIT 3";
    $result_usuario_g = $conn->prepare($query_usuarios_g);
    $result_usuario_g->execute();

    while ($row_usuarios_g = $result_usuario_g->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuarios_g);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $sists_usuario_id <br>";
        echo "Id do Nível de acesso: $niveis_acesso_id <br>";
        echo "<hr>";
    }
    ?>

    <h2>Listar usuários com duas condições AND</h2>

    <?php

    $query_usuarios_i = "SELECT id, nome, email
                         FROM usuarios
                         WHERE sists_usuario_id = 2
                         AND niveis_acesso_id = 3";

    $result_usuario_i = $conn->prepare($query_usuarios_i);
    $result_usuario_i->execute();

    while ($row_usuario_h = $result_usuario_i->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuario_h);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $sists_usuario_id <br>";
        echo "Id do Nível de acesso: $niveis_acesso_id <br>";
        echo "<hr>";
    }

    ?>

    <h2>Listar usuários com duas condições OR</h2>

    <?php

    $query_usuarios_i = "SELECT id, nome, email
                         FROM usuarios
                         WHERE (sists_usuario_id = 1
                         OR niveis_acesso_id = 1)";

    $result_usuario_i = $conn->prepare($query_usuarios_i);
    $result_usuario_i->execute();

    while ($row_usuario_i = $result_usuario_i->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuario_i);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $sists_usuario_id <br>";
        echo "Id do Nível de acesso: $niveis_acesso_id <br>";
        echo "<hr>";
    }
    ?>

    <h2>Listar usuários usando o ORDER BY</h2>

    <?php
    $query_usuarios_J = "SELECT id, nome, email
                         FROM usuarios
                         ORDER BY id DESC";

    $result_usuario_J = $conn->prepare($query_usuarios_J);
    $result_usuario_J->execute();


    while ($row_usuario_J = $result_usuario_J->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuario_J);

        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Id da Situação: $sists_usuario_id <br>";
        echo "Id do Nível de acesso: $niveis_acesso_id <br>";
        echo "<hr>";
    }
    ?>

    <h2>Inserindo registros usando INSERT INTO</h2>

    <?php
    /* $query_usuario_k = "INSERT INTO usuarios (nome, email, senha, sists_usuario_id, niveis_acesso_id, created)
                        VALUES ('Luiz', 'luiz@celke.com.br', '888', 3, 3, NOW())";
    $result_usuarios_k = $conn->prepare($query_usuario_k); */

    /* colocar a variável direto na query */

    /* $nome = "Luiz";
    $email = "luiz@celke.com.br";
    $senha = "888";
    $sists_usuario_id = 3;
    $niveis_acesso_id = 2;

    $query_usuarios_k = "INSERT INTO usuarios (nome, email, senha, sists_usuario_id, niveis_acesso_id, created)
                         VALUES ('$nome', '$email', '$senha', $sists_usuario_id', '$niveis_acesso_id', NOW())"; */

    /* atribuir o link na query e substiruir o link pelo valor com bindParam */
    /* instrução recomendada */

    $nome = "Luiz";
    $email = "luiz@celke.com.br";
    $senha = "888";
    $sists_usuario_id = 3;
    $niveis_acesso_id = 2;

    $query_usuarios_k = "INSERT INTO usuarios (nome, email, senha, sists_usuario_id, niveis_acesso_id, created)
                         VALUES (:nome, :email, :senha, :sists_usuario_id, :niveis_acesso_id, NOW())";

    $cad_usuario = $conn->prepare($query_usuarios_k);
    $cad_usuario->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cad_usuario->bindParam(':email', $email, PDO::PARAM_STR);
    $cad_usuario->bindParam(':senha', $senha, PDO::PARAM_STR);
    $cad_usuario->bindParam(':sists_usuario_id', $sists_usuario_id, PDO::PARAM_INT);
    $cad_usuario->bindParam(':niveis_acesso_id', $niveis_acesso_id, PDO::PARAM_INT);
    $cad_usuario->execute();

    if ($cad_usuario->rowCount()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: Usuario não cadastrado";
    }
    echo "<hr>";
    ?>

</body>

</html>