<?php
 
echo "<h2> Livraria </h2>";
 


function InserirLivros ($nome_do_livro, $data_lancamento, $editora){
  // $conexao chama o nosso banco de dados para o php
  $conexao =  new PDO ("mysql:host=localhost;dbname=tb_livraria", "root", "");

  $Livros = " INSERT INTO  controle_de_livros (nome_do_livro, data_lancamento, editora) value (:nome_do_livro, :data_lancamento, :editora)";

  $preparacao = $conexao->prepare($Livros);
  $preparacao->bindParam(":nome_do_livro", $nome_do_livro);
  $preparacao->bindParam(":data_lancamento", $data_lancamento);
  $preparacao->bindParam(":editora", $editora);

  $preparacao->execute();

}

InserirLivros ($_POST['nome'],$_POST['ano'], $_POST['editora'] ); // o nome que vai aqui no post, tem que ser igual o "name" do input


echo $_POST['nome'];
echo $_POST['ano'];
echo $_POST['editora'];
?>