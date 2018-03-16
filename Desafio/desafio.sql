-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Mar-2018 às 14:15
-- Versão do servidor: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginapp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `email`) VALUES
(3, 'gabrielag', '123', 'gabrielagv@live.com'),
(4, 'fulano', '123456', 'fulano@hotmail.com'),
(5, 'Ciclano', 'asdf', 'ciclano@gmail.com'),
(6, 'beltrano', 'fsdfsdfsdf', 'beltrano@live.com'),
(7, 'maria', 'fdsfsdfsdf', 'mariamaria@gmail.com'),
(8, 'joao', 'asdasdasdasd', 'joao@gmail.com'),
(9, 'ana', 'asdasdasd', 'ana@hotmail.com'),
(10, 'lucas', 'sadasdasdasd', 'lucas@yahoo.com'),
(11, 'mario', 'asdsadasdsad', 'mario@gmail.com'),
(12, 'claudia', 'fsdfdsfsdfds', 'claudia@gmail.com'),
(13, 'teste', '123', 'teste@teste'),
(14, 'teste', '123', 'teste@teste'),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, 'teste2', '123', 'teste2@teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
