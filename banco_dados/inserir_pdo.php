<div class="titulo">Inserção PDO</div>

<?php

    require_once('conexao_pdo.php');

    $conexao = novaConexao();
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into cadastro(nome, nascimento, email, site, filhos, salario)
    values (?,?,?,?,?,?)";

    try{
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, "João");
        $stmt->bindValue(2, "2001-10-10");
        $stmt->bindValue(3, "joao@gmail.com");
        $stmt->bindValue(4, "https://joao.site");
        $stmt->bindValue(5, 2);
        $stmt->bindValue(6, "2000.00");
        $stmt->execute();
        echo "Secesso";
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }