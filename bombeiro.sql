-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2023 às 14:45
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
-- Estrutura da tabela `acompanhante`
--

CREATE TABLE `acompanhante` (
  `id_acompanhante` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `nome_acomp` varchar(100) NOT NULL,
  `idade_acomp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `acompanhante`
--

INSERT INTO `acompanhante` (`id_acompanhante`, `id_paciente`, `nome_acomp`, `idade_acomp`) VALUES
(3, 8, 'Jeferson Klock', 41),
(4, 9, 'Maicol', 87),
(5, 10, 'Maricota', 78),
(6, 11, 'Jeferson Klock', 98),
(7, 12, 'Maicol', 45);

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
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `data` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `nome_hospital` varchar(100) NOT NULL,
  `nome_paciente` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `rgcpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `local` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `data`, `sexo`, `nome_hospital`, `nome_paciente`, `idade`, `rgcpf`, `telefone`, `local`) VALUES
(8, '2023-10-13', 'feminino', 'Dona Helena', 'Lucas Souza', 17, '987456', '47 34364530', 'Senai Sul'),
(9, '2023-10-04', 'masculino', 'Dona Helena', 'Enzo Hoffman', 19, '456564321', '47 998756542', 'Senai Sul'),
(10, '2023-10-04', 'masculino', 'Dona Helena', 'José', 25, '6987653', '47 34364530', 'Senai Sul'),
(11, '2023-10-11', 'masculino', 'Dona Helena', 'Enzo Hoffman', 15, '6987653', '47 991836635', 'Senai Sul'),
(12, '2023-10-03', 'masculino', 'Dona Helena', 'Douglas', 54, '6987653', '47 991836635', 'Senai Sul');

-- --------------------------------------------------------

--
-- Estrutura da tabela `problemas`
--

CREATE TABLE `problemas` (
  `id_problema` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `Psiquiatrico` varchar(4) NOT NULL,
  `Obstetrico` varchar(20) NOT NULL,
  `Respiratorio` varchar(20) NOT NULL,
  `Transporte` varchar(20) NOT NULL,
  `Diabetes` varchar(20) NOT NULL,
  `Outro` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `problemas`
--

INSERT INTO `problemas` (`id_problema`, `id_paciente`, `Psiquiatrico`, `Obstetrico`, `Respiratorio`, `Transporte`, `Diabetes`, `Outro`) VALUES
(5, 9, 'Sim', '-----', 'Hipoglicemia', '-----', '-----', '0'),
(6, 10, 'Sim', 'Inalação de Fumaça', 'Hiperglicemia', '-----', '-----', '0'),
(7, 11, 'No', '-----', '-----', '-----', '-----', 'salada');

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
-- Índices para tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  ADD PRIMARY KEY (`id_acompanhante`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices para tabela `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  ADD PRIMARY KEY (`id_avaliacao`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices para tabela `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id_problema`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices para tabela `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`id_voluntario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  MODIFY `id_acompanhante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id_problema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  ADD CONSTRAINT `acompanhante_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `problemas`
--
ALTER TABLE `problemas`
  ADD CONSTRAINT `problemas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
