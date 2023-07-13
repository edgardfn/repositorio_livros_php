<?php
include_once './conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>

<body>

    <div class="container">
        <?php include 'includes/header.php' ?>

        <div class="container-main">
            <div class="container-register">
                <h2>Cadastrar Livro</h2>

                <span id="msgRegAlertError"></span>

                <form class="form-register" name="cad-usuario" id="books-register-form" method="POST" action="">

                    <input class="input-register" maxlength="30" type="text" name="name" id="name"
                        placeholder="Nome do Livro..."
                        value="<?php echo isset($data['name']) ? $data['name'] : ""  ?>"><br><br>


                    <input class="input-register" maxlength="30" type="text" name="author_name" id="author_name"
                        placeholder="Nome do Autor..."
                        value="<?php echo isset($data['author_name']) ? $data['author_name'] : ""  ?>"><br><br>


                    <input class="input-register" maxlength="30" type="text" name="publisher_name" id="publisher_name"
                        placeholder="Nome do Editora..."
                        value="<?php echo isset($data['publisher_name']) ? $data['publisher_name'] : ""  ?>"><br><br>

                    <input class="input-register" type="number" name="year" id="year" placeholder="Ano de Lançamento..."
                        value="<?php echo isset($data['year']) ? $data['year'] : ""  ?>"><br><br>


                    <select class="input-register" name="genre" id="genre">
                        <option value="" <? if(!isset($data['genre'])){ echo "selected" ; } ?>>Selecione um gênero...
                        </option>
                        <option value="Fantasia" <? if(isset($data['genre']) && $data['genre']=='Fantasia' ){
                            echo "selected" ; } ?>>Fantasia</option>
                        <option value="Ficção científica" <? if(isset($data['genre']) &&
                            $data['genre']=='Ficção científica' ){ echo "selected" ; } ?>>Ficção científica</option>
                        <option value="Distopia" <? if(isset($data['genre']) && $data['genre']=='Distopia' ){
                            echo "selected" ; } ?>>Distopia</option>
                        <option value="Ação e aventura" <? if(isset($data['genre']) && $data['genre']=='Ação e aventura'
                            ){ echo "selected" ; } ?>>Ação e aventura</option>
                        <option value="Ficção Policial" <? if(isset($data['genre']) && $data['genre']=='Ficção Policial'
                            ){ echo "selected" ; } ?>>Ficção Policial</option>
                        <option value="Thriller e Suspense" <? if(isset($data['genre']) &&
                            $data['genre']=='Thriller e Suspense' ){ echo "selected" ; } ?>>Thriller e Suspense</option>
                        <option value="Romance" <? if(isset($data['genre']) && $data['genre']=='Romance' ){
                            echo "selected" ; } ?>>Romance</option>
                        <option value="Novela" <? if(isset($data['genre']) && $data['genre']=='Novela' ){
                            echo "selected" ; } ?>>Novela</option>
                        <option value="Graphic Novel" <? if(isset($data['genre']) && $data['genre']=='Graphic Novel' ){
                            echo "selected" ; } ?>>Graphic Novel</option>
                        <option value="Infantil" <? if(isset($data['genre']) && $data['genre']=='Infantil' ){
                            echo "selected" ; } ?>>Infantil</option>
                        <option value="Biografia" <? if(isset($data['genre']) && $data['genre']=='Biografia' ){
                            echo "selected" ; } ?>>Biografia</option>
                        <option value="Gastronomia" <? if(isset($data['genre']) && $data['genre']=='Gastronomia' ){
                            echo "selected" ; } ?>>Gastronomia</option>
                        <option value="Autoajuda" <? if(isset($data['genre']) && $data['genre']=='Autoajuda' ){
                            echo "selected" ; } ?>>Autoajuda</option>
                        <option value="Humor" <? if(isset($data['genre']) && $data['genre']=='Humor' ){ echo "selected"
                            ; } ?>>Humor</option>
                        <option value="Tecnologia e Ciência" <? if(isset($data['genre']) &&
                            $data['genre']=='Tecnologia e Ciência' ){ echo "selected" ; } ?>>Tecnologia e Ciência
                        </option>
                    </select><br><br>

                    <div class="container-buttons-register">
                        <input class="button-register" type="submit" value="Cadastrar" name="CadBook"
                            id="books-register-btn">
                        <input class="button-register" type="reset" value="Limpar">
                    </div>

                </form>
            </div>
        </div>

        <?php include 'includes/footer.php' ?>

    </div>
    <script type="text/javascript" src="custom.js"></script>

</body>

</html>