-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2023 às 12:03
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `acompanhante`
--

CREATE TABLE `acompanhante` (
  `id_acompanhante` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `nome_acomp` varchar(100) NOT NULL,
  `idade_acomp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `acompanhante`
--

INSERT INTO `acompanhante` (`id_acompanhante`, `id_paciente`, `nome_acomp`, `idade_acomp`) VALUES
(3, 8, 'Jeferson Klock', 41),
(4, 9, 'Maicol', 87),
(5, 10, 'Maricota', 78),
(6, 11, 'Jeferson Klock', 98),
(7, 12, 'Maicol', 45),
(8, 13, 'Maicol', 98),
(9, 15, 'Gabriela Muller', 65),
(10, 16, 'Maicol', 65),
(11, 17, 'Gabriela Muller', 54),
(12, 17, '--', 0),
(13, 18, '--', 0),
(14, 18, '--', 0),
(15, 19, '--', 0),
(16, 20, '--', 0),
(17, 21, 'André Giacomelli', 18),
(18, 22, 'Maicol Peterson', 43),
(19, 23, 'bcv', 45),
(20, 24, '--', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `anamnsegest`
--

CREATE TABLE `anamnsegest` (
  `id_paciente` int(11) NOT NULL,
  `id_anamnsegest` int(11) NOT NULL,
  `periodogest` varchar(200) NOT NULL,
  `possibcompli` varchar(4) NOT NULL,
  `primeirofilh` varchar(4) NOT NULL,
  `pressaoouevacuar` varchar(4) NOT NULL,
  `horascomeco` time NOT NULL,
  `nomebebe` varchar(200) NOT NULL,
  `nomemed` varchar(200) NOT NULL,
  `prenatal` varchar(4) NOT NULL,
  `quantosfilhos` varchar(200) NOT NULL,
  `rupturabolsa` varchar(4) NOT NULL,
  `tempocontra` time NOT NULL,
  `tempointer` time NOT NULL,
  `partoreali` varchar(4) NOT NULL,
  `sexobebe` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `anamnsemedica`
--

CREATE TABLE `anamnsemedica` (
  `id_paciente` int(11) NOT NULL,
  `id_anamnsemedica` int(11) NOT NULL,
  `oqaconteceu` varchar(200) NOT NULL,
  `aconteceuoutrasvezes` varchar(4) NOT NULL,
  `aquantotempoaconteceu` time NOT NULL,
  `temalgumproblemadesaude` varchar(4) NOT NULL,
  `quaisproblemas` varchar(200) NOT NULL,
  `usademedicacao` varchar(4) NOT NULL,
  `horariodaultimamedicacao` time NOT NULL,
  `nomedoremedio` varchar(200) NOT NULL,
  `alergicoalgo` varchar(4) NOT NULL,
  `alergicoa` varchar(200) NOT NULL,
  `comeuoubebeuultimas6h` varchar(4) NOT NULL,
  `qhoras` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacaopaciente`
--

CREATE TABLE `avaliacaopaciente` (
  `Causado_por_animais` varchar(4) NOT NULL,
  `Com_meio_de_transporte` varchar(4) NOT NULL,
  `Desmoronamento` varchar(4) NOT NULL,
  `Emergencia_medica` varchar(4) NOT NULL,
  `Queda_de_altura_2m` varchar(4) NOT NULL,
  `Tentativa_de_suicidio` varchar(4) NOT NULL,
  `Queda_propria_altura` varchar(4) NOT NULL,
  `Afogamento` varchar(4) NOT NULL,
  `Agressao` varchar(4) NOT NULL,
  `Atropelamento` varchar(4) NOT NULL,
  `Choque_eletrico` varchar(4) NOT NULL,
  `Desabamento` varchar(4) NOT NULL,
  `Domestico` varchar(4) NOT NULL,
  `Esportivo` varchar(4) NOT NULL,
  `Intoxicacao` varchar(4) NOT NULL,
  `Queda_bicicleta` varchar(4) NOT NULL,
  `Queda_moto` varchar(4) NOT NULL,
  `Queda_nivel_2m` varchar(4) NOT NULL,
  `Trabalho` varchar(4) NOT NULL,
  `Transferencia` varchar(4) NOT NULL,
  `Outro` varchar(100) NOT NULL,
  `id_avaliacao` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `avaliacaopaciente`
--

INSERT INTO `avaliacaopaciente` (`Causado_por_animais`, `Com_meio_de_transporte`, `Desmoronamento`, `Emergencia_medica`, `Queda_de_altura_2m`, `Tentativa_de_suicidio`, `Queda_propria_altura`, `Afogamento`, `Agressao`, `Atropelamento`, `Choque_eletrico`, `Desabamento`, `Domestico`, `Esportivo`, `Intoxicacao`, `Queda_bicicleta`, `Queda_moto`, `Queda_nivel_2m`, `Trabalho`, `Transferencia`, `Outro`, `id_avaliacao`, `id_paciente`) VALUES
('Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 'Sim', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', '', 1, 21);

-- --------------------------------------------------------

--
-- Estrutura para tabela `conducao`
--

CREATE TABLE `conducao` (
  `id_paciente` int(11) NOT NULL,
  `id_conducao` int(11) NOT NULL,
  `deitada` varchar(4) NOT NULL,
  `sentada` varchar(4) NOT NULL,
  `semisentada` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `conducao`
--

INSERT INTO `conducao` (`id_paciente`, `id_conducao`, `deitada`, `sentada`, `semisentada`) VALUES
(20, 1, 'Sim', 'Sim', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipeatendimento`
--

CREATE TABLE `equipeatendimento` (
  `id_paciente` int(11) NOT NULL,
  `id_equipeatendimento` int(11) NOT NULL,
  `motorista` varchar(200) NOT NULL,
  `socorrista1` varchar(200) NOT NULL,
  `socorrista2` varchar(200) NOT NULL,
  `socorrista3` varchar(200) NOT NULL,
  `demandante` varchar(200) NOT NULL,
  `equipe` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `materiaisutilizados`
--

CREATE TABLE `materiaisutilizados` (
  `id_paciente` int(11) NOT NULL,
  `id_materiaisutilizados` int(11) NOT NULL,
  `ataduras` varchar(200) NOT NULL,
  `cateteroculos` varchar(200) NOT NULL,
  `compressacomum` varchar(200) NOT NULL,
  `kits` varchar(200) NOT NULL,
  `luvasdescart` varchar(200) NOT NULL,
  `mascaradescart` varchar(200) NOT NULL,
  `mantaaluminizada` varchar(200) NOT NULL,
  `pasdea` varchar(200) NOT NULL,
  `sondaaspiracao` varchar(200) NOT NULL,
  `sorofisiologico` varchar(200) NOT NULL,
  `talaspap` varchar(200) NOT NULL,
  `outrosdesc` varchar(200) NOT NULL,
  `baseestabiliza` varchar(200) NOT NULL,
  `colarpequeno` varchar(200) NOT NULL,
  `colargrande` varchar(200) NOT NULL,
  `coxinsestabiliza` varchar(200) NOT NULL,
  `ked` varchar(200) NOT NULL,
  `macarigida` varchar(200) NOT NULL,
  `ttf` varchar(200) NOT NULL,
  `tirantearanha` varchar(200) NOT NULL,
  `tirantecabeca` varchar(200) NOT NULL,
  `canula` varchar(200) NOT NULL,
  `outroshospital` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `meiosauxiliares`
--

CREATE TABLE `meiosauxiliares` (
  `id_paciente` int(11) NOT NULL,
  `id_meioauxiliares` int(11) NOT NULL,
  `celesc` varchar(200) NOT NULL,
  `defesacivil` varchar(200) NOT NULL,
  `igppc` varchar(200) NOT NULL,
  `cit` varchar(200) NOT NULL,
  `policiacivil` varchar(200) NOT NULL,
  `policiamilitar` varchar(200) NOT NULL,
  `prf` varchar(200) NOT NULL,
  `pre` varchar(200) NOT NULL,
  `samu` varchar(200) NOT NULL,
  `outros` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `objetosrecolhidos`
--

CREATE TABLE `objetosrecolhidos` (
  `id_paciente` int(11) NOT NULL,
  `id_objetosrecolhidos` int(11) NOT NULL,
  `objetos` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
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
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `data`, `sexo`, `nome_hospital`, `nome_paciente`, `idade`, `rgcpf`, `telefone`, `local`) VALUES
(8, '2023-10-13', 'feminino', 'Dona Helena', 'Lucas Souza', 17, '987456', '47 34364530', 'Senai Sul'),
(9, '2023-10-04', 'masculino', 'Dona Helena', 'Enzo Hoffman', 19, '456564321', '47 998756542', 'Senai Sul'),
(10, '2023-10-04', 'masculino', 'Dona Helena', 'José', 25, '6987653', '47 34364530', 'Senai Sul'),
(11, '2023-10-11', 'masculino', 'Dona Helena', 'Enzo Hoffman', 15, '6987653', '47 991836635', 'Senai Sul'),
(12, '2023-10-03', 'masculino', 'Dona Helena', 'Douglas', 54, '6987653', '47 991836635', 'Senai Sul'),
(13, '2023-11-09', 'masculino', 'Dona Helena', 'Enzo Hoffman', 12, 'e2345234', '47 991836635', 'Senai Sul'),
(14, '2023-10-12', 'feminino', 'Bethesda', 'Iago Koch Nermmann', 18, '070941609-17', '47 918345621', 'Abel Schulz'),
(15, '2023-10-12', 'feminino', 'Bethesda', 'Iago Koch Nermmann', 18, '070941609-17', '47 918345621', 'Abel Schulz'),
(16, '2023-10-11', 'masculino', 'Dona Helena', 'Enzo Hoffman', 98, '6987653', '47 991836635', 'Senai Sul'),
(17, '2023-10-17', 'masculino', 'Dona Helena', 'Douglas', 45, '6987653', '47 991836635', 'Senai Sul'),
(18, '2023-10-11', 'masculino', 'Dona Helena', 'Enzo Hoffman', 45, '6987653', '47 34364530', 'Abel Schulz'),
(19, '2023-10-04', 'masculino', 'Bethesda', 'Lucas Souza', 98, '6987653', '47 918345621', 'Abel Schulz'),
(20, '2023-10-05', 'masculino', 'Dona Helena', 'José', 78, '6987653', '47 991836635', 'Abel Schulz'),
(21, '2023-10-09', 'feminino', 'Bethesda', 'Carlos Giacomelli', 47, '070941609-17', '47 918345621', 'Rua petropolis'),
(22, '2023-11-09', 'feminino', 'Bethesdfa', 'André', 5, '11385810971', '47 997040803', 'Senai Sul'),
(23, '2023-11-10', 'masculino', 'asdas', 'asdasd', 18, '11385810971', '(47)997040803', 'morro do meio'),
(24, '2023-11-10', 'masculino', 'asdas', 'asdasd', 24, '11385810971', '(47)997040803', 'morro do meio');

-- --------------------------------------------------------

--
-- Estrutura para tabela `problemas`
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
-- Despejando dados para a tabela `problemas`
--

INSERT INTO `problemas` (`id_problema`, `id_paciente`, `Psiquiatrico`, `Obstetrico`, `Respiratorio`, `Transporte`, `Diabetes`, `Outro`) VALUES
(5, 9, 'Sim', '-----', 'Hipoglicemia', '-----', '-----', '0'),
(6, 10, 'Sim', 'Inalação de Fumaça', 'Hiperglicemia', '-----', '-----', '0'),
(7, 11, 'No', '-----', '-----', '-----', '-----', 'salada'),
(8, 13, 'Não', '-----', '-----', '-----', '-----', ''),
(9, 19, 'Não', 'Inalação de Fumaça', 'Hiperglicemia', '-----', '-----', 'rgea'),
(10, 21, 'Sim', '-----', 'Hipoglicemia', '-----', '-----', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `procedimentos`
--

CREATE TABLE `procedimentos` (
  `id_paciente` int(11) NOT NULL,
  `id_procedimento` int(11) NOT NULL,
  `aspiracao` varchar(4) NOT NULL,
  `avaliacao_inicial` varchar(4) NOT NULL,
  `avaliacao_dirigida` varchar(4) NOT NULL,
  `avaliacao_continuada` varchar(4) NOT NULL,
  `chave_rautek` varchar(4) NOT NULL,
  `canula_guedel` varchar(4) NOT NULL,
  `desobstrucao_va` varchar(4) NOT NULL,
  `emprego_dea` varchar(4) NOT NULL,
  `maca_rodas` varchar(4) NOT NULL,
  `maca_rigida` varchar(4) NOT NULL,
  `ponte` varchar(4) NOT NULL,
  `retirado_capacete` varchar(4) NOT NULL,
  `rcp` varchar(4) NOT NULL,
  `rolamento90` varchar(4) NOT NULL,
  `gerenciamento_risco` varchar(4) NOT NULL,
  `limpeza_ferimento` varchar(4) NOT NULL,
  `curativos` varchar(4) NOT NULL,
  `compressivo` varchar(4) NOT NULL,
  `encravamento` varchar(4) NOT NULL,
  `ocular` varchar(4) NOT NULL,
  `queimadura` varchar(4) NOT NULL,
  `simples` varchar(4) NOT NULL,
  `rolamento180` varchar(4) NOT NULL,
  `tomada_decisao` varchar(4) NOT NULL,
  `tratado_choque` varchar(4) NOT NULL,
  `uso_canula` varchar(4) NOT NULL,
  `3pontas` varchar(4) NOT NULL,
  `ventilacao_suporte` varchar(4) NOT NULL,
  `imobilizacao` varchar(4) NOT NULL,
  `mebro_inf_dir` varchar(4) NOT NULL,
  `membro_inf_esq` varchar(4) NOT NULL,
  `membro_sup_dir` varchar(4) NOT NULL,
  `membro_sup_esq` varchar(4) NOT NULL,
  `quadril` varchar(4) NOT NULL,
  `cervical` varchar(4) NOT NULL,
  `uso_ked` varchar(4) NOT NULL,
  `uso_ttf` varchar(4) NOT NULL,
  `uso_colar` varchar(18) NOT NULL,
  `Oxigenioterapia` varchar(10) NOT NULL,
  `Reanimador` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinaisesintomas`
--

CREATE TABLE `sinaisesintomas` (
  `id_paciente` int(11) NOT NULL,
  `id_sinaisesintomas` int(11) NOT NULL,
  `abdomen_sensivel_rigido` varchar(4) NOT NULL,
  `afundamento_cranio` varchar(4) NOT NULL,
  `agitacao` varchar(4) NOT NULL,
  `amnesia` varchar(4) NOT NULL,
  `angina_peito` varchar(4) NOT NULL,
  `apneia` varchar(4) NOT NULL,
  `bradicardia` varchar(4) NOT NULL,
  `enfizema_subcutaneo` varchar(4) NOT NULL,
  `bradipneia` varchar(4) NOT NULL,
  `hipertensao` varchar(4) NOT NULL,
  `hipotensao` varchar(4) NOT NULL,
  `nauseasevomitos` varchar(4) NOT NULL,
  `nasoragia` varchar(4) NOT NULL,
  `obito` varchar(4) NOT NULL,
  `otorreia` varchar(4) NOT NULL,
  `otorragia` varchar(4) NOT NULL,
  `taquipneia` varchar(4) NOT NULL,
  `cefaleia` varchar(4) NOT NULL,
  `convulsao` varchar(4) NOT NULL,
  `decorticacao` varchar(4) NOT NULL,
  `deformidade` varchar(4) NOT NULL,
  `estatese_jugular` varchar(4) NOT NULL,
  `desmaio` varchar(4) NOT NULL,
  `desvio_traqueia` varchar(4) NOT NULL,
  `dispneia_2m` varchar(4) NOT NULL,
  `dor_local` varchar(4) NOT NULL,
  `ovace` varchar(4) NOT NULL,
  `priaprismo` varchar(4) NOT NULL,
  `prurido_pele` varchar(4) NOT NULL,
  `sede` varchar(4) NOT NULL,
  `sinal_batile` varchar(4) NOT NULL,
  `sinal_guaxinim` varchar(4) NOT NULL,
  `sudorese` varchar(4) NOT NULL,
  `taquicardia` varchar(4) NOT NULL,
  `face_palida` varchar(4) NOT NULL,
  `bronco_aspirando` varchar(4) NOT NULL,
  `descerebracao` varchar(4) NOT NULL,
  `tontura` varchar(4) NOT NULL,
  `cianose` varchar(20) NOT NULL,
  `Edema` varchar(20) NOT NULL,
  `pupilas` varchar(20) NOT NULL,
  `parada` varchar(20) NOT NULL,
  `hemorragia` varchar(20) NOT NULL,
  `outros` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinaisvitais`
--

CREATE TABLE `sinaisvitais` (
  `id_paciente` int(11) NOT NULL,
  `id_sinaisvitais` int(11) NOT NULL,
  `pressaoarterial` varchar(200) NOT NULL,
  `pulso` varchar(200) NOT NULL,
  `temperatura` varchar(200) NOT NULL,
  `perfusao` varchar(200) NOT NULL,
  `saturacao` varchar(200) NOT NULL,
  `respiracao` varchar(200) NOT NULL,
  `hgt` varchar(200) NOT NULL,
  `anormal` varchar(200) NOT NULL,
  `normal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `transporte`
--

CREATE TABLE `transporte` (
  `id_paciente` int(11) NOT NULL,
  `id_transporte` int(11) NOT NULL,
  `critico` varchar(4) NOT NULL,
  `instavel` varchar(4) NOT NULL,
  `estavel` varchar(4) NOT NULL,
  `potencialmente_instavel` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `vitimaera`
--

CREATE TABLE `vitimaera` (
  `id_paciente` int(11) NOT NULL,
  `id_vitimaera` int(11) NOT NULL,
  `Ciclista` varchar(4) NOT NULL,
  `Condutor_moto` varchar(4) NOT NULL,
  `Banco_frente` varchar(4) NOT NULL,
  `Moto` varchar(4) NOT NULL,
  `Condutor_carro` varchar(4) NOT NULL,
  `Clinico` varchar(4) NOT NULL,
  `Banco_tras` varchar(4) NOT NULL,
  `Pedestre` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `vitimaera`
--

INSERT INTO `vitimaera` (`id_paciente`, `id_vitimaera`, `Ciclista`, `Condutor_moto`, `Banco_frente`, `Moto`, `Condutor_carro`, `Clinico`, `Banco_tras`, `Pedestre`) VALUES
(21, 1, 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não');

-- --------------------------------------------------------

--
-- Estrutura para tabela `voluntario`
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
-- Índices de tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  ADD PRIMARY KEY (`id_acompanhante`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices de tabela `anamnsegest`
--
ALTER TABLE `anamnsegest`
  ADD PRIMARY KEY (`id_anamnsegest`);

--
-- Índices de tabela `anamnsemedica`
--
ALTER TABLE `anamnsemedica`
  ADD PRIMARY KEY (`id_anamnsemedica`);

--
-- Índices de tabela `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices de tabela `conducao`
--
ALTER TABLE `conducao`
  ADD PRIMARY KEY (`id_conducao`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices de tabela `equipeatendimento`
--
ALTER TABLE `equipeatendimento`
  ADD PRIMARY KEY (`id_equipeatendimento`);

--
-- Índices de tabela `materiaisutilizados`
--
ALTER TABLE `materiaisutilizados`
  ADD PRIMARY KEY (`id_materiaisutilizados`);

--
-- Índices de tabela `meiosauxiliares`
--
ALTER TABLE `meiosauxiliares`
  ADD PRIMARY KEY (`id_meioauxiliares`);

--
-- Índices de tabela `objetosrecolhidos`
--
ALTER TABLE `objetosrecolhidos`
  ADD PRIMARY KEY (`id_objetosrecolhidos`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices de tabela `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id_problema`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices de tabela `procedimentos`
--
ALTER TABLE `procedimentos`
  ADD PRIMARY KEY (`id_procedimento`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices de tabela `sinaisesintomas`
--
ALTER TABLE `sinaisesintomas`
  ADD PRIMARY KEY (`id_sinaisesintomas`);

--
-- Índices de tabela `sinaisvitais`
--
ALTER TABLE `sinaisvitais`
  ADD PRIMARY KEY (`id_sinaisvitais`);

--
-- Índices de tabela `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_transporte`);

--
-- Índices de tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  ADD PRIMARY KEY (`id_vitimaera`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Índices de tabela `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`id_voluntario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  MODIFY `id_acompanhante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `anamnsegest`
--
ALTER TABLE `anamnsegest`
  MODIFY `id_anamnsegest` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anamnsemedica`
--
ALTER TABLE `anamnsemedica`
  MODIFY `id_anamnsemedica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `conducao`
--
ALTER TABLE `conducao`
  MODIFY `id_conducao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `equipeatendimento`
--
ALTER TABLE `equipeatendimento`
  MODIFY `id_equipeatendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `materiaisutilizados`
--
ALTER TABLE `materiaisutilizados`
  MODIFY `id_materiaisutilizados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `meiosauxiliares`
--
ALTER TABLE `meiosauxiliares`
  MODIFY `id_meioauxiliares` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `objetosrecolhidos`
--
ALTER TABLE `objetosrecolhidos`
  MODIFY `id_objetosrecolhidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id_problema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `procedimentos`
--
ALTER TABLE `procedimentos`
  MODIFY `id_procedimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinaisesintomas`
--
ALTER TABLE `sinaisesintomas`
  MODIFY `id_sinaisesintomas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sinaisvitais`
--
ALTER TABLE `sinaisvitais`
  MODIFY `id_sinaisvitais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  MODIFY `id_vitimaera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `acompanhante`
--
ALTER TABLE `acompanhante`
  ADD CONSTRAINT `acompanhante_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Restrições para tabelas `avaliacaopaciente`
--
ALTER TABLE `avaliacaopaciente`
  ADD CONSTRAINT `avaliacaopaciente_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `conducao`
--
ALTER TABLE `conducao`
  ADD CONSTRAINT `conducao_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `problemas`
--
ALTER TABLE `problemas`
  ADD CONSTRAINT `problemas_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `procedimentos`
--
ALTER TABLE `procedimentos`
  ADD CONSTRAINT `procedimentos_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `vitimaera`
--
ALTER TABLE `vitimaera`
  ADD CONSTRAINT `vitimaera_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
