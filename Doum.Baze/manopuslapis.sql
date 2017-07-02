-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 m. Lie 02 d. 17:07
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
  `Laikas` datetime DEFAULT NULL,
  `vartot_num` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `komentarai`
--

INSERT INTO `komentarai` (`id`, `Komentaras`, `Vartotojo_vardas`, `Laikas`, `vartot_num`) VALUES
(2, '1zxc', 'lol', '2017-07-01 17:29:49', 14),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.', 'lol', '2017-07-01 17:56:24', 10),
(32, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.', NULL, '2017-07-02 20:04:39', 14),
(33, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies non tellus ut consectetur. Maecenas sagittis pellentesque sollicitudin.', NULL, '2017-07-02 20:04:46', 14);

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

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `straipsniai`
--

CREATE TABLE `straipsniai` (
  `Straipsnio_id` int(11) NOT NULL,
  `Tekstas` text CHARACTER SET utf8 NOT NULL,
  `Antraste` varchar(300) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Nuotrauka` varchar(300) NOT NULL,
  `Autorius` varchar(100) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `Data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `straipsniai`
--

INSERT INTO `straipsniai` (`Straipsnio_id`, `Tekstas`, `Antraste`, `Nuotrauka`, `Autorius`, `Data`) VALUES
(4, 'Tapti suaugusiu reiškia išmokti surasti pusiausvyrą tarp šeimos gyvenimo ir karjeros. Elektroninis paštas, išmanieji telefonai bei socialiniai tinklai šią liniją dar labiau ištirpdo. Naujausias režisieriaus Mark Williams filmas „Šeimos žmogus“ (angl. „A Family Man“) pasakoja istoriją, kurią esame girdėję daug kartų, tačiau tai paliečia vis daugiau ir daugiau šiuolaikinių darboholikų.\r\n\r\nĮtaigioje dramoje „Šeimos žmogus“ pagrindinį karjeristo Deino vaidmenį atlieka aktorius Gerard Butler, išgarsėjęs tokiuose gryno testosterono veiksmo filmuose kaip „300“ ir „Olimpo apgultis“. Daugelis kino fanų išgirdę G. Butler vardą automatiškai tikisi dar vieno Amerikos herojaus filmo, tačiau kiekvienam aktoriui ateina metas parodyti savo aktorinius sugebėjimus jaudinančioje dramoje.\r\n\r\nFilme pasakojama apie Deiną, kuris užuot leidęs laiką su šeima, mieliau renkasi darbą. Dirbdamas sėkmingoje Čikagos talentų paieškos kompanijoje, talentų medžiotojas siekia užimti kompanijos vadovo vairą. Tačiau viskas staiga pasikeičia, kai šį paaukštinimą aptemdo netikėta žinia iš namų.\r\n\r\nFilmas „Šeimos žmogus“ yra M. Williams, kaip režisieriaus, debiutas. Režisierius M. Williams išgarsėjo prodiusuodamas 2016 metų trilerį „Sąskaitininkas“ (vaidina Ben Affleck). Nenuostabu, kad į naują projektą kartu su savimi atsiviliojo ir „Sąskaitininko“ scenarijaus autorių Bill Dubuque. Filme taip pat vaidina Holivudo žvaigždės Willem Dafoe, Alison Brie, Gretchen Mol ir kiti.\r\n\r\nJaudinanti drama „Šeimos žmogus“ kinuose nuo birželio 23 d.', 'Gryno testosterono filmų aktorius Gerard Butler debiutuoja dramoje „Šeimos žmogus“', 'img/familyman.jpg', 'Autorius1', '2017-06-30 00:00:00');

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
-- Indexes for table `straipsniai`
--
ALTER TABLE `straipsniai`
  ADD PRIMARY KEY (`Straipsnio_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
--
-- AUTO_INCREMENT for table `straipsniai`
--
ALTER TABLE `straipsniai`
  MODIFY `Straipsnio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
