-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2019 às 22:19
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sapatop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `sub_categoria` int(11) DEFAULT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `sub_categoria`, `categoria`) VALUES
(1, NULL, 'Sandálias'),
(2, NULL, 'Sapatos'),
(3, 1, 'Sapatilhas'),
(4, 1, 'Anabelas'),
(5, 1, 'Rasteiras'),
(6, 2, 'Tênis'),
(7, 2, 'Mule'),
(8, 2, 'Scarpin');

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
(20, 'logo.png'),
(21, 'anabelapg1-1.jpg'),
(22, 'anabelapg1-1.jpg'),
(23, 'anabelapg1-1.jpg'),
(24, 'anabelapg1-1.jpg'),
(25, 'anabelapg1-1.jpg'),
(26, 'anabelapg1-1.jpg'),
(27, 'anabelapg1-1.jpg'),
(28, 'miranha.jpeg'),
(29, 'miranha.jpeg'),
(30, 'miranha.jpeg'),
(31, 'miranha.jpeg'),
(32, 'miranha.jpeg'),
(33, 'ouro2.png'),
(34, 'ouro2.png'),
(35, 'ouro2.png'),
(36, 'sapatilhapg1-1.jpg'),
(37, 'sapatilhapg1-2.jpg'),
(38, 'sapatilhapg1-3.jpg'),
(39, 'sapatilhapg1-4.jpg'),
(40, 'sapatilhapg1-5.jpg'),
(41, 'sapatilhapg1-6.jpg'),
(42, 'sapatilhapg1-7.jpg'),
(43, 'sapatilhapg1-8.jpg'),
(44, 'sapatilhapg1-9.jpg'),
(45, 'sapatilhapg1-10.jpg'),
(46, 'sapatilhapg1-11.jpg'),
(47, 'sapatilhapg1-12.jpg'),
(48, 'sapatilhapg2-1.jpg'),
(49, 'rasteirapg1-1.jpg'),
(50, 'rasteirapg1-2.jpg'),
(51, 'rasteirapg1-3.jpg'),
(52, 'rasteirapg1-4.jpg'),
(53, 'rasteirapg1-5.jpg'),
(54, 'rasteirapg1-6.jpg'),
(55, 'rasteirapg1-7.jpg'),
(56, 'rasteirapg1-8.jpg'),
(57, 'rasteirapg1-9.jpg'),
(58, 'rasteirapg1-10.jpg'),
(59, 'rasteirapg1-11.jpg'),
(60, 'rasteirapg1-12.jpg'),
(61, 'rasteirapg2-3.jpg'),
(62, 'tenispg1-1.jpg'),
(63, 'tenispg1-2.jpg'),
(64, 'tenispg1-3.jpg'),
(65, 'tenispg1-4.jpg'),
(66, 'tenispg1-5.jpg'),
(67, 'tenispg1-6.jpg'),
(68, 'tenispg1-7.jpg'),
(69, 'tenispg1-8.jpg'),
(70, 'tenispg1-9.jpg'),
(71, 'tenispg1-11.jpg'),
(72, 'tenispg1-10.jpg'),
(73, 'tenispg2-2.jpg'),
(74, 'mulepg1-1.jpg'),
(75, 'mulepg1-2.jpg'),
(76, 'mulepg1-2.jpg'),
(77, 'mulepg1-2.jpg'),
(78, 'mulepg1-4.jpg'),
(79, 'mulepg1-5.jpg'),
(80, 'mulepg1-6.jpg'),
(81, 'mulepg1-7.jpg'),
(82, 'mulepg1-9.jpg'),
(83, 'mulepg2-4.jpg'),
(84, 'mulepg1-11.jpg'),
(85, 'mulepg2-1.jpg'),
(86, 'tenispg2-1.jpg'),
(87, 'mulepg2-3.jpg'),
(88, 'scarpinpg1-1.jpg'),
(89, 'scarpinpg1-3.jpg'),
(90, 'scarpinpg1-4.jpg'),
(91, 'scarpinpg1-5.jpg'),
(92, 'scarpinpg1-6.jpg'),
(93, 'scarpinpg1-7.jpg'),
(94, 'scarpinpg1-8.jpg'),
(95, 'scarpinpg1-9.jpg'),
(96, 'scarpinpg1-10.jpg'),
(97, 'scarpinpg1-11.jpg'),
(98, 'scarpinpg1-12.jpg'),
(99, 'scarpinpg2-1.jpg'),
(100, 'mulepg2-2.jpg');

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
  `caminho_img` varchar(220) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `novidades` int(11) DEFAULT NULL,
  `destaques` int(11) DEFAULT NULL,
  `queima` int(11) DEFAULT NULL,
  `descontos_semana` int(11) DEFAULT NULL,
  `ofertas_dia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tamanho`, `preco`, `estoque`, `cor`, `material`, `material_inter`, `salto`, `alt_salto`, `caminho_img`, `id_categoria`, `novidades`, `destaques`, `queima`, `descontos_semana`, `ofertas_dia`) VALUES
