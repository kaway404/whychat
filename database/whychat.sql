-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jan-2018 às 18:35
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whychat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `why_user`
--

CREATE TABLE `why_user` (
  `id` int(11) NOT NULL,
  `thecry` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `why_user`
--

INSERT INTO `why_user` (`id`, `thecry`, `senha`, `email`, `nome`, `sobrenome`) VALUES
(1, 'dfd22d81d69d38cc3026a4ef11517a41341c7ed1', 'a0b48bf6735b085374fa984535372a8025210e45', 'xande@hotmail.com', 'Alexandre', 'Silva'),
(2, 'dfd22d81d69d38cc3026a4ef11517a41341c7ed1', 'a0b48bf6735b085374fa984535372a8025210e45', 'kaway@hotmail.com', 'João', 'Silva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `why_user`
--
ALTER TABLE `why_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `why_user`
--
ALTER TABLE `why_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
