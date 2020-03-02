<div class="titulo">Delete PDO</div>

<?php

    require_once("conexao_pdo.php");

    $conexao = novaConexao();

    try{
        $sql = "delete from cadastro where id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(1, 15, PDO::PARAM_INT);
         $stmt->execute();
        echo "Sucesso ao exluir registro";
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }
    