-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2019 às 20:12
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imgupload`
--

CREATE TABLE `imgupload` (
  `id` int(11) NOT NULL,
  `nome_imagem` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imgupload`
--

INSERT INTO `imgupload` (`id`, `nome_imagem`) VALUES
(1, 'modulo.PNG'),
(2, 'modulo2.PNG'),
(3, 'modulo2.PNG'),
(4, 'ouro2.png'),
(5, 'ouro2.png'),
(6, 'ouro2.png'),
(7, 'ouro2.png'),
(8, 'ouro2.png'),
(9, 'anabelapg1-4.jpg'),
(10, 'anabelapg1-5.jpg'),
(11, 'anabelapg1-6.jpg'),
(12, 'anabelapg1-7.jpg'),
(13, 'anabelapg1-8.jpg'),
(14, 'anabelapg1-9.jpg'),
(15, 'anabelapg1-10.jpg'),
(16, 'anabelapg1-11.jpg'),
(17, 'anabelapg1-12.jpg'),
(18, 'cat.png'),
(19, 'cat.png'),
(20, 'logo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `estoque` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `material_inter` varchar(100) NOT NULL,
  `salto` varchar(100) NOT NULL,
  `alt_salto` varchar(100) NOT NULL,
  `caminho_img` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tamanho`, `preco`, `estoque`, `cor`, `material`, `material_inter`, `salto`, `alt_salto`, `caminho_img`) VALUES
(1, 'ANABELA SCHUTZ', '38', 'R$390,00 ou 4x de R$97,50', '16', 'Caramelo', 'Couro', 'Couro', 'alto', '11.5cm', 'anabelapg1-1.jpg'),
(2, 'ANABELA EQUIPAGE NOBUCK', '38', 'R$239,00 ou 4x de R$59,75', '11', 'preto', 'couro', 'couro', 'alto', '9,5cm', 'anabelapg1-2.jpg'),
(9, 'ANABELA EQUIPAGE BEGE', '36', ' R$ 239,00 ou 10x de R$ 23,90', '18', 'Bege', ' Nobuck Bege', ' Nobuck Bege', 'alto', '10.5 cm', 'anabelapg1-4.jpg'),
(10, 'ANABELA EQUIPAGE (AS6604) BEGE', '37', 'R$140 ou 4x de R$35', '15', 'Bege', ' Couro', ' Couro', 'alto', '9 cm', 'anabelapg1-5.jpg'),
(11, 'ANABELA EQUIPAGE (AS6639) PRETO', '36', 'R$140 ou 4x de R$35', '14', 'Preto', 'Couro', 'Couro', 'alto', ' 9 cm', 'anabelapg1-6.jpg'),
(12, 'ANABELA EQUIPAGE BRANCO', '35', 'R$140 ou 4x de R$35', '16', 'Branco', ' Tecido Bege', 'Couro', 'alto', ' 6,5 cm', 'anabelapg1-7.jpg'),
(13, 'ANABELA EQUIPAGE (AU3341) BRANCO', '35', 'R$140 ou 4x de R$35', '15', 'Branco', ' Tecido Bege', 'Couro', 'alto', ' 6.5 cm', 'anabelapg1-8.jpg'),
(14, 'ANABELA VICENZA (AU5111) CARAMELO', '38', 'R$140 ou 4x de R$35', '14', 'Caramelo', ' Nobuck', ' Nobuck', 'alto', '8 cm + meia pata 3,5 cm', 'anabelapg1-9.jpg'),
(15, 'ANABELA CLÃUDIA MOURÃƒO (AS5101) COURO PRETO', '37', 'R$140 ou 4x de R$35', '18', 'Preto', ' Couro', ' Couro', 'alto', ' 6 cm', 'anabelapg1-10.jpg'),
(16, 'ANABELA CLÃUDIA MOURÃƒO (AS5180) LEZARD BEGE', '35', 'R$140 ou 4x de R$35', '14', 'Bege', 'Couro', 'Couro', 'alto', '6 cm', 'anabelapg1-11.jpg'),
(17, 'ANABELA EQUIPAGE (AS6746) NOBUCK BEGE', '36', 'R$ 179,00 ou 10x de R$ 17,90', '15', 'Bege', ' Couro', 'Couro', 'alto', '6 cm', 'anabelapg1-12.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'aa', 'aa', 'aa', '$2y$10$96xfVvG4RDd.33.r99SvxelnzZDYeT/zg05QQrZ3CaKxZ3rXdaWky'),
(2, '2', '2', '2', '$2y$10$F6mVSN4UTKLrTyW9cNvToew1xOcoBtmYPePS/mauow1oqEUPNv.le'),
(11, 'bb', 'bb', 'bb', '$2y$10$NSdvmIOStW.cCYMvsZEojuy6LiWQs.9oZa.6J70lAO.4lQKi5G7LK'),
(14, 'Dalton Felix', 'me-v4@hotmail.com', 'dalton123', '$2y$10$O4haIospcToBYWdoKcijROM7y0B4YfgzNPoxNQ.ChOBQuw1OFEHDu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
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
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
