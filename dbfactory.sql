-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2022 às 08:47
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbfactory`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `birthday` date NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `matricula` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `name`, `email`, `birthday`, `cargo`, `matricula`) VALUES
(1, 'MD_', '123456', '2022-11-13 03:10:48', 'Mari Duarte', 'mari@mail.com', '2022-11-03', 'Dev', '456789'),
(2, 'Mari2', '123456', '2022-11-13 03:34:04', 'Mari2D', 'mari2@mail.com', '2022-11-01', 'Dev2', '123456'),
(7, 'kkk', 'll', '2022-11-13 03:47:40', 'kkk', 'kkk@maik.com', '2022-11-01', 'kk', 'lkkk'),
(15, 'SenhaVal', '123', '2022-11-13 03:48:45', 'Senhazinha', 'senha@mail.com', '2022-11-07', 'Senhav', '123456'),
(16, 'SenhaTentativa', '123', '2022-11-13 03:51:20', 'Senha Tentando', 'senha@mail.com', '2022-11-01', 'senhaTentei', 'Senha'),
(17, 'Senhatentando2', '123', '2022-11-13 03:51:45', 'Senha', 'senha@mail.com', '2022-11-01', 'Senhazinha', '123456789'),
(18, 'Novamente', '123', '2022-11-13 04:02:21', 'Novamente Novamente', 'novamente@mail.com', '2022-11-01', 'Novamente2', 'NovaNova'),
(19, 'Tentativa 3', '123456', '2022-11-13 04:02:49', 'Tentativinha', 'Tentativa3@mail.com', '2022-11-04', 'Tentativinha', 'Tentando'),
(22, 'Rosa', 'Rosa123', '2022-11-13 04:05:23', 'Rosa Vermelha', 'rosa@mail.com', '2022-11-25', 'Dev', '4569874155');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
