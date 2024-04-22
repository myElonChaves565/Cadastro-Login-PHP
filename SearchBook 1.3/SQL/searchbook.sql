-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2024 às 14:36
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `searchbook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `Cod_admin` int(20) NOT NULL,
  `Nome_admin` varchar(80) NOT NULL,
  `Função` varchar(50) NOT NULL,
  `Telefone_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`Cod_admin`, `Nome_admin`, `Função`, `Telefone_admin`) VALUES
(1, 'Carlos Kauan', 'Programador', '85900000000'),
(2, 'Elison', 'Programador', '85911111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `Cod_Aluno` int(11) NOT NULL,
  `Matricula` int(11) NOT NULL,
  `Nomeds_aluno` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Telefone_aluno` varchar(20) NOT NULL,
  `Endereço` varchar(100) NOT NULL,
  `Serie` varchar(10) NOT NULL,
  `Turma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`Cod_Aluno`, `Matricula`, `Nomeds_aluno`, `Email`, `Senha`, `Telefone_aluno`, `Endereço`, `Serie`, `Turma`) VALUES
(1, 2147483647, 'Tiago Marrom', 'tiagomarrom@gmail.com', 'tiago1234', '85966321654', 'Rua Bahia 123, Palmeiras', '3º Ano', 'Informática'),
(2, 2147483647, 'Matheus Fideles', 'matheusfideles123@gmail.com', 'matheus1234', '85998986565', 'Rua Palmeiras 321, Bahia', '2º Ano', 'Enfermagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `Cod_livro` int(11) NOT NULL,
  `Titulo` varchar(80) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Editora` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Ano` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`Cod_livro`, `Titulo`, `Autor`, `Editora`, `Genero`, `Ano`) VALUES
(1, 'Harry Potter', 'J.K.', 'Simsim', 'Ficção', 2000),
(2, 'Caroline', 'Slasss', 'Nãonão', 'Ficção/Aventura', 2002);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Cod_admin`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`Cod_Aluno`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`Cod_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `Cod_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `Cod_Aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `Cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
