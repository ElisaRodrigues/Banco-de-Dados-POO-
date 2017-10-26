<?php

    //try catch vê o erro
    try{
        $conexao = new PDO("mysql:host=localhost;dbname=Empresa", "root", "root");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //todos os erros do mundo vão aparecer
    }
    catch (Exception $e){
        echo "deu errooooo: {$e->getMessage()}";
    }

    $sql = "INSERT INTO tb_funcionarios(nome,sobrenome,email) VALUES ('Jem', 'Oligartchev', 'jem.nephilin@gmail.com')";

    $conexao->exec($sql);

    $sql2 = "SELECT * FROM tb_funcionarios"; //etapa 1

    $consulta = $conexao->query($sql2); //etapa2      -intencao de consultar
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC); // ETAPA 3     -RETORNA UM ARRAY

    print_r($resultado);