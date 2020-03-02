<div class="titulo">Excluir #01</div>

<?php

    require_once('conexao.php');
    
    $conexao = novaConexao();
    $sql = "delete from cadastro where id = 2";
    $resultado = $conexao->query($sql);
    
    if($resultado){
        echo "Sucesso :)";
    }else{
        echo "Erro ".$conexao->error;
    }