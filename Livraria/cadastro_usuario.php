<?php
 
echo "<h2> Livraria </h2>";
 


function InserirLivros ($nome_do_livro, $data_lancamento, $editora){
  // $conexao chama o nosso banco de dados para o php
  $conexao =  new PDO ("mysql:host=localhost;dbname=tb_livraria", "root", "");

  $Livros = " INSERT INTO  cadastro_usuario (nome_usuario, data_nascimento, email, cpf, endereco, bairro, estado, telefone) value (:nome_usuario, :data_nascimento, :email,:cpf, :endereco, :bairro, :estado, :telefone )";

  $preparacao = $conexao->prepare($Livros);
  $preparacao->bindParam(":nome_usuario", $nome_usuario);
  $preparacao->bindParam(":data_nascimento", $data_nascimento);
  $preparacao->bindParam(":email", $email);
  $preparacao->bindParam(":cpf", $cpf);
  $preparacao->bindParam(":endereco", $endereco);
  $preparacao->bindParam(":bairro", $bairro);
  $preparacao->bindParam(":estado", $estado);
  $preparacao->bindParam(":telefone", $telefone);

  $preparacao->execute();

}


InserirLivros ();


?>