<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir #2</div>

<?php
    require_once('conexao.php');
    $conexao = novaConexao();
    
    if($_GET['excluir']){
        $excluirSql = 'delete from cadastro where id= ?';
        $stmt = $conexao->prepare($excluirSql);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    $sql = 'select * from cadastro';
    $resultado = $conexao->query($sql);
    $registros = [];

    if($resultado->num_rows > 0){
        while($resultado->fetch_assoc()){
            $registros[] = $resultado->fetch_assoc();
        }
    }elseif($conexao->error){
        echo "Erro ".$conexao->error;
    }

?>

<table class="table table-hover table-dark table-striped">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td> <?= $registro['id']?> </td> 
                <td> <?= $registro['nome']?> </td> 
                <td> <?= $registro['email']?> </td>
                <td> 
                    <a href="http://localhost/curso-php/exercicio.php?dir=banco_dados&file=excluir_2&excluir=<?= $registro['id']?>" class="btn btn-danger">
                        Excluir
                    </a> 
                </td>
            </tr> 
        <?php endforeach ?>   
    </tbody>
</table>

