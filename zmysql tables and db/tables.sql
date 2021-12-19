-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 19, 2021 at 12:19 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_todo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `id` int(255) NOT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `telefone`, `data_nasc`, `cidade`, `estado`, `endereco`, `id`, `senha`) VALUES
('Migue Silva', 'migdrum@gmail.com', '00351910637987', '2021-12-07', 'Freamunde', 'd', 'Tal e tal e tal', 15, '123'),
('Rui Paulo Gomes', 'rui@gmail.com', '025165456', '2021-12-01', 'Freamunde', 'dsada', 'Tal e tal e tal', 16, 'soulindo06'),
('Pedro', 'pedro@gmail.com', '55555555', '2021-12-07', 'Freamunde', 'Porto', 'Tal e tal e tal', 17, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- CREATE TODOS_TABLE
CREATE TABLE `teste_todo_db`.`todos_table` 
( `id` BIGINT(254) NOT NULL AUTO_INCREMENT , 
`task_desc` TEXT NULL DEFAULT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB; 