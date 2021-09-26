-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Set-2021 às 04:37
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ra200289095`
--
CREATE DATABASE IF NOT EXISTS `ra200289095` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ra200289095`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `nameCourse` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `dateStart` date NOT NULL,
  `dateFinish` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `nameCourse`, `description`, `dateStart`, `dateFinish`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sistema pra internet', 'curso legal', '2001-01-10', '2050-12-20', 1, '2021-09-23 02:29:30', '2021-09-25 21:50:47'),
(2, 'analise e desenvolvimento de sistemas ', 'curso legal', '2011-01-10', '2050-12-20', 1, '2021-09-23 02:29:36', '2021-09-25 21:49:12'),
(3, 'ciências da computação ', 'em breve', '2011-01-11', '2029-12-20', 0, '2021-09-25 18:48:25', '2021-09-26 02:36:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `course` int(150) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `phone`, `course`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Luís Eduardo Da Silva reif', 'exemplo@exemplo.com', '1234', '4892232223', 1, 1, '2021-09-25 19:41:08', '2021-09-25 21:51:48'),
(2, 'joao da silva', 'exemplo@exemplo.com', '1234', '3323232632', 2, 1, '2021-09-25 19:42:51', '2021-09-25 21:52:16'),
(3, 'luisa helena', 'exemplo@exemplo.com', '1234', '48996340131', 3, 1, '2021-09-25 19:43:03', '2021-09-25 21:52:38'),
(4, 'luana reis', 'exemplo@exemplo.com', '1234', '45223323236', 1, 0, '2021-09-25 19:43:15', '2021-09-25 21:53:43'),
(5, 'Cleber bambam', 'exemplo@exemplo.com', '1234', '45223323236', 0, 1, '2021-09-25 20:51:42', '2021-09-25 21:54:04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
