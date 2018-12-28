-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Dez-2018 às 16:33
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cultura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `texto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'André Roberto Ortoncelli', 'ar_ortoncelli@hotmail.com', 'Parabéns pelo site, ele está muito bonito', '2018-12-11 08:52:37', '2018-12-11 08:52:37', NULL),
(2, 'Renata Padilha', 'renata@utfpr.edu.br', 'ajas asd lfasj dfas f asdas ddf ', '2018-12-11 15:29:35', '2018-12-11 15:29:35', NULL),
(3, 'João Da Silva', 'joao@teste.com.br', 'sfjasdf  asdf asdf as dfas dfasdf', '2018-12-17 02:17:35', '2018-12-17 02:19:38', '2018-12-17 02:19:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ano` year(4) DEFAULT NULL,
  `arquivo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idEventos` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `download`
--

INSERT INTO `download` (`id`, `titulo`, `ano`, `arquivo`, `idEventos`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Edital do Evento', 2018, '1.pdf', 1, '2018-12-11 06:37:01', '2018-12-11 06:37:19', NULL),
(2, 'Errata do Edital', 2018, '2.pdf', 1, '2018-12-11 06:37:40', '2018-12-11 06:37:53', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `texto`, `titulo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>O concurso de fotografias tem o objetivo de ...</p>\r\n\r\n<p>Tema do concurso de 2018:<strong> &quot;Lugar de mulher &eacute; onde ela quiser&quot;</strong>.</p>\r\n\r\n<p><strong>Datas e Prazos:</strong></p>\r\n\r\n<p>Inscri&ccedil;&otilde;es:de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>Vota&ccedil;&atilde;o: de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>Divulga&ccedil;&atilde;o do resultado:de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n', 'Concurso de Fotografias - 2018', '2018-12-11 06:13:23', '2018-12-11 08:36:16', NULL),
(2, '<p>O concurso t&ecirc;m o objetivo de ................................</p>\r\n\r\n<p><strong>Datas e prazos:</strong></p>\r\n\r\n<p>Inscri&ccedil;&otilde;es:de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>Vota&ccedil;&atilde;o: de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>Divulga&ccedil;&atilde;o do resultado:de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n', 'Concurso de Contos e Poesias - 2018', '2018-12-11 06:13:49', '2018-12-11 08:35:07', NULL),
(3, '<p>O concurso t&ecirc;m o objetivo de ................................</p>\r\n\r\n<p><strong>Datas e prazos:</strong></p>\r\n\r\n<p>Inscri&ccedil;&otilde;es:de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>Vota&ccedil;&atilde;o: de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>Divulga&ccedil;&atilde;o do resultado:de __/__ / 2018 at&eacute;&nbsp;__/__ / 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Local:</strong> audit&oacute;rio da UTFPR-DV</p>\r\n', 'Festival da Canção - 2018', '2018-12-11 06:15:01', '2018-12-11 08:46:24', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) unsigned NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `dataNoticia` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `Img_Site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `texto`, `dataNoticia`, `created_at`, `updated_at`, `deleted_at`, `Img_Site`) VALUES
(1, 'Festival Municipal do Canto Dourado - Dois Vizinhos', '<p>Nos dias 07 e 08/12 acontece o Festival Municipal da Can&ccedil;&atilde;o - Canto Dourado.</p>\r\n\r\n<p>No dia 07/12 ser&aacute; a eliminat&oacute;ria da categoria Viola Caipira e no dia 08/12 a partir das 18h ser&atilde;o as apresenta&ccedil;&otilde;es das categorias adulto e infanto juvenil.</p>\r\n\r\n<p>O evento ter&aacute; tr&ecirc;s categorias, sendo elas: Infanto Juvenil, Adulto e Viola Caipira. Para mais informa&ccedil;&otilde;es via Whatsapp (46) 999401240.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fonte:<a href="http:// http://doisvizinhos.pr.gov.br">&nbsp;http://doisvizinhos.pr.gov.br</a></p>\r\n', '2018-12-06', '2018-12-11 06:12:44', '2018-12-11 08:13:59', NULL, NULL),
(2, 'Abertura do Natal de Pato Branco reúne milhares de pessoas', '<p>A Prefeitura de Pato Branco realizou, no &uacute;ltimo s&aacute;bado, dia 1&ordm; de dezembro, a abertura do Natal de Pato Branco. Na ocasi&atilde;o, o maior desfile de Natal do Estado do Paran&aacute; reuniu mais de 350 personagens e 19 carros aleg&oacute;ricos, que foram o grande destaque desta edi&ccedil;&atilde;o. Quem prestigiou o evento, na Pra&ccedil;a Presidente Vargas ou pelas redes sociais, por meio da transmiss&atilde;o ao vivo, p&ocirc;de conferir a criatividade e as inova&ccedil;&otilde;es que, anualmente, atraem milhares de pessoas e confirmam o Natal de Pato Branco como atra&ccedil;&atilde;o tur&iacute;stica para o Sul do Brasil.&nbsp;</p>\r\n\r\n<p>As atra&ccedil;&otilde;es art&iacute;sticas e culturais seguem at&eacute; 23 de dezembro e a programa&ccedil;&atilde;o completa pode ser conferida no site oficial do evento (natal.patobranco.pr.gov.br) e tamb&eacute;m na fanpage (facebook/natalpatobranco).</p>\r\n\r\n<p>Entre as atra&ccedil;&otilde;es est&atilde;o a Casa do Papai Noel,&nbsp;Festival de Food Truck e&nbsp;Roda-gigante e cavalaria.</p>\r\n\r\n<p>Fonte: <a href="http://www.portaldoisvizinhos.com.br/notindividual.asp?id=30656#.XA9T72hKjIU">http://www.portaldoisvizinhos.com.br</a></p>\r\n', '2018-12-01', '2018-12-11 06:20:34', '2018-12-11 08:12:55', NULL, NULL),
(3, 'Teste - bla bla bla', '<p>basdjfaklsfj as dfa skdfj askdf jasklfd as asdf asdf</p>\r\n', '2018-12-11', '2018-12-11 15:26:44', '2018-12-17 02:18:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE IF NOT EXISTS `sobre` (
  `id` int(10) unsigned NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id`, `texto`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '<p>A comiss&atilde;o de cultura da UTFPR tem o objetivo de promover iniciativas para promo&ccedil;&atilde;o de cultura dentro da UTFPR-DV, para os alunos, servidores e comunidade em geral. A comiss&atilde;o tamb&eacute;m tem o objetivo de implantar as diretrizes do plano de cultura da UTFPR.</p>\r\n\r\n<p>A portaria 29/2018 da Dire&ccedil;aio Geral da UTFPR designa os membros da Comiss&ccedil;&atilde;o Local respons&aacute;vel pela implementa&ccedil;&atilde;o do Plano de Cultura do C&acirc;mpus Dois Vizinhos:</p>\r\n\r\n<p><strong>Presidente:</strong></p>\r\n\r\n<ul>\r\n	<li>Renata Padilha de Souza</li>\r\n</ul>\r\n\r\n<p><strong>Membros:</strong></p>\r\n\r\n<ul>\r\n	<li>Andr&eacute; Roberto Ortoncelli</li>\r\n	<li>Gustavo Sene Silva</li>\r\n	<li>Keli Rodrigues do Amaral Benin</li>\r\n	<li>Marcelo Tavares</li>\r\n	<li>Paulo Fernando Diel</li>\r\n	<li>Raquel De Almeida Rocha Ponzoni</li>\r\n	<li>Sabrina Endo Takahashi</li>\r\n	<li>Veridiana L&uacute;cia Stachowski Kuss</li>\r\n</ul>\r\n\r\n<p><strong>Representantes discentes:</strong></p>\r\n\r\n<ul>\r\n	<li>Maiane Cristina Rodrigues Dos Santos</li>\r\n	<li>Gabriela Go&ccedil;alves Dias Michellin</li>\r\n	<li>Renata Amanda Aguilar Fernandes<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', '', '0000-00-00 00:00:00', '2018-12-11 08:19:09', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'André Roberto Ortoncelli', 'ortoncelli@utfpr.edu.br', '$2y$10$UjWsnkzj/pDYK8q34Pz2Ae80qpdJFpgvDMKO8kb/3of.ze8dhGYKq', '5mApGWZqFdsiSgdwMSBR6iewqTQVb6DikWOZWj17B4Ju8bXkXuqzcA63xRkr', '2018-09-23 23:49:09', '2018-12-24 16:53:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
