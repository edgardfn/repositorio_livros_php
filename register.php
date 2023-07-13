<?php

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['name'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert-warning'>Erro: Necessário preencher o campo nome!</div>"];
} elseif (empty($dados['author_name'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert-warning'>Erro: Necessário preencher o campo autor!</div>"];
} elseif (empty($dados['publisher_name'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert-warning'>Erro: Necessário preencher o campo editora!</div>"];
} elseif (empty($dados['year'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert-warning'>Erro: Necessário preencher o campo ano!</div>"];
} elseif (empty($dados['genre'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert-warning'>Erro: Necessário selecionar o genêro!</div>"];
} else {
    //VERIFICAR SE LIVRO JÁ EXISTE:
    $query_search_name_book = "SELECT id FROM books WHERE name='". $dados['name'] ."'";
    $search_book = $conn->prepare($query_search_name_book);
    $search_book->execute();
    $result = $search_book->fetchAll();
    if(count($result) > 0) {
        $retorna = ['erro' => true, 'msg' => "<div class='alert-warning' role='alert'>Livro já cadastrado !</div>"];
    } else {
        $query_book = "INSERT INTO books (name, author_name, publisher_name, year, genre) VALUES ('".$dados['name']."','".$dados['author_name']."','".$dados['publisher_name']."','".$dados['year']."','".$dados['genre']."')";
        $cad_book = $conn->prepare($query_book);
        $cad_book->bindParam(':name', $dados['name'], PDO::PARAM_STR);
        $cad_book->bindParam(':author_name', $dados['author_name'], PDO::PARAM_STR);
        $cad_book->bindParam(':publisher_name', $dados['publisher_name'], PDO::PARAM_STR);
        $cad_book->bindParam(':year', $dados['year'], PDO::PARAM_INT);
        $cad_book->bindParam(':genre', $dados['genre'], PDO::PARAM_STR);
        $cad_book->execute();

        if ($cad_book->rowCount()) {
            $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Livro cadastrado com sucesso!</div>"];
        } else {
            $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o livro!</div>"];
        }
    }


    
}

echo json_encode($retorna);