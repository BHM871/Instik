-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Out-2022 às 20:04
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
-- Banco de dados: `instik_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `data_criacao` date NOT NULL,
  `id_publi` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `is_log`
--

CREATE TABLE `is_log` (
  `id` int(11) NOT NULL,
  `on_or_offline` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `is_log`
--

INSERT INTO `is_log` (`id`, `on_or_offline`) VALUES
(0, 'Offline'),
(1, 'Online');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `foto` varchar(1024) NOT NULL,
  `telefone` varchar(32) NOT NULL,
  `data_nascimento` date NOT NULL,
  `bio` text NOT NULL,
  `numero_seguidores` int(32) NOT NULL,
  `numero_publicacao` int(32) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pulblicacao`
--

CREATE TABLE `pulblicacao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `texto` text NOT NULL,
  `data_criacao` date NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguidores`
--

CREATE TABLE `seguidores` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(64) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_login` datetime NOT NULL,
  `is_log` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_perfil` (`id_perfil`),
  ADD KEY `codigo_pubi` (`id_publi`);

--
-- Índices para tabela `is_log`
--
ALTER TABLE `is_log`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_user` (`id_user`);

--
-- Índices para tabela `pulblicacao`
--
ALTER TABLE `pulblicacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_perfil` (`id_perfil`);

--
-- Índices para tabela `seguidores`
--
ALTER TABLE `seguidores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_user` (`id_user`),
  ADD KEY `codigo_perfil` (`id_perfil`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_ibfk_1` (`is_log`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `is_log`
--
ALTER TABLE `is_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pulblicacao`
--
ALTER TABLE `pulblicacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `seguidores`
--
ALTER TABLE `seguidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_publi`) REFERENCES `pulblicacao` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pulblicacao`
--
ALTER TABLE `pulblicacao`
  ADD CONSTRAINT `pulblicacao_ibfk_2` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `seguidores`
--
ALTER TABLE `seguidores`
  ADD CONSTRAINT `seguidores_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seguidores_ibfk_2` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`is_log`) REFERENCES `is_log` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
