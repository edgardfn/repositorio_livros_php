<?php
session_start();
include_once("conexao.php");

//PEGAR O PARAMETRO PAGINA DA URL:
$current_page = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
//Caso não tenha params pagina na url ele define como pagina 1:
$page = (!empty($current_page)) ? $current_page : 1;
//Setar a quantidade de itens por pagina:
$qnt_result_pg = 8;
//Calcular o inicio da visualuzação:
$start = ($qnt_result_pg * $page) - $qnt_result_pg;

$sql = "SELECT * FROM books ORDER BY id DESC LIMIT $start, $qnt_result_pg ";
$result_books = $conn->prepare($sql);
$result_books->execute();
$result = $result_books->fetchAll();

//Paginação, somar a quantidade de livros:
$sql_result_pg = "SELECT COUNT(id) AS num_result from books";
$result_pg = $conn->prepare($sql_result_pg);
$result_pg->execute();
$total_pages = $result_pg->fetchAll();

//Quantidade de paginas:
$quant_pg = ceil($total_pages[0]['num_result'] / $qnt_result_pg);
//Limitar os links antes e depois:
$max_links = 2;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php include 'includes/header.php' ?>

        <div class="container-index-main">
            <div class="container-header-list-books">
                <h2>Livros Cadastrados</h2>
                <a href="cadastrar.php" style="text-decoration: none;">
                    <button class="button-index-register">Cadastrar</button>
                </a>

            </div>

            <div class="container-books-list">
                <div class="container-header-books-list">
                    <span>ID</span>
                    <span>Nome</span>
                    <span>Autor</span>
                    <span>Editora</span>
                    <span>Ano de Lançamento</span>
                    <span>Gênero</span>
                </div>
                <?php 
                
                    foreach ($result as $value) {
                        echo "<div class='content-books-list'>";
                        echo "<div>".$value['id']."</div>";
                        echo "<div>".$value['name']."</div>";
                        echo "<div>".$value['author_name']."</div>";
                        echo "<div>".$value['publisher_name']."</div>";
                        echo "<div>".$value['year']."</div>";
                        echo "<div>".$value['genre']."</div>";
                        echo "</div>";
                    }

                ?>
            </div>

            <div class="container-pagination">
                <a href="index.php?pagina=1"><img src="https://www.svgrepo.com/show/373094/previous.svg"
                        alt="icon-previous"></a>
                <?php
                    for($previous_page = $page - $max_links; $previous_page  <= $page - 1; $previous_page ++) {
                        if($previous_page  >= 1) {
                            echo "<a href='index.php?pagina=$previous_page '>$previous_page </a>";
                        }
                    }
                    echo "<span>$page</span>"; 
                    for($next_page = $page + 1; $next_page <= $page + $max_links; $next_page++) {
                        if($next_page  <= $quant_pg){
                            echo "<a href='index.php?pagina=$next_page '>$next_page </a>";
                        }
                    }
                    echo "<a href='index.php?pagina=$quant_pg'><img src='https://www.svgrepo.com/show/373061/next.svg' alt='icon-next'></a>"
                ?>

            </div>

        </div>

        <?php include 'includes/footer.php' ?>
    </div>

</body>

</html>