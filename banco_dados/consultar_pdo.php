<div class="titulo">Consultar PDO</div>

<?php

    require_once("conexao_pdo.php");

    $conexao = novaConexao();
    $sql = "select * from cadastro";
    $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    print_r($resultado);

    echo "<hr>";

    $sql  = "select * from cadastro limit ? offset ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1, 2, PDO::PARAM_INT);
    $stmt->bindValue(2, 3, PDO::PARAM_INT);
    if($stmt->execute()){
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($resultado);
    }

    echo"<hr>";

    $sql = "select * from cadastro where id = ?";
    $stmt = $conexao->prepare($sql);
    if($stmt->execute([56])){
        $resultado = $stmt->fetchAll();
        print_r($resultado);
    }

    $conexao = null;
