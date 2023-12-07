<?php
 
echo "<h2> Livraria </h2>";
 


function InserirLivros ($nome_do_livro, $data_lancamento, $editora){
  // $conexao chama o nosso banco de dados para o php
  $conexao =  new PDO ("mysql:host=localhost;dbname=tb_livraria", "root", "");

  $Livros = " INSERT INTO  pedido (nome_usuario, nome_livro, data_lancamento, data_compra,valor) value (:nome_usuario, :nome_livro, :data_lancamento, :data_compra, :valor)";

  $preparacao = $conexao->prepare($Livros);
  $preparacao->bindParam(":nome_usuario", $nome_usuario);
  $preparacao->bindParam(":nome_livro", $nome_livro);
  $preparacao->bindParam(":data_lancamento", $data_lancamento);
  $preparacao->bindParam(":data_compra", $data_compra);
  $preparacao->bindParam(":valor", $valor);

  $preparacao->execute();

}


InserirLivros ();


?>