-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 m. Bir 29 d. 10:09
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manopuslapis`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `atsiliepimai1`
--

CREATE TABLE `atsiliepimai1` (
  `Atsiliepimo_id` int(11) NOT NULL,
  `E_mail` varchar(40) NOT NULL,
  `Vardas` varchar(40) DEFAULT NULL,
  `Zinute` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `IP` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `atsiliepimai1`
--

INSERT INTO `atsiliepimai1` (`Atsiliepimo_id`, `E_mail`, `Vardas`, `Zinute`, `data`, `IP`) VALUES
(6, 'qweqw', 'wqe', 'qwe', '2017-06-02', '::1'),
(7, '', '', '', '2017-06-02', '::1'),
(8, '', '', '', '2017-06-02', '::1'),
(9, '', '', '', '2017-06-02', '::1'),
(10, '', '', '', '2017-06-02', '::1'),
(11, '', '', '', '2017-06-02', '::1'),
(12, '', '', '', '2017-06-02', '::1'),
(13, 'asdads', 'asdass', 'asdasd', '2017-06-03', '::1'),
(14, 'asdads', 'asdass', 'asdasd', '2017-06-03', '::1'),
(15, 'asdasd', 'asdas', 'adsadadsa', '2017-06-03', '::1'),
(16, 'asdadd', 'asdasd', 'asdasdsa', '2017-06-03', '::1'),
(17, 'werer', 'wrwerwe', 'wrewrwerw', '2017-06-03', '::1'),
(18, 'asdfa', 'safdads', 'asdfasdf', '2017-06-03', '::1'),
(19, 'asdfads', 'asdfasdf', 'asdfasdf', '2017-06-03', '::1'),
(20, 'asd', 'asdas', 'asdasdsa', '2017-06-03', '::1'),
(21, 'asdf', 'asdf', 'asdfasdf', '2017-06-03', '::1'),
(22, 'asdas', 'asdasd', 'asdasdad', '2017-06-03', '::1'),
(23, 'adsad', 'asdasd', 'asdasdasdasdasd', '2017-06-03', '::1'),
(24, 'asdsa', 'asdasd', 'asdad', '2017-06-03', '::1'),
(25, 'sdfdsfs', 'sdfsdf', 'sdfsf', '2017-06-03', '::1'),
(26, 'sdfsdf', 'sdfsf', 'sdfsfsfd', '2017-06-03', '::1'),
(27, 'asdada', 'adsada', 'asdads', '2017-06-03', '::1'),
(28, 'asdsad', 'asdsada', 'asdad', '2017-06-03', '::1'),
(29, 'asdas', 'asdada', 'asdasdad', '2017-06-04', '::1'),
(30, 'gdfgdfgd', 'dgfdgdg', 'dgfdgdg', '2017-06-04', '::1'),
(31, 'asdas', 'asdads', 'asda', '2017-06-04', '::1'),
(32, 'ads', 'asda', 'asdadad', '2017-06-04', '::1'),
(33, 'sadfas', 'asdfasd', 'asfasf', '2017-06-04', '::1'),
(34, 'asdas', 'asda', 'asdas', '2017-06-04', '::1'),
(35, 'asd', 'asdsa', 'asd', '2017-06-04', '::1');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT 'Guest',
  `text` text NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT '',
  `time` varchar(11) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `comments`
--

INSERT INTO `comments` (`id`, `userEmail`, `username`, `text`, `date`, `time`) VALUES
(86, 'domas@romas.lt', 'romas', 'domastekstas', '2017-05-30 17:31:16', '');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `komentarai`
--

CREATE TABLE `komentarai` (
  `id` int(11) NOT NULL,
  `Komentaras` varchar(10000) NOT NULL,
  `Vartotojo_vardas` varchar(30) DEFAULT NULL,
  `Laikas` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `komentarai`
--

INSERT INTO `komentarai` (`id`, `Komentaras`, `Vartotojo_vardas`, `Laikas`) VALUES
(17, 'asdadsa', 'lol', '2017-06-05 17:29:22'),
(18, 'qweqwe', 'lol', '2017-06-05 17:38:26'),
(19, 'qweqeqeqweqwe', 'lol', '2017-06-05 17:38:29'),
(20, 'qewqeqweqe', 'lol', '2017-06-05 17:38:31'),
(21, 'qeweqeqeqwew', 'lol', '2017-06-05 17:38:33'),
(22, '', '', '2017-06-05 17:48:07'),
(23, 'fsdsfsdfsdsf', 'lol', '2017-06-05 18:17:06'),
(24, 'dasdasdasdasd', 'lol', '2017-06-05 18:17:57'),
(25, 'asdasd', 'lol', '2017-06-05 18:18:40'),
(26, 'sadaas', 'lol', '2017-06-05 18:19:21'),
(27, 'gssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'lol', '2017-06-05 19:14:41'),
(28, 'Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best Best', 'lol', '2017-06-05 19:16:19'),
(29, 'asdffdsasf\r\n\r\n\r\n\r\nafsafasdfas', 'lol', '2017-06-05 19:54:05'),
(30, '', 'lol', '2017-06-05 20:24:00'),
(31, '', 'lol', '2017-06-05 20:26:43'),
(32, '', 'lol', '2017-06-05 20:27:59'),
(33, '', 'lol', '2017-06-05 20:29:33'),
(34, '', 'lol', '2017-06-05 20:29:40'),
(35, 'czcxczccxzx', 'lol', '2017-06-05 22:10:06');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `userEmail` text NOT NULL,
  `rights` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `userEmail`, `rights`) VALUES
(6, 'testas', 'testas', 'testas@testas.lt', 'administratorius'),
(11, 'domas', 'domasttt', 'asd@asd.lt', 'vartotojas'),
(14, 'sausainiai', 'sausainiai', 'projektas@sausainiai.lt', 'administratorius'),
(15, 'aldona', 'assdasd', 'vcs@aldona.lt', 'vartotojas'),
(16, 'domasdomas', 'domas', 'vcs@vcs.lt', 'vartotojas');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `registruotivart`
--

CREATE TABLE `registruotivart` (
  `Vardas` varchar(30) NOT NULL,
  `El_pastas` varchar(50) NOT NULL,
  `Slaptazodis` varchar(255) NOT NULL,
  `Reg_data` date NOT NULL,
  `Ip` varchar(20) NOT NULL,
  `Vart_num` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `registruotivart`
--

INSERT INTO `registruotivart` (`Vardas`, `El_pastas`, `Slaptazodis`, `Reg_data`, `Ip`, `Vart_num`) VALUES
('admin', 'admin', '$2y$10$Brivv5cKFbTLJ7qZq81.DOL36gXzsBlWjYKB8Iv3yS07LKnw1i4QW', '2017-06-27', '::1', 14),
('testas', 'testas', 'testas', '2017-06-02', '::1', 5),
('lol', 'lol', '$2y$10$zwjyPOKcUbEYfsHisodM0uUBqhc.wW/caCSkXU8uNsjHvqP7jaHKm', '2017-06-03', '::1', 10),
('iki', 'iki', '$2y$10$rb3p8hz9LSnoevdshWob/ubZIrBw8YGDKSaJ1lReL51hBQ.T6TMBW', '2017-06-03', '::1', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atsiliepimai1`
--
ALTER TABLE `atsiliepimai1`
  ADD PRIMARY KEY (`Atsiliepimo_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `registruotivart`
--
ALTER TABLE `registruotivart`
  ADD PRIMARY KEY (`Vart_num`),
  ADD UNIQUE KEY `Slaptazodis` (`Slaptazodis`),
  ADD UNIQUE KEY `El_pastas` (`El_pastas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atsiliepimai1`
--
ALTER TABLE `atsiliepimai1`
  MODIFY `Atsiliepimo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `komentarai`
--
ALTER TABLE `komentarai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `registruotivart`
--
ALTER TABLE `registruotivart`
  MODIFY `Vart_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
