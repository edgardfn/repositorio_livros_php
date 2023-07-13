<?php
    //Receber dados do formulário
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    //Verificar se usuário clicoi no botão
    if(!empty($data['CadBook'])) {
        $empty_input = false;

        //Retirar espaço em brtanco dos inputs do formulário, não retira espaço em branco entre as letras:
        $data = array_map('trim', $data);

        //Verificar se todos os campos foram preenchidos:
        if(in_array("",$data)){
            $empty_input = true;
            echo "<p style='color: #ff0000'>Necessário preencher todos os campos!!</p>";
        }

        if(!$empty_input) {
            //Inserir dados usando link, parte 1:
            $query_book = "INSERT INTO books (name, author_name, publisher_name, year, genre) VALUES ('".$data['name']."','".$data['author_name']."','".$data['publisher_name']."','".$data['year']."','".$data['genre']."')";

            //Inserir dados sem link:
            $cad_book = $conn->prepare($query_book);

            //Inserir dados usando link, parte 2:
            $cad_book->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $cad_book->bindParam(':author_name', $data['author_name'], PDO::PARAM_STR);
            $cad_book->bindParam(':publisher_name', $data['publisher_name'], PDO::PARAM_STR);
            $cad_book->bindParam(':year', $data['year'], PDO::PARAM_STR);
            $cad_book->bindParam(':genre', $data['genre'], PDO::PARAM_STR);

            $cad_book->execute();
            //Caso inserção de dados tenha sido realizado com sucesso:
            if($cad_book->rowCount()){
                echo "<p style='color: green;'>Livro cadastrado com sucesso!!</p>";
                //Limpar dados dos inputs apos cadastro realizado com sucesso:
                unset($data);

            } else {
                echo "<p style='color: #ff0000'>Erro ao cadastrar livro!!</p>";
            }
        } 

        
    }
?>