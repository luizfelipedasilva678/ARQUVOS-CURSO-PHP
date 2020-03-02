<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Consultar Registros</div>

<?php
    require_once('conexao.php');

    $conexao = novaConexao();
    $sql = "select id,nome,nascimento,email from cadastro";
    $conexao = novaConexao();
    $resultado = $conexao->query($sql);
    $resgistros = [];

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $resgistros[] = $row;
        }
    }elseif($conexao->error){
        echo "Erro: ".$conexao->error;
    }
    $conexao->close();
?>

<table class="table">
    <thead>
        <th>Nome</th>
        <th>Nescimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($resgistros as $registro):?>
            <tr>
               <td> <?=$registro['nome']?> </td>
               <td> <?=$registro['nascimento']?> </td>
               <td> <?=$registro['email']?> </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

