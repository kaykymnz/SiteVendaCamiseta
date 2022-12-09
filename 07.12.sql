-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Dez-2022 às 13:13
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `base_contatos`
--
CREATE DATABASE IF NOT EXISTS `base_contatos` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `base_contatos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inf_camisetas`
--

DROP TABLE IF EXISTS `inf_camisetas`;
CREATE TABLE IF NOT EXISTS `inf_camisetas` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dtaFab` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dtaRecepcao` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `forma` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `edicao` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `preco` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `liga` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tamanho` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `inf_camisetas`
--

INSERT INTO `inf_camisetas` (`cod`, `usuario`, `dtaFab`, `dtaRecepcao`, `marca`, `modelo`, `forma`, `cor`, `edicao`, `preco`, `time`, `genero`, `liga`, `tamanho`, `foto`) VALUES
(1, '', '$dtaFab', '$dtaRecepcao', '$marca', '$modelo', '$forma', '$cor', '$edicao', '$preco', '$time', '$genero', '$liga', '$tamanho', '$foto'),
(2, '', '2007-02-02', '2020-05-02', 'puma', 'mangaLonga', 'golaRedonda', 'branco', '2007', '240', 'Milan', 'masculino', 'Italiana', 'G', ''),
(3, '', '2020-01-20', '2020-10-29', 'adidas', 'mangaCurta', 'golaRedonda', 'branco', '2020', '240', 'São Paulo', 'masculino', 'Brasileirão', 'G', 'Array'),
(4, '', '2006-05-01', '2022-10-25', 'adidas', 'mangaLonga', 'golaRedonda', 'branco', '2007', '500', 'Milan', 'masculino', 'Italiana', 'G', 'Array'),
(6, '', '2011-10-12', '0202-10-25', 'nike', 'mangaCurta', 'polo', 'azul', '2012', '400', 'Santos', 'masculino', 'Brasileirão', 'G', 'imgs/0c6dddb1212c90980c1cb009caf088ca.jpg'),
(7, '', '2006-02-01', '2022-11-02', 'adidas', 'mangaLonga', 'golaV', 'branco', '2007', '600', 'Milan', 'masculino', 'Italiana', 'G', 'imgs/bfdd5c32ecd53453efa3e389a0b39b8a.jpg'),
(8, '', '2006-02-01', '2022-11-02', 'adidas', 'mangaLonga', 'golaV', 'branco', '2007', '600', 'Milan', 'masculino', 'Italiana', 'G', 'imgs/fc155116ddf30c945e9bc3c3fe82ab8f.jpg'),
(37, '', '2123-02-01', '2022-11-07', 'nike', 'mangaCurta', 'golaRedonda', 'vermelho', '2022', '250', 'Atletico De Madrid', 'masculino', 'La Liga', 'M', 'imgs/6db852b4bc75f6e21b32e60af237025b.jpg'),
(38, '', '2021-12-12', '2022-11-06', 'nike', 'mangaCurta', 'golaRedonda', 'preto', 'Pré-Treino', '600', 'Corinthians', 'feminino', 'Brasileirão', 'P', 'imgs/78272812af96649566a604d39808b596.jpg'),
(39, '', '2014-12-01', '2022-11-08', 'nike', 'mangaCurta', 'golaRedonda', 'azul', '2015', '400', 'Barcelona', 'masculino', 'La Liga', 'G', 'imgs/1a00cdb6c561213822bd863b69209e51.jpg'),
(40, '', '2012-12-04', '2022-11-08', 'nike', 'mangaLonga', 'golaV', 'branco', '2013', '500', 'PSG', 'masculino', 'Ligue 1', 'G', 'imgs/8bce7e33de8dcde8827e99cd3c85a738.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dtaNasc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `posicao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`codigo`, `nome`, `email`, `telefone`, `dtaNasc`, `endereco`, `posicao`, `foto`, `senha`) VALUES
(2, 'erik', 'mandrakinho@157.p2c', '565654654', '', '0', '', 'imgs/1cf912abdc807ec610c4192a642e8723.jpg', '0'),
(3, 'joão', 'jaoerik@php.com', '11936543', '', '0', '', 'imgs/d834430cf89aea6484faa13e1589fa23.jpg', '0'),
(4, 'Augusto', 'guto@gmail.com', '119643552', '2004-12-22', 'Nagib Farah Pedreira', 'Reserva', 'imgs/9777825748d4460b7b2ec66f8e70ed77.jpg', '0'),
(15, 'Erik', 'mandrakinho@gmail.com', '11959367214', '1101663', 'Rua falcão', 'Lateral esquerdo', 'imgs/a3a6095022e8e7464470062a79fa4a65.jpg', '0'),
(11, 'João', 'jao@gmail.com', '119569328', '', '', '', 'imgs/eb89361d5caffb26579e4d8303b42b2d.jpg', '0'),
(12, 'henrique', 'hen@gmail.com', '65465465464', '32111', 'rua virginia', 'goleiro', 'imgs/43d18b81c4f5f432da7a59617abb2b8b.jpg', '0'),
(14, 'henrique', 'hen@gmail.com', '-1', '', 'rua virginia', 'goleiro', 'imgs/922146a180f3f6aae0c3701fa72a57ae.jpg', '0'),
(16, 'Kayky', 'menezeskayky16@gmail.com', '11989346', '2004-06-01', 'rua aguamaré', 'atacante', 'imgs/83000893cd6d4ca854d45b58c06a065c.jpg', '0'),
(17, 'Miguel Mário', 'mm@gmail.com', '11959367214', '2010-10-22', 'Alphavile', 'Goleiro', 'imgs/1d36386ae6cdfade8c9c8cf7afc37a6d.jpg', '202cb962ac59075'),
(18, 'Guilherme', 'gui@gmail.com', '119563832', '2005-03-20', 'Etec Quadra', 'Meia Atante', 'imgs/845d2bc1f2533ae7086514b4eb97f9f2.jpg', '202cb962ac59075'),
(19, 'Guilherme', 'guib@gmail.com', '11653213', '2003-02-01', 'Etec Quadra', 'Meia Atantacante', 'imgs/4f261bd170d85d51e7c723c4b2e25253.jpg', '202cb962ac59075b964b07152d234b70'),
(20, 'Kaykera', 'kayky16@gmail.com', '432', '0101-10-01', 'fgh2452', 'Meia Esquerda', 'imgs/fe25a2fba35454b984074a00d3e99bb2.jpg', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`codigo`, `nome`, `email`, `senha`) VALUES
(1, 'jao', 'jao@gmail.com', '123'),
(2, 'Mandrakynho Kayk', 'mandrakinhoKayk@gmail.com', '123'),
(3, 'Jao', 'j@gmail.com', '123');
--
-- Banco de dados: `bd_loja`
--
CREATE DATABASE IF NOT EXISTS `bd_loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inf_camisetas`
--

