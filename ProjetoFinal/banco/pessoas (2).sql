-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/11/2023 às 17:12
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `tipo` int(10) NOT NULL,
  `cod` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nome_materno` varchar(60) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `telefone_fixo` varchar(20) NOT NULL,
  `telefone_celular` varchar(20) NOT NULL,
  `usuario` varchar(6) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `confirma` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`tipo`, `cod`, `nome`, `nome_materno`, `cpf`, `data_nascimento`, `email`, `sexo`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `complemento`, `telefone_fixo`, `telefone_celular`, `usuario`, `senha`, `confirma`) VALUES
(2, 1, 'JEFFERSON RIBEIRO BARROSO', 'JEFFERSON RIBEIRO BARROSO', '125.078.247-35', '1990-08-18', 'barrosoribeiro2@gmail.com', 'outros', '21.250-240', 'Rua General Carvalho', 'Cordovil', 'Rio de Janeiro', 'RJ', 'casa 2', '+55(21)3137-6506', '+55(21)98153-3630', 'JEFFER', 'AAAAAAAA', ''),
(1, 2, 'STHELA RIBEIRO B', 'MARIA DE FATIIMA', '125.078.247-35', '1990-08-18', 'barrosoribeiro2@gmail.com', 'outros', '21.250-240', 'Rua General Carvalho', 'Cordovil', 'Rio de Janeiro', 'RJ', 'casa 2', '+55(21)3137-6506', '+55(21)98153-3630', 'STHELA', 'aaaaaaaa', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
