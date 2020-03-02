<div class="titulo">Alterar PDO</div>

<?php

    require_once("conexao_pdo.php");
    $conexao = novaConexao();
    
    $sql = 'update  cadastro set 
    nome = ?, 
    nascimento=?, 
    email=?, 
    site=?, 
    filhos=?,
    salario=? 
    where id = ?';

    $stmt = $conexao->prepare($sql);
    
    $resultado = $stmt->execute([
        'Gui',
        '1980-12-12',
        'gui@gui.com.br',
        'https://gui.co',
        1,
        12000,
        14
    ]);

    if($resultado){
        echo "Sucesso";
    }