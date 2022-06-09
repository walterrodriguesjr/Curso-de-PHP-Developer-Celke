<?php

    /* variáveis recebendo as propriedades do banco de dados */

    /* início da conexão com banco de dados utilizando o PDO */
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "celke_pdo";
    $port = 3306;

    /* a variável $conn recebe a conexão com o banco de dados  */
    /* conexão com a porta */
    try {
        $conn = new PDO("mysql:host=$host; port=$port; dbname=" . $dbname, $user, $pass);
        echo "Conexão com banco de dados realizado com sucesso!";
    } catch (PDOException $err) {
        echo "Erro: Conexão com banco de dados não foi realizado com sucesso. Erro gerado " . $err->getMessage();
    }
    /* fim da conexão com banco de dados utilizando o PDO */
