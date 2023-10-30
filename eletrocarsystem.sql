-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Dez-2017 às 22:03
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eletrocarsystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(9) NOT NULL,
  `nome_cliente` varchar(20) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `veiculo` varchar(15) NOT NULL,
  `placa` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cpf`, `veiculo`, `placa`) VALUES
(1, 'ericles', 3454669006, 'corsa', 'idh2210'),
(2, 'Jose Aldo', 69364756089, 'Camaro', 'IHJ-020'),
(3, 'Anazazeno', 111, 'Ferrari', 'III-111'),
(4, 'Aroudo', 1111111111111, 'Vectra', 'ILP-556'),
(5, 'Manoel', 777777777777, 'Fusca', 'KKK-001'),
(6, 'Juca', 999999999, 'Porshe', 'ABA-829'),
(10, 'Gilmar', 4, 'Maverick', 'PPP-332'),
(17, 'Tarso', 33333, 'Jaguar', 'IPJ-059'),
(18, 'Avenor', 6235967131, 'Ka', 'IJL-220'),
(19, 'Leonardo Abreu', 65478932112, 'Mustang', 'MUS-748');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(9) NOT NULL,
  `data_compra` date NOT NULL,
  `id_vendedor` int(9) NOT NULL,
  `id_cliente` int(9) NOT NULL,
  `id_prodserv` int(9) NOT NULL,
  `qtd` int(11) NOT NULL,
  `valortotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `data_compra`, `id_vendedor`, `id_cliente`, `id_prodserv`, `qtd`, `valortotal`) VALUES
(1, '2017-11-24', 1, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_servicos`
--

CREATE TABLE `produtos_servicos` (
  `id_prodserv` int(9) NOT NULL,
  `nome_prodserv` varchar(20) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_servicos`
--

INSERT INTO `produtos_servicos` (`id_prodserv`, `nome_prodserv`, `preco`) VALUES
(1, 'lampada', 20),
(3, 'troca de lampada', 10),
(4, 'Farol', 200),
(5, 'Instalar som', 150);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_pedido`
--

CREATE TABLE `produto_pedido` (
  `id_pedido` int(9) NOT NULL,
  `id_prodserv` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(9) NOT NULL,
  `nome_vendedor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nome_vendedor`) VALUES
(1, 'Magdiel'),
(2, 'Josafa da novela'),
(3, 'Ricardo'),
(4, 'Janice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `produtos_servicos`
--
ALTER TABLE `produtos_servicos`
  ADD PRIMARY KEY (`id_prodserv`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produtos_servicos`
--
ALTER TABLE `produtos_servicos`
  MODIFY `id_prodserv` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
