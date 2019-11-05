-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 03:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enem`
--

-- --------------------------------------------------------

--
-- Table structure for table `questoes`
--

CREATE TABLE `questoes` (
  `id` int(11) NOT NULL,
  `enunciado` varchar(1000) NOT NULL,
  `imagem` varchar(30) NOT NULL,
  `alternativaA` varchar(100) NOT NULL,
  `alternativaB` varchar(100) NOT NULL,
  `alternativaC` varchar(100) NOT NULL,
  `alternativaD` varchar(100) NOT NULL,
  `alternativaE` varchar(100) NOT NULL,
  `alternativaCorreta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questoes`
--

INSERT INTO `questoes` (`id`, `enunciado`, `imagem`, `alternativaA`, `alternativaB`, `alternativaC`, `alternativaD`, `alternativaE`, `alternativaCorreta`) VALUES
(1, 'A memÃ³ria recuperada entre a autora representa a relaÃ§Ã£o entre:', '2019.11.03-20.58.21.jpg', 'conflito trabalhista e engajamento sindical', 'organizaÃ§Ã£o familiar e proteÃ§Ã£o Ã  infÃ¢ncia', 'centralizaÃ§Ã£o econÃ´mica e pregaÃ§Ã£o religiosa', 'estrutura educacional e desigualdade de renda', 'transformaÃ§Ã£o polÃ­tica e modificaÃ§Ã£o de costumes', 'transformaÃ§Ã£o polÃ­tica e modificaÃ§Ã£o de costumes'),
(2, 'Um exemplo de tal processo Ã© o:', '2019.11.03-21.40.56.jpg', 'desenvolvimento embrionÃ¡rio', 'reproduÃ§Ã£o sexuada', 'respiraÃ§Ã£o aerÃ³bica', 'excreÃ§Ã£o urinÃ¡ria', 'sÃ­ntese proteica', 'sÃ­ntese proteica'),
(3, 'Nesse contexto, a qualidade nutricional do grÃ£o de trigo serÃ¡ modificada primariamente pela reduÃ§Ã£o de', '2019.11.03-22.40.16.jpg', 'amido', 'frutose', 'lipÃ­deos', 'celulose', 'proteÃ­nas', 'proteÃ­nas'),
(4, 'No texto, evidencia-se que a construÃ§Ã£o do significado da palavra mandinga resulta de um(a)', '2019.11.03-22.43.28.jpg', 'contexto sÃ³cio-histÃ³rico', 'diversidade Ã©tnica', 'descoberta geogrÃ¡fica', 'apropriaÃ§Ã£o religiosa', 'contraste cultural', 'contexto sÃ³cio-histÃ³rico'),
(5, 'Uma caracterÃ­stica do gÃªnero diÃ¡rio que aparece na letra de Chico Buarque Ã© o:', '2019.11.03-22.47.03.jpg', 'recorrÃªncia de verbos no infinitivo', 'predominÃ¢ncia de tom poÃ©tico', 'uso de rimas na composiÃ§Ã£o', 'narrativa autorreflexiva', 'n.d.a', 'narrativa autorreflexiva'),
(6, 'Considerando os princÃ­pios expostos no texto, o drible no handebol caracteriza o princÃ­pio de:', '2019.11.03-22.50.49.jpg', 'recuperaÃ§Ã£o da bola', 'progressÃ£o da equipe', 'finalizaÃ§Ã£o da jogada', 'proteÃ§Ã£o do prÃ³prio alvo', 'impedimento do avanÃ§o adversÃ¡rio', 'progressÃ£o da equipe'),
(7, 'Nos prÃ³ximos dois meses essa empresa deverÃ¡ comprar a mesma quantidade de matÃ©ria-prima comprada no mÃªs', '2019.11.03-22.54.45.jpg', 'I', 'II', 'IV', 'V', 'VII', 'V'),
(8, 'A marca a ser escolhida Ã©:', '2019.11.03-23.05.32.jpg', 'A', 'B', 'C', 'D', 'E', 'B'),
(9, 'Com base no quadro, qual Ã© a moda do nÃºmero de pessoas no elevador durante a subida do tÃ©rreo ao quinto andar?', '2019.11.03-23.08.08.jpg', '2', '3', '4', '5', '6', '5'),
(10, 'A tÃ©cnica de dataÃ§Ã£o apresentada no texto sÃ³ Ã© possÃ­vel devido a:', '2019.11.03-23.13.06.jpg', 'proporÃ§Ã£o conhecida entre carbono-14 e carbono-12 na atmosfera ao longo dos anos', 'decomposiÃ§Ã£o de todo o carbono-12 presente no organismo apÃ³s a morte', 'fixaÃ§Ã£o maior de carbono-14 nos tecidos de organismos apÃ³s a morte', 'emissÃ£o de carbono-12 pelos tecidos de organismos apÃ³s a morte', 'transformaÃ§Ã£o do carbono-12 em carbono-14 ao longo dos anos', 'proporÃ§Ã£o conhecida entre carbono-14 e carbono-12 na atmosfera ao longo dos anos');

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_questao` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Hora` time DEFAULT NULL,
  `alternativaResp` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Joao', 'jota', '85ad902286ae933575ca51ab45f60399');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_questao` (`id_questao`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `respostas_ibfk_2` FOREIGN KEY (`id_questao`) REFERENCES `questoes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
