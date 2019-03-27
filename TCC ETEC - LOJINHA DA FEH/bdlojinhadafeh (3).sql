-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2017 às 11:55
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlojinhadafeh`
--
CREATE DATABASE IF NOT EXISTS `bdlojinhadafeh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdlojinhadafeh`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcliente`
--

CREATE TABLE `tblcliente` (
  `codigoCliente` int(11) NOT NULL,
  `nomeCliente` varchar(50) DEFAULT NULL,
  `cpfCliente` varchar(14) DEFAULT NULL,
  `rgCliente` varchar(12) DEFAULT NULL,
  `telcasaCliente` varchar(12) DEFAULT NULL,
  `telcelCliente` varchar(13) DEFAULT NULL,
  `telcelClientedois` varchar(13) DEFAULT NULL,
  `senhaCliente` varchar(32) DEFAULT NULL,
  `emailCliente` varchar(50) DEFAULT NULL,
  `enderecoCliente` varchar(60) DEFAULT NULL,
  `nivelCliente` int(11) DEFAULT NULL,
  `cepCliente` varchar(11) DEFAULT NULL,
  `statusCliente` int(11) DEFAULT NULL,
  `moradiaCliente` varchar(20) DEFAULT NULL,
  `complementoCliente` varchar(5) DEFAULT NULL,
  `numerocasaCliente` int(11) DEFAULT NULL,
  `datanascCliente` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblcliente`
--

INSERT INTO `tblcliente` (`codigoCliente`, `nomeCliente`, `cpfCliente`, `rgCliente`, `telcasaCliente`, `telcelCliente`, `telcelClientedois`, `senhaCliente`, `emailCliente`, `enderecoCliente`, `nivelCliente`, `cepCliente`, `statusCliente`, `moradiaCliente`, `complementoCliente`, `numerocasaCliente`, `datanascCliente`) VALUES
(1, 'asd', '123', '123', '123', '123', '123', '202cb962ac59075b964b07152d234b70', 'master', 'asd', 1, '123', 1, 'asd', 'B', 1, '1999-12-14'),
(11, 'Caio Vicente', '43626791890', '383873083', '27490235', '978453265', NULL, '6e8916bab9be9fdd55f401f1b85d62db', 'caio.vlima@hotmail.com', 'Avenida  Paulista', 1, '03561040', 1, 'Casa', 'B', 15, '1999-12-14'),
(12, 'Mateus Sanderson', '43626791890', '383873083', '27490235', '978453265', NULL, 'a26f46477cd936c638fe001274c9d47e', 'mateus.sanderson@hotmail.com', 'Avenida  Paulista', 0, '03561040', 1, 'Casa', 'B', 15, '1999-12-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcompra`
--

CREATE TABLE `tblcompra` (
  `codigoCompra` int(11) NOT NULL,
  `valorCompra` decimal(10,2) DEFAULT NULL,
  `dataCompra` datetime DEFAULT NULL,
  `quantidadeCompra` int(11) DEFAULT NULL,
  `codCliente` int(11) DEFAULT NULL,
  `statusCompra` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblcompra`
--

INSERT INTO `tblcompra` (`codigoCompra`, `valorCompra`, `dataCompra`, `quantidadeCompra`, `codCliente`, `statusCompra`) VALUES
(29, '772.39', '2017-06-28 12:36:00', 5, 1, 0),
(28, '316.50', '2017-06-28 12:24:27', 3, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblestoque`
--

CREATE TABLE `tblestoque` (
  `codigoProduto` int(11) NOT NULL,
  `precoProduto` decimal(10,2) DEFAULT NULL,
  `quantidadeProduto` int(11) DEFAULT NULL,
  `nomeProduto` varchar(50) DEFAULT NULL,
  `descricaoProduto` text,
  `imagemProduto` varchar(50) DEFAULT NULL,
  `tipoProduto` varchar(50) DEFAULT NULL,
  `estoquemin` int(11) NOT NULL,
  `ativacaoProduto` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblestoque`
--

INSERT INTO `tblestoque` (`codigoProduto`, `precoProduto`, `quantidadeProduto`, `nomeProduto`, `descricaoProduto`, `imagemProduto`, `tipoProduto`, `estoquemin`, `ativacaoProduto`) VALUES
(27, '10.00', NULL, 'Botão imã prata', '  10 pares', '../bdFotos/36326e0684a2415dc619530d4b74f900.jpg', '', 0, 1),
(26, '10.00', NULL, 'Botão imã ouro velho', ' 10 pares ', '../bdFotos/456087a75b6372b3c02dccdb1f4f8f34.jpg', 'Nylon Dublado', 0, 1),
(25, '16.90', NULL, 'Mini mosquetinho e mini meia argola', '   ', '../bdFotos/3a4f14085063a28f89a0b7a0cd09454d.jpg', 'Plástico Cristal', 0, 1),
(24, '5.99', NULL, 'Fecho clic prata', '   ', '../bdFotos/bd45e1dcf190449635b288815435825c.jpg', 'Courino', 0, 1),
(23, '29.00', NULL, 'Par de alças de couro p/ bolsa de ombro ', '   ', '../bdFotos/cda37f585a7a371065308b6ae069071d.jpg', 'Agulhas', 0, 1),
(22, '1.10', NULL, 'Peça fecho e passador vermelho', '   ', '../bdFotos/046df8a01599ed59fc820e9623568e7b.jpg', 'Matriz de Forrar Botão', 0, 1),
(21, '1.10', NULL, 'Peça fecho e passador azul', '  ', '../bdFotos/b03bac2675a7450e3bc65da36dde7247.jpg', 'Matriz de Forrar Botão', 0, 1),
(20, '1.10', 1000, 'Peça fecho e passador branco', '         asdwasd  ', '../bdFotos/503ff293b7b79b187caaea4e22a2c35a.jpg', 'Matriz de Forrar Botão', 100, 1),
(28, '65.00', NULL, 'Meia argola', ' 3 cm  ', '../bdFotos/87fd08d18a5d2f96d88424f678d5e34e.jpg', '', 0, 1),
(29, '65.00', NULL, 'Argola', '3 cm', '../bdFotos/ddf4cebafaf7b14a9ce1248bdbd10c57.jpg', '', 0, 1),
(30, '65.00', NULL, 'Triângulo', '3 cm', '../bdFotos/6120eb4f73492ea04169d6c2f30159ad.jpg', '', 0, 1),
(31, '12.65', NULL, 'asd', 'asd ', '../bdFotos/1fcc614a3be601d47818bbd7bad6b722.jpg', 'Linhas', 0, 0),
(32, '12.00', 25, 'teste', '       asd        ', '../bdFotos/8fcb88629c0a90fca28ab682df9b8295.jpg', 'Meias Perolas', 30, 0),
(33, '22.00', 200, 'Tecido Avulso 01', 'Cortes a partir de 1,40 x 1,00 (METRO) ', '../bdFotos/dbb50df6ef565f0b9bab3cf4163018e7.jpg', 'Tecidos', 50, 1),
(34, '22.00', 200, 'Tecido Avulso 02', 'Cortes a partir de 1,40 x 1,00 (METRO) ', '../bdFotos/8228edda4fdd7fa3605a8d4208b475ab.jpg', 'Tecidos', 50, 1),
(35, '22.00', 200, 'Tecido Avulso 03', 'Cortes a partir de 1,40 x 1,00 (METRO) ', '../bdFotos/e9b2d1f9fc903483a685d497a85fc03a.jpg', 'Tecidos', 50, 1),
(36, '22.00', 200, 'Tecido Avulso 04', 'Cortes a partir de 1,40 x 1,00 (METRO) ', '../bdFotos/6f15fe517fdabd85731d4014fd21dacd.jpg', 'Tecidos', 50, 1),
(37, '22.00', 200, 'Tecido Avulso 05', 'Cortes a partir de 1,40 x 1,00 (METRO) ', '../bdFotos/4cdb8edf3dbf3a90b95d7662765496e1.jpg', 'Tecidos', 50, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblitemcompra`
--

CREATE TABLE `tblitemcompra` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valorUnitario` decimal(10,2) DEFAULT NULL,
  `valorTotal` decimal(10,2) DEFAULT NULL,
  `codCliente` int(11) DEFAULT NULL,
  `codCompra` int(11) DEFAULT NULL,
  `codProduto` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblitemcompra`
--

INSERT INTO `tblitemcompra` (`codigo`, `nome`, `quantidade`, `valorUnitario`, `valorTotal`, `codCliente`, `codCompra`, `codProduto`) VALUES
(18, 'Peça fecho e passador vermelho', 5, '1.10', '5.50', 1, 29, 22),
(17, 'Triângulo', 3, '65.00', '195.00', 1, 28, 30),
(16, 'Par de alças de couro p/ bolsa de ombro ', 4, '29.00', '116.00', 1, 28, 23),
(15, 'Peça fecho e passador vermelho', 5, '1.10', '5.50', 1, 28, 22),
(19, 'Par de alças de couro p/ bolsa de ombro ', 4, '29.00', '116.00', 1, 29, 23),
(20, 'Triângulo', 3, '65.00', '195.00', 1, 29, 30),
(21, 'Meia argola', 6, '65.00', '390.00', 1, 29, 28),
(22, 'Fecho clic prata', 11, '5.99', '65.89', 1, 29, 24);

--
-- Acionadores `tblitemcompra`
--
DELIMITER $$
CREATE TRIGGER `aiItemCompra` AFTER INSERT ON `tblitemcompra` FOR EACH ROW update tblestoque set quantidadeProduto = quantidadeProduto - new.quantidade
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbltiposprodutos`
--

CREATE TABLE `tbltiposprodutos` (
  `codigotipo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbltiposprodutos`
--

INSERT INTO `tbltiposprodutos` (`codigotipo`, `nome`) VALUES
(1, 'Balancim'),
(2, 'Matriz de Forrar Botão'),
(3, 'Matriz de Ilhós'),
(4, 'Matriz de Rebite'),
(5, 'Matriz Botão Metal'),
(6, 'Vazador'),
(7, 'Tecidos'),
(8, 'Linhas'),
(9, 'Agulhas'),
(10, 'Botões'),
(11, 'Courino'),
(12, 'Plástico Cristal'),
(13, 'Tesouras'),
(14, 'Meias Perolas'),
(15, 'Tela Voley'),
(16, 'Nylon Dublado'),
(17, 'Ziper'),
(18, 'Cursores'),
(19, 'Alças de Couro para Bolsa'),
(20, 'Rolo de Alças de Algodão'),
(21, 'Ferragens para Bolsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Indexes for table `tblcompra`
--
ALTER TABLE `tblcompra`
  ADD PRIMARY KEY (`codigoCompra`),
  ADD KEY `codCliente` (`codCliente`);

--
-- Indexes for table `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD PRIMARY KEY (`codigoProduto`);

--
-- Indexes for table `tblitemcompra`
--
ALTER TABLE `tblitemcompra`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codCliente` (`codCliente`),
  ADD KEY `codCompra` (`codCompra`),
  ADD KEY `codProduto` (`codProduto`);

--
-- Indexes for table `tbltiposprodutos`
--
ALTER TABLE `tbltiposprodutos`
  ADD PRIMARY KEY (`codigotipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcliente`
--
ALTER TABLE `tblcliente`
  MODIFY `codigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblcompra`
--
ALTER TABLE `tblcompra`
  MODIFY `codigoCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tblestoque`
--
ALTER TABLE `tblestoque`
  MODIFY `codigoProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tblitemcompra`
--
ALTER TABLE `tblitemcompra`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbltiposprodutos`
--
ALTER TABLE `tbltiposprodutos`
  MODIFY `codigotipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
