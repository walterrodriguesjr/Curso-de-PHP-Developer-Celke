<?php
session_start();

include_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Celke - Listar</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
<h2>Listar Usuários</h2>

<?php 

    filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['PesqUsuario'])){
        var_dump($dados);
    }

?>

    <form action="" method="post">
        <label for="">Pesquisar</label>
        <input type="text" name="text_pesquisar" placeholder="Pesquisar pelo termo?"><br><br>

        <input type="submit" value="Pesquisar" name="PesqUsuario"><br><br>

    </form>

    <a href="cadastrar.php">Cadastrar</a><br>
    
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC";
    $result_usuarios = $conn->prepare($query_usuarios);
    $result_usuarios->execute();

    while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuario);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<a href='editar.php?id_usuario=$id'>Editar</a><br>";
        echo "<a href='apagar.php?id_usuario=$id'>Apagar</a><br>";
        echo "<hr>";
    }
    ?>

    <h2>Listar Usuários</h2>
    <?php
    if (!empty($dados['PEsqUsuario'])){
        $nome2 = "%" . $dados['texto_pesquisar'] . "%";
    
    $query_usuario2 = "SELECT id, nome, email
                    FROM usuarios 
                    WHERE nome LIKE :nome 
                    ORDER BY id DESC";
    $result_usuarios2 = $conn->prepare($query_usuario2);
    $result_usuarios2->bindParam(':nome', $nome2, PDO::PARAM_STR);
    $result_usuarios2->execute();
    }
    while ($row_usuario2 = $result_usuarios2->fetch(PDO::FETCH_ASSOC)) {
        extract($row_usuario2);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "<hr>";
    }
    
    ?>


</body>

</html>