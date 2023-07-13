-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/07/2023 às 20:12
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `repository`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `genre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `books`
--

INSERT INTO `books` (`id`, `name`, `author_name`, `publisher_name`, `year`, `genre`) VALUES
(1, 'A Biblioteca da Meia-Noite', 'Matt Haig', 'Bertrand Brasil', 2021, 'Romance'),
(2, 'É assim que começa', 'Colleen Hoover ', 'Galera', 2022, 'Novela'),
(3, 'A paciente silenciosa', 'Alex Michaelides', 'Record', 2019, 'Ficção Policial'),
(5, 'Verity', 'Colleen Hoover', 'Galera', 2020, 'Thriller e Suspense'),
(6, 'Mister', 'E L James', 'Intrínseca', 2019, 'Fantasia'),
(7, 'Cem anos de solidão', 'Gabriel García Márquez', 'Record', 2000, 'Distopia'),
(8, 'É Assim que Acaba: 1', 'Colleen Hoover', 'Galera', 2018, 'Autoajuda'),
(9, 'A razão do amor', 'Ali Hazelwood', 'Editora Arqueiro', 2022, 'Humor'),
(10, 'Tudo é rio', 'Carla Madeira ', 'Record', 2021, 'Thriller e Suspense'),
(11, 'Uma farsa de amor na Espanha', 'Elena Armas ', 'Editora Arqueiro', 2022, 'Infantil'),
(12, 'A gente mira no amor e acerta', 'Ana Suy', 'Paidós', 2022, 'Gastronomia'),
(13, 'Uma questão de química ', 'Bonnie Garmus', 'Editora Arqueiro', 2022, 'Tecnologia e Ciência'),
(14, 'O Hobbit + pôster', 'J.R.R. Tolkien', 'HarperCollins', 2019, 'Fantasia'),
(15, 'O verão que mudou minha vida', 'Jenny Han', 'Intrínseca', 2019, 'Distopia'),
(16, 'Os segredos da mente milionári', 'T. Harv Eker ', 'Editora Sextante', 2006, 'Autoajuda'),
(17, 'Em busca de mim', 'Viola Davis', 'BestSeller', 2022, 'Infantil'),
(18, 'Leitura de verão', 'Emily Henry', 'Verus', 2022, 'Romance'),
(19, 'Um homem chamado Ove', 'Fredrik Backman', 'Rocco', 2023, 'Ação e aventura'),
(20, 'Nada pode me ferir', 'David Goggins', 'Editora Sextante', 2023, 'Autoajuda'),
(21, 'A casa no mar cerúleo', 'TJ Klune ', 'Morro Branco', 2022, 'Fantasia'),
(22, 'As armas da persuasão', 'Robert B. Cialdini', 'Editora Sextante', 2012, 'Graphic Novel'),
(23, 'A natureza da mordida', 'Carla Madeira', 'Record', 2022, 'Thriller e Suspense'),
(24, 'Minhas 100 primeiras palavras', 'Ciranda Cultural', 'Ciranda Cultural', 2014, 'Infantil'),
(25, 'Cidade da Lua Crescente', 'Sarah J. Maas ', 'Galera', 2020, 'Ação e aventura'),
(26, 'Trono de vidro (Vol. 1)', 'Sarah J. Maas ', 'Galera', 2013, 'Fantasia'),
(27, 'Pai Rico, Pai Pobre', 'Robert T. Kiyosaki', 'Alta Books', 2018, 'Autoajuda');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
