<?php
$host = "localhost";
$user = 'root';
$pass = "";
$dbname = 'repository';

//Criar a conexao
$conn = new PDO("mysql:host=$host;dbname=".$dbname, $user, $pass);
?>