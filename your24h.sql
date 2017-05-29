-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Maj 2017, 17:39
-- Wersja serwera: 5.7.14
-- Wersja PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `your24h`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czynnosci`
--

CREATE TABLE `czynnosci` (
  `id_czynnosci` smallint(6) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `priorytet` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `czynnosci`
--

INSERT INTO `czynnosci` (`id_czynnosci`, `nazwa`, `priorytet`) VALUES
(1, 'Sen', 1),
(2, 'Praca', 1),
(3, 'Posiłki', 1),
(4, 'Rozrywka', 0),
(5, 'Sport', 0),
(6, 'Towarzystwo', 0),
(7, 'Nic konkretnego', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czynnosci_u`
--

CREATE TABLE `czynnosci_u` (
  `id_wpisu` int(11) NOT NULL,
  `id_czynnosci` int(11) NOT NULL,
  `id_dnia` int(11) NOT NULL,
  `czas` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzien`
--

CREATE TABLE `dzien` (
  `id_dnia` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_u` int(11) NOT NULL,
  `uwagi` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dzien`
--

INSERT INTO `dzien` (`id_dnia`, `data`, `id_u`, `uwagi`) VALUES
(72, '2017-05-19', 8, ''),
(73, '2017-05-19', 8, ''),
(74, '2017-05-19', 8, ''),
(75, '2017-05-19', 8, ''),
(76, '2017-05-19', 8, ''),
(77, '2017-05-19', 8, ''),
(78, '2017-05-19', 8, ''),
(79, '2017-05-19', 8, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_u` tinyint(30) NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_u`, `imie`, `login`, `haslo`) VALUES
(1, 'Marcin', 'marc', '1234'),
(8, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zalogowani`
--

CREATE TABLE `zalogowani` (
  `id_u` int(11) NOT NULL,
  `id_logowania` int(11) NOT NULL,
  `sess_id` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `kiedy` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zalogowani`
--

INSERT INTO `zalogowani` (`id_u`, `id_logowania`, `sess_id`, `kiedy`) VALUES
(8, 39, '93vi6hvih104udi0i59k6up807', '2017-05-19 15:59:56');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `czynnosci`
--
ALTER TABLE `czynnosci`
  ADD PRIMARY KEY (`id_czynnosci`);

--
-- Indexes for table `czynnosci_u`
--
ALTER TABLE `czynnosci_u`
  ADD PRIMARY KEY (`id_wpisu`);

--
-- Indexes for table `dzien`
--
ALTER TABLE `dzien`
  ADD PRIMARY KEY (`id_dnia`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_u`);

--
-- Indexes for table `zalogowani`
--
ALTER TABLE `zalogowani`
  ADD PRIMARY KEY (`id_logowania`),
  ADD KEY `id_u` (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `czynnosci`
--
ALTER TABLE `czynnosci`
  MODIFY `id_czynnosci` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `czynnosci_u`
--
ALTER TABLE `czynnosci_u`
  MODIFY `id_wpisu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT dla tabeli `dzien`
--
ALTER TABLE `dzien`
  MODIFY `id_dnia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_u` tinyint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `zalogowani`
--
ALTER TABLE `zalogowani`
  MODIFY `id_logowania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
