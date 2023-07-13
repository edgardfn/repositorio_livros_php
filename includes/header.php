<header>
    <?php 
        $menus = array("index.php"=>"Home","cadastrar.php"=>"Cadastrar")
    ?>
    <div class="navbar">
        <div class="icon-container">
            <img class="books-image-icon" src="https://www.svgrepo.com/show/401214/books.svg" alt="books-icon">
        </div>
        <div class="content-navbar">
            <?php 
                foreach($menus as $key => $val) {
                    echo("<a class='link-menu' href=$key >$val</a>");
                }
            ?>
        </div>

    </div>
</header>