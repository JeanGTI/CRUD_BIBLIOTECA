-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Abr-2020 às 02:47
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `nome`, `ano_nascimento`, `nacionalidade`, `sexo`, `created_at`, `updated_at`) VALUES
(5, 'Jean', '1998-05-10', 'Brasileira', 'Masculino', '2020-04-11 22:32:37', '2020-04-11 22:33:11'),
(6, 'Denise', '1998-05-10', 'Brasileira', 'Feminina', '2020-04-11 22:33:04', '2020-04-11 22:33:04');

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(5, 'Panini', '2020-04-11 22:33:28', '2020-04-11 22:33:28'),
(7, 'LeYa', '2020-04-12 01:03:16', '2020-04-12 01:03:16');

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(4, 'Romance', '2020-04-11 22:34:06', '2020-04-11 22:34:06'),
(5, 'Aventura', '2020-04-11 22:34:20', '2020-04-11 22:34:20'),
(6, 'Drama/Suspence', '2020-04-11 22:36:02', '2020-04-11 22:36:02');

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `ano_lancamento`, `autor_id`, `editora_id`, `genero_id`, `created_at`, `updated_at`) VALUES
(3, 'As aventuras de Fulano', '1975-06-10', 5, 5, 5, '2020-04-11 22:34:58', '2020-04-11 22:34:58'),
(6, 'O Livro', '2000-09-02', 5, 5, 4, '2020-04-12 00:29:52', '2020-04-12 00:29:52'),
(7, 'O Teste', '2020-04-10', 5, 7, 6, '2020-04-12 01:03:39', '2020-04-12 01:03:39');


--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jean', 'jean.aug02@gmail.com', NULL, '$2y$10$vyLacgHd6nAkGKL8cXRWIeSaftim/qEnovXdI.bDdO2x11ZYKeVBG', NULL, '2020-04-10 22:39:54', '2020-04-10 22:39:54'),
(2, 'teste', 'teste.teste@teste.com', NULL, '$2y$10$hkW/Buhd5xRHgBfNmEdTRO4QyT05CDRV3o4lIC8fHTRKzSq4ph80W', NULL, '2020-04-11 22:31:20', '2020-04-11 22:31:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