DROP TABLE IF EXISTS `inf_camisetas`;
CREATE TABLE IF NOT EXISTS `inf_camisetas` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtaFab` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtaRecepcao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forma` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edicao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `inf_camisetas`
--

INSERT INTO `inf_camisetas` (`cod`, `usuario`, `dtaFab`, `dtaRecepcao`, `marca`, `modelo`, `forma`, `cor`, `edicao`, `preco`, `time`, `genero`, `liga`, `tamanho`, `foto`, `foto2`) VALUES
(104, '5', '2022-06-05', '2022-06-05', 'Nike', 'Conjunto', 'false', 'verde', 'Treino', '600', 'Brasil', 'masculina', 'Copa Do Mundo', 'GG', 'imgs/d5e403c2d0df1a87893da47eed963b6e.jpg', 'imgs/61d9200bb0bb99fcaa0d6b23c881b6b6.jpg'),
(105, '5', '2020-12-20', '2020-12-20', 'Nike', 'Conjunto', 'false', 'preto', 'Treino', '320', 'Barcelona', 'masculina', 'La Liga', 'G', 'imgs/28c5e8a86ce8a3c632e2682a9f8ff751.jpg', 'imgs/b1318ab7860a9286ce8b61c8d06a5ff9.jpg'),
(114, '5', '2022-06-02', '2022-12-03', 'Adidas', 'Manga curta', 'Gola redonda', 'Branco', '', '340', 'Alemanha', 'Masculina', 'Copa Do Mundo', 'G', 'imgs/2b1ca15bf435d0fc59e5f4ab68fa3b6a.jpg', 'imgs/c6d8f268b589ecca1e61f200c2207261.jpg'),
(113, '5', '2020-11-20', '2020-11-20', 'NewBalance', 'Manga Curta', 'Gola V', 'branco', '21/22', '90', 'Bragantino', 'masculina', 'Brasileiro', 'G', 'imgs/66062e1c2b24eab6c3c84f7d35d9f94e.jpg', 'imgs/6d139f6915bca308a1bbc1371153530c.jpg'),
(41, '5', '2021-12-13', '2021-12-13', 'Nike', 'Manga Curta', 'Polo', 'vermelho', '2022', '250', 'Inglaterra', 'masculina', 'Copa Do Mundo', 'G', 'imgs/bbed1ab946befff93c56db53a4e16494.jpg', 'imgs/42b2ad38f4b9144aae1f4eefa0d48a4d.jpg'),
(94, '5', '2022-02-20', '2022-02-20', 'Adidas', 'Manga Curta', 'Gola Redonda', 'branco', '2022', '90', 'Juventus', 'masculina', 'Serie A', 'M', 'imgs/8adcab5f0cc216c1c91527da91817457.jpg', 'imgs/7177104d51b7a63d981a06fceceb5909.jpg'),
(95, '5', '2019-10-10', '2019-10-10', 'Nike', 'Manga Curta', 'Gola Redonda', 'azul', '22/23', '230', 'Inter De Milão', 'masculina', 'Serie A', 'M', 'imgs/3a29bc32321233921ebad3d91bd4a3c1.jpg', 'imgs/0b2f270996833354d7b64ff5aa152e87.jpg'),
(55, '6', '2018-04-01', '2018-04-01', 'Nike', 'Manga Curta', 'Gola Redonda', 'amarelo', '2018', '400', 'Brasil', 'masculina', 'Copa Do Mundo', 'GG', 'imgs/7c8542719c7d7ef9e65eca6d0d5a8395.jpg', 'imgs/f8978de091152352f40e6ecc25ace378.jpg'),
(96, '5', '2018-03-20', '2018-03-20', 'Umbro', 'false', 'false', 'azul', '2018', '130', 'Santos', 'masculina', 'Brasileiro', 'G', 'imgs/6d18815d1f5832549cf3d2ab6921520d.jpg', 'imgs/fa816695902207aa95444d47c3fe22d7.jpg'),
(97, '5', '2020-08-07', '2020-08-07', 'Puma', 'false', 'false', 'verde', '2021', '19', 'Palmeiras', 'masculina', 'Brasileiro', 'G', 'imgs/1f20f90a65afed48b7b07f4c75ee89f6.jpg', 'Array'),
(98, '5', '2016-03-10', '2016-03-10', 'Under Armour', 'Manga Curta', 'Gola V', 'vermelho', '2017', '200', 'Aston Villa', 'masculina', 'Premier League', 'M', 'imgs/cd7e2632fa723d92efdf8af6ebeb9f9e.jpg', ''),
(61, '5', '2020-12-10', '2022-11-03', 'Joma', 'manga curta', 'gola redonda', 'amarelo', '21/22', '210', 'Villareal', 'masculina', 'La Liga', 'G', 'imgs/ae5f70a3c45e89bb81be664789fe5d6f.jpg', ''),
(102, '5', '2016-12-10', '2016-12-10', 'Under Armour', 'Manga Curta', 'Gola Redonda', 'branco', '2017', '150', 'Tottenham', 'masculina', 'Premier League', 'G', 'imgs/b18d598d220fa2f636505388408e84d2.jpg', 'imgs/f6779254b9faeb4e570c5338dde350f5.jpg'),
(91, '5', '2022-06-10', '2022-06-10', 'Puma', 'Manga Curta', 'Gola Redonda', 'vermelho', '22/23', '240', 'Milan', 'masculina', 'Serie A', 'G', 'imgs/cf617f370350480cd7e7dfd15518f605.jpg', 'imgs/31a7898d7eb6de42c05ee0b5a4701bd5.jpg'),
(90, '5', '2022-11-20', '2022-11-20', 'Adidas', 'Manga Curta', 'Polo', 'vermelho', '22/23', '190', 'Internacional', 'masculina', 'Brasileiro', 'M', 'imgs/1f930c98f9a99084a3ba003240c51a35.jpg', 'imgs/9d745e428327b0692aa09cbdcbfb7e90.jpg'),
(71, '5', '2020-02-10', '2020-02-10', 'Nike', 'Manga Curta', 'Gola Redonda', 'rosa', '20/21', '210', 'Barcelona', 'masculina', 'La Liga', 'G', 'imgs/8e5c3225cba2e39cfc7d5b2ace3a68da.jpg', 'imgs/286f49e01f02975b835be2bdc2e27525.jpg'),
(73, '5', '2020-02-20', '2020-02-20', 'Nike', 'Manga Curta', 'Gola V', 'vermelho', '20/21', '240', 'Atlético De Madrid', 'masculina', 'La Liga', 'P', 'imgs/64eab2fdccb321328d912485d0be70d4.jpg', 'imgs/68e861d714ea7fbdb2b38b328e167392.jpg'),
(108, '5', '2021-01-10', '2021-01-10', 'Kappa', 'Manga Curta', 'Gola V', 'preto', '21/22', '30', 'Vasco', 'masculina', 'Brasileiro', 'G', 'imgs/e36ab97cda20a33ad5682d1ea1c3e0de.jpg', 'imgs/0db65c6d736e7942d206f58b7b89ded5.jpg'),
(75, '7', '2022-10-20', '2022-11-21', 'Nike', 'manga curta', 'gola redonda', 'azul', 'Copa 22', '600', 'Brasil', 'masculina', 'Copa Do Mundo', 'P', 'imgs/16dcd6acd1c00fd3f0b16f434ce51105.jpg', ''),
(101, '5', '2016-12-01', '2022-11-28', 'UnderArmour', 'manga curta', 'gola redonda', 'branco', '2017', '160', 'Tottenham', 'masculina', 'Premier League', 'M', 'imgs/b33899069edc0c3b51dba894c70b3bec.jpg', ''),
(103, '5', '2018-05-02', '2022-07-24', 'UnderArmour', 'manga curta', 'polo', 'vermelho', '2016', '130', 'Fluminense', 'masculina', 'Brasileiro', 'M', 'imgs/a8bc54b7ee97d1a6af892bccd2fcfaea.jpg', 'imgs/b524fe208ab8e4124293e91e610ec35a.jpg'),
(92, '5', '2020-02-01', '2022-02-21', 'Nike', 'conjunto', 'false', 'branco', '2022', '210', 'PSG', 'masculina', 'ligue 1', 'G', 'imgs/7e01f2e339fb5953d1adb1e30ab9894d.jpg', 'imgs/eb8ae036ab7fe89bb576fd5948e1eb6a.jpg'),
(93, '5', '2022-02-01', '2022-02-01', 'Puma', 'Conjunto', 'false', 'preto', '2022', '300', 'Milan', 'masculina', 'Serie A', 'GG', 'imgs/18ff3c0d785ff3a70ee71eb1a328ed3d.jpg', 'imgs/041e561250a9e5f1d81d0db51c106a35.jpg'),
(86, '5', '2006-02-01', '2006-02-01', 'Adidas', 'Manga Curta', 'Gola Redonda', 'branco', 'Copa 22', '210', 'Argentina', 'masculina', 'Copa Do Mundo', 'P', 'imgs/be36e2d8f109d3ed1eaf341822cedc47.jpg', 'imgs/f51a2c1af06ce354c8da7fb68de4c7de.jpg'),
(88, '5', '2021-12-10', '2022-11-21', 'Adidas', 'manga curta', 'gola V', 'branco', '2022', '1.000', 'São Paulo', 'masculina', 'Brasileiro', 'M', 'imgs/4b154b980196ebbca3b508ff4fb96597.jpg', 'imgs/080fc17e4f58b321a4d0902f6050775d.jpg'),
(87, '5', '2021-12-10', '2022-02-21', 'Adidas', 'manga curta', 'gola redonda', 'vermelho', '2022', '210', 'Flamengo', 'masculina', 'Brasileiro', 'P', 'imgs/d31d1b52fdf25b0a217883f3ddc01d76.jpg', 'imgs/e01ba788ba5024258626e17a800d8012.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`codigo`, `nome`, `foto`, `email`, `senha`) VALUES
(1, 'jao', 'imgs/d87b6363939d0d42670182aebed90a1e.jpg', 'jao@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Mandrakynho Kayk', '', 'mandrakinhoKayk@gmail.com', '123202cb962ac59075b964b07152d234'),
(3, 'Jao', '', 'j@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Erik', '', 'Mandrakinho@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Kayky', 'imgs/024da127b93e935b357bc3ba8056f830.jpg', 'kayk@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Augusto', '', 'aug@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Ana Luisa', '', 'nalu@gmail.com', '2509202cb962ac59075b964b07152d23'),
(8, 'Ana Julia Martins ', '', 'martinsdecarvalhoanajulia@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'augusto', '', 'augusto@gmail.com', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
