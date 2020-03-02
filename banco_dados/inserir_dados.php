<div class="titulo">Inserção de dados #01</div>

<?php
    require_once ('conexao.php');

    $sql = "insert into cadastro(nome, nascimento, email, site, filhos, salario)
    values(
        'Marieta', 
        '1989-10-29',
        'marieta123@email.com.br',
        'https://mariera123.site.com.br',
        2,
        13000 
    ),
    (
        'Pedro', 
        '1989-10-29',
        'marieta123@email.com.br',
        'https://mariera123.site.com.br',
        2,
        13000 
    ),
    (
        'Maria', 
        '1989-10-29',
        'marieta123@email.com.br',
        'https://mariera123.site.com.br',
        2,
        13000 
    )";

    $conexao = novaConexao();

    $resultado = $conexao->query($sql);
    if($resultado){
        echo "Dados inseridos com sucesso :)";
    }else{
        echo "Erro:".$conexao->error;
    }


?>