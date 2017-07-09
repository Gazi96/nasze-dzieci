-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lip 2017, 18:06
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `nasze_dzieci`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `address1` varchar(64) COLLATE utf8_bin NOT NULL,
  `address2` varchar(64) COLLATE utf8_bin NOT NULL,
  `phone` varchar(64) COLLATE utf8_bin NOT NULL,
  `email` varchar(64) COLLATE utf8_bin NOT NULL,
  `nip` varchar(64) COLLATE utf8_bin NOT NULL,
  `regon` varchar(64) COLLATE utf8_bin NOT NULL,
  `krs` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `details`
--

INSERT INTO `details` (`id`, `address1`, `address2`, `phone`, `email`, `nip`, `regon`, `krs`) VALUES
(1, 'Al. Dzieci Polskich 20 lok. A120', '04-730 Warszawa', '22 815 75 95, 665 285 147', 'fundacja@naszedzieci.org.pl', '527-24-95-159', '140411750', '0000249753');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `href` varchar(64) COLLATE utf8_bin NOT NULL,
  `time` varchar(64) COLLATE utf8_bin NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`id`, `name`, `href`, `time`, `year`, `month`, `day`) VALUES
(1, 'Lorem ipsum dolor sit amet enim.', 'lorem_ipsum_dolor_sit_amet_enim', '11:15', 2017, 7, 9),
(3, 'Litwo! Ojczyzno moja!', 'litwo_ojczyzno_moja', '14:07', 2017, 7, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsdescribe`
--

CREATE TABLE `newsdescribe` (
  `id` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  `paragraph` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `newsdescribe`
--

INSERT INTO `newsdescribe` (`id`, `newsid`, `paragraph`) VALUES
(1, 1, 'Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum dolor quam.'),
(3, 3, 'Ty jesteÅ› jak zdrowie. Ile ciÄ™ straciÅ‚. DziÅ› piÄ™knoÅ›Ä‡ zda siÄ™ jak szlachcic bez litoÅ›ci wsiedli sp&oacute;r byÅ‚ Å¼onaty a zwierzÄ™ nie odm&oacute;wi. To nie moÅ¼e. WidaÄ‡, Å¼e on je tak i cap! - odpowiedziaÅ‚ Robak obojÄ™tnie WidaÄ‡ byÅ‚o, Å¼e oko nie wyszli witaÄ‡, ale nic to m&oacute;wiÄ…c, Å¼e nas powr&oacute;cisz cudem Gdy siÄ™ moÅ¼emy na Å›cianach wisiaÅ‚y.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsimages`
--

CREATE TABLE `newsimages` (
  `id` int(11) NOT NULL,
  `newsid` int(11) NOT NULL,
  `url` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `newsimages`
--

INSERT INTO `newsimages` (`id`, `newsid`, `url`) VALUES
(1, 1, '1'),
(2, 1, '2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL,
  `role` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `role`) VALUES
(1, 'administrator@nasze-dzieci.org.pl', 'd351c57064000cec4ce5558e79fa9cdb', 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsdescribe`
--
ALTER TABLE `newsdescribe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news` (`newsid`);

--
-- Indexes for table `newsimages`
--
ALTER TABLE `newsimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news` (`newsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `newsdescribe`
--
ALTER TABLE `newsdescribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `newsimages`
--
ALTER TABLE `newsimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `newsdescribe`
--
ALTER TABLE `newsdescribe`
  ADD CONSTRAINT `newsdescribe_ibfk_1` FOREIGN KEY (`newsid`) REFERENCES `news` (`id`);

--
-- Ograniczenia dla tabeli `newsimages`
--
ALTER TABLE `newsimages`
  ADD CONSTRAINT `newsimages_ibfk_1` FOREIGN KEY (`newsid`) REFERENCES `news` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
