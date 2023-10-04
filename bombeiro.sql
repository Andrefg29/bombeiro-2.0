-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 25-Set-2023 às 15:24
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaopaciente`
--

CREATE TABLE `avaliacaopaciente` (
  `Causado por animais` varchar(4) NOT NULL,
  `Com meio de transporte` varchar(4) NOT NULL,
  `Desmoronamento` varchar(4) NOT NULL,
  `Emergencia medica` varchar(4) NOT NULL,
  `Queda de altura 2m` varchar(4) NOT NULL,
  `Tentativa de suicidio` varchar(4) NOT NULL,
  `Queda propria altura` varchar(4) NOT NULL,
  `Afogamento` varchar(4) NOT NULL,
  `Agressao` varchar(4) NOT NULL,
  `Atropelamento` varchar(4) NOT NULL,
  `Choque eletrico` varchar(4) NOT NULL,
  `Desabamento` varchar(4) NOT NULL,
  `Domestico` varchar(4) NOT NULL,
  `Esportivo` varchar(4) NOT NULL,
  `Intoxicacao` varchar(4) NOT NULL,
  `Queda bicicleta` varchar(4) NOT NULL,
  `Queda moto` varchar(4) NOT NULL,
  `Queda nivel <2m` varchar(4) NOT NULL,
  `Trabalho` varchar(4) NOT NULL,
  `Transferencia` varchar(4) NOT NULL,
  `Outro` varchar(100) NOT NULL,
  `id_avaliacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`matricula`, `nome`) VALUES
(43, 'alek'),
(43, 'aleask');

-- --------------------------------------------------------

--
-- Estrutura da tabela `problemas`
--

CREATE TABLE `problemas` (
  `Psiquiatrico` varchar(4) NOT NULL,
  `Obstetrico` varchar(20) NOT NULL,
  `Respiratorio` varchar(20) NOT NULL,
  `Transporte` varchar(20) NOT NULL,
  `Diabetes` varchar(20) NOT NULL,
  `Outro` int(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntario`
--

CREATE TABLE `voluntario` (
  `id_voluntario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  ADD PRIMARY KEY (`id_avaliacao`);

--
-- Índices para tabela `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`id_voluntario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
