<?php

    function novaConexao($banco='curso_php'){
        $servidor = 'localhost';
        $usuario = 'root';
        $senha = 'deadpool5';
        $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        
        try{
            $conexao = new PDO("mysql:host={$servidor};dbname={$banco}",$usuario,$senha,$opcoes);
            return $conexao;
        }catch(PDOException $e){
            die('Erro: '.$e->getMessage());
        }
    }
