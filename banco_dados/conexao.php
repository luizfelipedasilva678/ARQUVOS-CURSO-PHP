<?php

    function novaConexao($banco = 'curso_php'){
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = 'deadpool5';

        $conexao = new mysqli($servidor,$usuario,$senha,$banco);

        if($conexao->connect_error){
            die('Error'.$conexao->connect_error);
        }else{
            return $conexao;
        }

    }