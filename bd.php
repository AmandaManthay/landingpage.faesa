<?php 
   require_once ("conexao.php");

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $endereco = $_POST["endereco"];
   $mensagem = $_POST["mensagem"];

   $sql = "INSERT INTO cadastro (nome, email, endereco, mensagem) VALUES ('$nome', '$email', '$endereco', '$mensagem')";
   $result = $mysqli->query($sql);

   if ($result) {
      echo "";
   } else {
      echo "Erro ao inserir registro: " . $mysqli->error;
   }
?>