(1, 'ANABELA SCHUTZ', '38', '390', '16', 'Caramelo', 'Couro', 'Couro', 'alto', '11.5cm', 'anabelapg1-1.jpg', 4, 1, NULL, NULL, NULL, NULL),
(2, 'ANABELA EQUIPAGE NOBUCK', '38', '239', '11', 'preto', 'couro', 'couro', 'alto', '9,5cm', 'anabelapg1-2.jpg', 4, NULL, 1, NULL, NULL, NULL),
(9, 'ANABELA EQUIPAGE BEGE', '36', '239', '20', 'Bege', ' Nobuck Bege', ' Nobuck Bege', 'alto', '10.5 cm', 'anabelapg1-4.jpg', 4, 0, 0, 0, 1, 0),
(10, 'ANABELA EQUIPAGE (AS6604) BEGE', '37', '140', '15', 'Bege', ' Couro', ' Couro', 'alto', '9 cm', 'anabelapg1-5.jpg', 4, 0, 0, 1, 0, 0),
(11, 'ANABELA EQUIPAGE (AS6639) PRETO', '36', '140', '14', 'Preto', 'Couro', 'Couro', 'alto', ' 9 cm', 'anabelapg1-6.jpg', 4, NULL, NULL, 1, NULL, NULL),
(12, 'ANABELA EQUIPAGE BRANCO', '35', '140', '16', 'Branco', ' Tecido Bege', 'Couro', 'alto', ' 6,5 cm', 'anabelapg1-7.jpg', 4, 0, 0, 0, 0, 1),
(13, 'ANABELA EQUIPAGE (AU3341) BRANCO', '35', '140', '15', 'Branco', ' Tecido Bege', 'Couro', 'alto', ' 6.5 cm', 'anabelapg1-8.jpg', 4, 1, NULL, NULL, NULL, NULL),
(14, 'ANABELA VICENZA (AU5111) CARAMELO', '38', '140', '14', 'Caramelo', ' Nobuck', ' Nobuck', 'alto', '8 cm + meia pata 3,5 cm', 'anabelapg1-9.jpg', 4, NULL, NULL, NULL, NULL, NULL),
(15, 'ANABELA CLÃUDIA MOURÃƒO (AS5101) COURO PRETO', '37', '140', '18', 'Preto', ' Couro', ' Couro', 'alto', ' 6 cm', 'anabelapg1-10.jpg', 4, 0, 0, 0, 0, 1),
(16, 'ANABELA CLÃUDIA MOURÃƒO (AS5180) LEZARD BEGE', '35', '140', '14', 'Bege', 'Couro', 'Couro', 'alto', '6 cm', 'anabelapg1-11.jpg', 4, NULL, 1, NULL, NULL, NULL),
(17, 'ANABELA EQUIPAGE (AS6746) NOBUCK BEGE', '36', '179', '15', 'Bege', ' Couro', 'Couro', 'alto', '6 cm', 'anabelapg1-12.jpg', 4, NULL, NULL, NULL, NULL, NULL),
(21, 'ANABELA EQUIPAGE NOBUCK BEGE', '37', '239', '16', 'Bege', 'Couro', 'Couro', 'Alto', '9,5cm', 'anabelapg1-3.jpg', 4, NULL, NULL, NULL, NULL, NULL),
(30, 'SAPATILHA EQUIPAGE BY USAFLEX (AS4726) LYCRA PRETA', '36', '150', '15', 'Preto', 'Couro e Palmilha Ultramacia', 'Couro', 'Pequeno', '04cm', 'sapatilhapg1-1.jpg', 3, NULL, 1, NULL, NULL, NULL),
(31, 'MULE CLÃUDIA MOURÃƒO (AS4911) CARAMELO', '34', '183', '15', 'Bege', 'Couro', 'Couro', 'Alto', ' 2,5 cm', 'sapatilhapg1-2.jpg', 7, NULL, 1, NULL, NULL, NULL),
(32, 'Sapatilha', '34/36/38', '200', '20', 'Preto', 'Couro SintÃ©tico', 'Couro', 'Pequeno', '1cm', 'sapatilhapg1-3.jpg', 3, 0, 0, 1, 0, 0),
(33, 'SAPATILHA EQUIPAGE (AN5256) PRATA VELHA', '34', '119', '15', 'Prata Velha', 'TecnolÃ³gico', 'TecnolÃ³gico', 'Nenhum', 'Nenhum', 'sapatilhapg1-4.jpg', 3, 1, NULL, NULL, NULL, NULL),
(34, 'SAPATILHA CLÃUDIA MOURÃƒO (AI9599) PELO ONÃ‡A', '38', '300', '16', 'Marrom', 'Pelo de onÃ§a', 'Pelo de onÃ§a', 'Nenhum', 'Nenhum', 'sapatilhapg1-5.jpg', 3, 0, 0, 1, 0, 0),
(35, 'SAPATILHA CLÃUDIA MOURÃƒO (AI9601) COURO PRETO', '38', '199', '16', 'Preto', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-6.jpg', 3, 0, 0, 0, 1, 0),
(36, 'SAPATILHA CLÃUDIA MOURÃƒO (AT3204) BEGE', '35', '179', '6', 'Bege', 'CamurÃ§a', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-7.jpg', 3, NULL, NULL, NULL, 1, NULL),
(37, 'SAPATILHA CLÃUDIA MOURÃƒO (AT3317) GRAFITE', '36', '179', '20', 'Grafite', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-8.jpg', 3, 0, 0, 0, 0, 1),
(38, 'SAPATILHA CLÃUDIA MOURÃƒO (AR8692) COURO VERDE', '38', '269', '20', 'Verde', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-9.jpg', 3, NULL, 1, NULL, NULL, NULL),
(39, 'SAPATILHA COURO VERMELHO', '36', '199', '15', 'Vermelho', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-10.jpg', 3, NULL, NULL, NULL, NULL, NULL),
(40, 'SAPATILHA CLÃUDIA MOURÃƒO (AR8679) COURO AZUL', '37/38', '199', '18', 'Azul', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-11.jpg', 3, NULL, NULL, NULL, NULL, NULL),
(41, 'SAPATILHA USAFLEX (AW6288) COURO BEGE', '36/37/38/39', '159', '15', 'Bege', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'sapatilhapg1-12.jpg', 3, NULL, NULL, NULL, NULL, NULL),
(42, 'SAPATILHA SCHUTZ', '38', '200', '15', 'Preto', 'TecnolÃ³gico', 'TecnolÃ³gico', 'Nenhum', 'Nenhum', 'sapatilhapg2-1.jpg', 3, 0, 0, 0, 1, 0),
(43, 'SANDÃLIA CLÃUDIA MOURÃƒO (AT4112) VERNIZ PRETO', '36', '179', '15', 'Preto', 'Verniz', 'Couro Liso', 'Alto', '3cm', 'rasteirapg1-1.jpg', 5, 0, 0, 1, 0, 0),
(44, 'RASTEIRA CLÃUDIA MOURÃƒO (AU5017) GRAFITE', '34/35/36/37', '259', '20', 'Grafite', 'Couro Liso', 'Couro Liso', 'Nenhum', 'Nenhum', 'rasteirapg1-2.jpg', 5, 1, 0, 0, 0, 1),
(45, 'SANDÃLIA VICENZA VERNIZ PRETO', '36', '179', '15', 'Preto', 'Verniz', 'Couro', 'Alto', '3cm', 'rasteirapg1-3.JPG', 5, NULL, 1, NULL, NULL, NULL),
(46, 'SANDÃLIA VICENZA PRATA', '36', '179', '16', 'Prata', 'Couro', 'Couro', 'Alto', '3cm', 'rasteirapg1-4.jpg', 5, 0, 0, 0, 1, 0),
(47, 'RASTEIRA CLÃUDIA MOURÃƒO (AT3404) BEGE', '36/37', '199', '15', 'Bege', 'Couro Liso', 'Couro Liso', 'Alto', ' 2 cm', 'rasteirapg1-5.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(48, 'RASTEIRA CLÃUDIA MOURÃƒO (AT3511) CARAMELO', '35/36/37', '170', '17', 'Caramelo', 'Couro Liso', 'Couro Liso', 'Nenhum', 'Nenhum', 'rasteirapg1-6.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(49, 'RASTEIRA VICENZA (AU5546) NOBUCK BEGE', '35', '359', '13', 'Bege', 'Nobuck', 'Nobuck', 'Nenhum', 'Nenhum', 'rasteirapg1-7.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(50, 'RASTEIRA ANACAPRI (AV5741) BRANCO', '35/36/37', '90', '13', 'Branco', 'Couro', 'Couro Liso', 'Nenhum', 'Nenhum', 'rasteirapg1-8.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(51, 'RASTEIRA ANACAPRI (AV5529) LAMINADO OURO', '38', '129', '13', 'Dourado', ' Multimaterial', ' Multimaterial', 'Nenhum', 'Nenhum', 'rasteirapg1-9.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(52, 'RASTEIRA CLÃUDIA MOURÃƒO (AS5511) CARAMELO', '37/38', '229', '13', 'Caramelo', 'Couro', 'Couro ', 'Nenhum', 'Nenhum', 'rasteirapg1-10.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(53, 'RASTEIRA ANACAPRI (AS2639) MARROM', '36', '90', '10', 'Marrom', 'Material TecnolÃ³gico', 'Material TecnolÃ³gico', 'Nenhum', 'Nenhum', 'rasteirapg1-11.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(54, 'RASTEIRA CLÃUDIA MOURÃƒO (AS6204) BEGE', '35/36/37', '90', '10', 'Bege', ' Multimaterial', ' Multimaterial', 'Nenhum', 'Nenhum', 'rasteirapg2-3.jpg', 5, NULL, NULL, NULL, NULL, NULL),
(55, 'TÃŠNIS CLÃUDIA MOURÃƒO (AX6204) BEGE', '35/36/37', '199', '10', 'Bege', 'Material TecnolÃ³gico', 'Material TecnolÃ³gico', 'MÃ©dio', '3cm', 'tenispg1-1.jpg', 6, NULL, 1, NULL, NULL, NULL),
(56, 'TÃŠNIS EQUIPAGE BY USAFLEX (AV4826) LYCRA PRETA', '35', '190', '10', 'Preto', 'Tecido Tricot Preto', 'Tecido Tricot Preto', 'MÃ©dio', '3,7 cm', 'tenispg1-2.jpg', 6, 0, 0, 0, 0, 1),
(57, 'TÃŠNIS USAFLEX (AV4688) COURO BEGE', '35', '130', '13', 'Bege', 'Couro', 'Couro ', 'MÃ©dio', ' 2,5 cm', 'tenispg1-3.jpg', 6, 0, 0, 1, 0, 0),
(58, 'TÃŠNIS SUPERGA (AV3677) TECIDO BEGE', '38', '190', '15', 'Bege', ' Multimaterial', ' Multimaterial', 'Nenhum', 'Nenhum', 'tenispg1-4.jpg', 6, 1, NULL, NULL, NULL, NULL),
(59, 'TÃŠNIS SUPERGA (AV3441) BRANCO', '35/36/37', '90', '13', 'Branco', 'Borracha natural vulcanizada', 'Borracha  natural vulcanizada', 'MÃ©dio', ' 4 cm', 'tenispg1-5.jpg', 6, 0, 0, 0, 1, 0),
(60, 'TÃŠNIS SUPERGA (AV3505) COURO BRANCO', '35/36/37', '400', '10', 'Branco', 'Couro', ' Borracha natural vulcanizada', 'Nenhum', 'Nenhum', 'tenispg1-6.jpg', 6, NULL, NULL, NULL, NULL, NULL),
(61, 'TÃŠNIS USAFLEX (AV4705) COURO BRANCO', '34/36/37', '259', '5', 'Branco', 'Couro', 'Couro ', 'MÃ©dio', '3cm', 'tenispg1-7.jpg', 6, NULL, NULL, NULL, NULL, NULL),
(62, 'TÃŠNIS ANACAPRI (AU0299) PELO ONÃ‡A', '35/36/37', '130', '3', 'Animal Print', 'Material TecnolÃ³gico', 'Material TecnolÃ³gico', 'Nenhum', 'Nenhum', 'tenispg1-8.jpg', 6, NULL, NULL, NULL, NULL, NULL),
(63, 'TÃŠNIS CONVERSE ALL STAR (AN3441) BRANCO', '36', '150', '3', 'Branco', 'Tecido ', 'Tecido', 'Nenhum', 'Nenhum', 'tenispg1-9.jpg', 6, NULL, NULL, NULL, NULL, NULL),
(64, 'TÃŠNIS SUPERGA (AV3664) ROSA', '35/36/37', '279', '5', 'Rosa', 'Em lona', 'Borracha  natural vulcanizada', 'Nenhum', 'Nenhum', 'tenispg1-11.jpg', 6, NULL, NULL, NULL, NULL, NULL),
(65, 'TÃŠNIS EQUIPAGE  (AV4835) LYCRA PRETA', '35', '190', '2', 'Preto', ' Multimaterial', ' Multimaterial', 'Nenhum', 'Nenhum', 'tenispg1-10.jpg', 6, NULL, NULL, NULL, NULL, 1),
(66, 'TÃŠNIS CONVERSE ALL STAR (AV8434) OUTROS', '35/36/37', '289', '10', 'Azul', 'Couro', 'Couro ', 'MÃ©dio', ' 4 cm', 'tenispg2-2.jpg', 6, NULL, NULL, NULL, NULL, NULL),
(67, 'MULE EQUIPAGE (AJ9511) CARAMELO', '35/36/38', '90', '3', 'Caramelo', 'Nobuck', 'Material TecnolÃ³gico', 'Alto', '6 cm', 'mulepg1-1.jpg', 7, 0, 0, 0, 0, 1),
(70, 'MULE EQUIPAGE (AJ9539) PRETO', '35', '90', '3', 'Preto', 'Nobuck Preto', 'Material TecnolÃ³gico', 'Alto', '6 cm', 'mulepg1-2.jpg', 7, 1, NULL, NULL, NULL, NULL),
(71, 'MULE CLÃUDIA MOURÃƒO (AS4987) VERDE', '35/36/37', '183', '2', 'Verde', 'Couro', 'Couro ', 'Alto', ' 2,5 cm', 'mulepg1-4.jpg', 7, 0, 0, 1, 0, 0),
(72, 'MULE EQUIPAGE (AJ7911) CARAMELO', '34/35/36/37', '90', '2', 'Caramelo', 'Nobuck', 'Nobuck', 'Nenhum', 'Nenhum', 'mulepg1-5.jpg', 7, NULL, NULL, NULL, NULL, NULL),
(73, 'MULE CAMURÃ‡A PRETO', '38', '190', '3', 'Preto', 'CamurÃ§a', 'Couro ', 'Alto', '6cm', 'mulepg1-6.jpg', 7, NULL, NULL, NULL, NULL, NULL),
(74, 'MULE SCHUTZ (AK3907) NOBUCK PRETO', '34', '90', '5', 'Preto', 'Nobuck Preto', 'Nobuck', 'Alto', '5,5 cm', 'mulepg1-9.jpg', 7, NULL, NULL, NULL, NULL, NULL),
(75, 'MULE CLÃUDIA MOURÃƒO (AT3810) NOBUCK AZUL', '35/37', '60', '2', 'Azul', 'Nobuck', 'Nobuck', 'Nenhum', 'Nenhum', 'mulepg2-4.jpg', 7, NULL, NULL, NULL, NULL, NULL),
(76, 'MULE CLÃUDIA MOURÃƒO (AS5939) PRETO', '35/36', '130', '10', 'Preto', 'Couro', 'Couro ', 'Nenhum', 'Nenhum', 'mulepg1-11.jpg', 7, NULL, NULL, NULL, NULL, NULL),
(77, 'MULE SCHUTZ (AT0287) VERDE', '35/36/37/38', '190', '13', 'Verde', ' Multimaterial', ' Multimaterial', 'Nenhum', 'Nenhum', 'mulepg2-1.jpg', 7, 0, 0, 0, 1, 0),
(79, 'MULE EQUIPAGE (AJ8207) NOBUCK PRETO', '36/37', '90', '10', 'Preto', 'Nobuck', 'Nobuck', 'Nenhum', 'Nenhum', 'mulepg2-3.jpg', 7, NULL, NULL, NULL, NULL, NULL),
(80, 'SCARPIN CLÃUDIA MOURÃƒO (AU7401) COURO PRETO', '37/38', '399', '10', 'Preto', 'Couro', 'Couro ', 'Alto', '6,5 cm', 'scarpinpg1-1.jpg', 8, 1, 0, 1, 0, 0),
(81, 'SCARPIN CLÃUDIA MOURÃƒO (AT7288) COURO BEGE', '34/35/36', '249', '10', 'Bege', 'Couro', 'Couro ', 'Alto', '6 cm', 'scarpinpg1-3.jpg', 8, 1, NULL, NULL, NULL, NULL),
(82, 'SCARPIN CLÃUDIA MOURÃƒO (AW4804) BEGE', '35', '130', '10', 'Bege', 'Material TecnolÃ³gico', 'Material TecnolÃ³gico', 'Alto', '6,5 cm', 'scarpinpg1-4.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(83, 'SCARPIN CLÃUDIA MOURÃƒO (AW4739) PRETO', '37/38', '190', '10', 'Preto', 'Material TecnolÃ³gico', 'Material TecnolÃ³gico', 'Alto', '8,5 cm', 'scarpinpg1-5.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(84, 'SCARPIN CLÃUDIA MOURÃƒO (AR8288) COURO BEGE', '36/37', '299', '10', 'Bege', 'Couro', 'Couro ', 'Alto', '10 cm', 'scarpinpg1-6.jpg', 8, NULL, 1, NULL, NULL, NULL),
(85, 'SCARPIN CLÃUDIA MOURÃƒO (AR8101) COURO PRETO', '35/36/37', '130', '10', 'Preto', 'Couro', 'Couro ', 'Alto', '8,5 cm', 'scarpinpg1-7.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(86, 'SCARPIN PYTHON CLÃUDIA MOURÃƒO (AR8930) LAMINADO BRONZE', '35', '659', '10', 'Animal Print', 'Couro Python', 'Couro ', 'Alto', '6 cm', 'scarpinpg1-8.jpg', 8, 0, 0, 0, 0, 1),
(87, 'SCARPIN CLÃUDIA MOURÃƒO (AT7801) COURO PRETO', '37/38/39', '249', '10', 'Preto', 'Couro', 'Couro ', 'Alto', '5,5 cm', 'scarpinpg1-9.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(88, 'SCARPIN CLÃUDIA MOURÃƒO (AU7388) COURO BEGE', '35/36/37', '399', '10', 'Bege', 'Couro', 'Couro ', 'Alto', '6,5 cm', 'scarpinpg1-10.jpg', 8, 0, 0, 0, 1, 0),
(89, 'SCARPIN CLÃUDIA MOURÃƒO (AT7487) PRETO', '35', '130', '10', 'Preto', 'Couro', 'Couro ', 'MÃ©dio', '3cm', 'scarpinpg1-11.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(90, 'SCARPIN CLÃUDIA MOURÃƒO (AU7211) CARAMELO', '35/36/37', '399', '11', 'Caramelo', 'Couro', 'Couro ', 'Alto', '5 cm', 'scarpinpg1-12.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(91, 'SCARPIN PYTHON CLÃUDIA MOURÃƒO (AW7680) LEZARD BEGE', '36/37', '729', '20', 'Animal Print', 'Couro Python', 'Couro ', 'Alto', '9 cm', 'scarpinpg2-1.jpg', 8, NULL, NULL, NULL, NULL, NULL),
(92, 'MULE CLÃUDIA MOURÃƒO (AS5939) BEGE', '36', '130', '10', 'Bege', 'Couro', 'Couro', 'Nenhum', 'Nenhum', 'mulepg2-2.jpg', 7, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `nome_do_titular` varchar(100) NOT NULL,
  `numero_do_cartao` varchar(100) NOT NULL,
  `validade` varchar(100) NOT NULL,
  `codigo_seg` int(20) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `numero_casa` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `nome_do_titular`, `numero_do_cartao`, `validade`, `codigo_seg`, `cpf`, `telefone`, `cep`, `numero_casa`) VALUES
(2, '2', '2', '2', '$2y$10$F6mVSN4UTKLrTyW9cNvToew1xOcoBtmYPePS/mauow1oqEUPNv.le', 'Dalton Felix', '11934-6', '01/04/2030', 589, '239.008.708-61', 12996160691, '11675710', 21),
(11, 'bb', 'bb', 'bb', '$2y$10$NSdvmIOStW.cCYMvsZEojuy6LiWQs.9oZa.6J70lAO.4lQKi5G7LK', '', '', '', 0, '', 0, '', 0),
(0, 'Dalton Felix', 'me-v4@hotmail.com', 'dalton123', '$2y$10$O4haIospcToBYWdoKcijROM7y0B4YfgzNPoxNQ.ChOBQuw1OFEHDu', '', '', '', 0, '', 0, '', 0),
(15, 'cc', 'cc@gmail.com', 'cc', '$2y$10$HtksMnoQozEwPkL0MuAqW.Ogd3QhzzDbT/.3d99xjUA9WxU0rb6.e', '', '', '', 0, '', 0, '', 0),
(1, 'admin', 'sapatop1234@gmail.com', 'admin', '$2y$10$AsGSjs7GnUMa2g3Duz3kG.YOwDs.avPPu9cBi7Lub/wi9eR17f9cK', 'administrador', '123456789', '01/12/2050', 432, '18271018060', 12996165348, '11675710', 40);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
