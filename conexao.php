<?php
/*Criação do arquivo php de conexão com o banco de dados*/
     $hostname = "localhost";
     $bancodedados = "projetointegrador";
     $usuario = "root";
     $senha = "";
     $mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);

     if ($mysqli-> connect_error){
          echo "Falha ao conectar: (" .$mysqli-> connect_error .") ".$mysqli->conect_error;
     }else {
        echo "Mensagem foi enviada com sucesso!";
     }
     
     ?>