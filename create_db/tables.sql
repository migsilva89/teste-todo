-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 21, 2021 at 09:51 PM
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
-- Table structure for table `todos_table`
--

CREATE TABLE `todos_table` (
  `id` bigint(254) NOT NULL,
  `task_desc` text,
  `input_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_done` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todos_table`
--

INSERT INTO `todos_table` (`id`, `task_desc`, `input_date`, `is_done`) VALUES
(66, 'Teste para task amanha de manhha', '2021-12-21 22:48:59', 1),
(77, 'Teste dos testes', '2021-12-21 22:45:00', 0),
(80, 'trterte', '2021-12-21 22:48:58', 0),
(81, 'dsfffsf', '2021-12-21 22:49:00', 0),
(83, 'dfdsffsf', '2021-12-21 22:48:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `id` int(255) NOT NULL,
  `senha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `cidade`, `id`, `senha`) VALUES
('Migue Silva', 'migdrum@gmail.com', 'Freamunde', 15, '123'),
('Tailwind', 'Tailwind@gmail.com', 'Tailwind CIty', 19, '123'),
('Icouto', 'ines@gmail.com', 'porto', 20, 'ines');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos_table`
--
ALTER TABLE `todos_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos_table`
--
ALTER TABLE `todos_table`
  MODIFY `id` bigint(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
