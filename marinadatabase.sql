-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 18 okt 2017 kl 09:06
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `marina`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adname` char(50) NOT NULL,
  `adpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `admin`
--

INSERT INTO `admin` (`adminid`, `adname`, `adpassword`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Tabellstruktur `author_table`
--

CREATE TABLE `author_table` (
  `authorid` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `author_table`
--

INSERT INTO `author_table` (`authorid`, `firstname`, `lastname`) VALUES
(1, 'Sam', 'Mike'),
(2, 'Bo', 'Thonnquist'),
(3, 'Mike', 'Petersson'),
(5, 'Robert', 'Smith'),
(6, 'Raku', 'Mahir'),
(7, 'Jack', 'Sparrow'),
(23, 'Anna', 'Larsson');

-- --------------------------------------------------------

--
-- Tabellstruktur `booktable`
--

CREATE TABLE `booktable` (
  `isbn` int(13) NOT NULL,
  `Title` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `Author` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `Publishyear` date NOT NULL,
  `numofpages` int(5) DEFAULT NULL,
  `EditionNR` varchar(5) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Publishcompany` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `onloan` varchar(10) COLLATE utf8_swedish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `booktable`
--

INSERT INTO `booktable` (`isbn`, `Title`, `Author`, `Publishyear`, `numofpages`, `EditionNR`, `Publishcompany`, `onloan`) VALUES
(1, 'Dune', 'Jessica deep', '0000-00-00', 300, '3', 'Bonniers', '0'),
(2, 'Flower', 'Simon Brown', '2008-02-12', 200, NULL, 'Bonniers', '0'),
(4, 'Milk and Honey', 'Raku Mihir', '2015-04-04', 204, '1', 'Bonniers', '0'),
(5, 'What Happened', 'Hillary Clinton', '2017-09-22', 494, '1', 'Simon Schuster UK', '0'),
(6, 'Sleeping Beauties', 'Stephen King', '2017-09-01', 704, '1', 'Hodder', '0'),
(1341473668, 'Project Management', 'Bo Thonnquist', '0000-00-00', NULL, NULL, '', '0'),
(1341473669, 'Hello', 'Jack Sparrow', '0000-00-00', NULL, NULL, '', '0'),
(1341473670, 'The big Adventure', 'Michiael Burger', '0000-00-00', NULL, NULL, '', '0'),
(1341473671, 'Long long gone', 'Sandy Kim', '0000-00-00', NULL, NULL, '', '0');

-- --------------------------------------------------------

--
-- Tabellstruktur `book_author`
--

CREATE TABLE `book_author` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `book_author`
--

INSERT INTO `book_author` (`bookid`, `authorid`) VALUES
(1, 1),
(1341473668, 2),
(1341473668, 3);

-- --------------------------------------------------------

--
-- Tabellstruktur `comment_table`
--

CREATE TABLE `comment_table` (
  `commentid` int(13) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `comment_table`
--

INSERT INTO `comment_table` (`commentid`, `comment`) VALUES
(1, 'dcfvgbn'),
(2, '<strong>Hello!\"</strong>'),
(3, '&lt;strong&gt;Hello!&quot;&lt;/strong&gt;'),
(4, '&lt;strong&gt;zhelo&lt;/strong&gt;\r\n');

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` char(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'jema1619', '20dbce9a6ba8b8f86bdb5b4c3f2e2c18f0c67794'),
(2, 'new', 'c2a6b03f190dfb2b4aa91f8af8d477a9bc3401dc');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Index för tabell `author_table`
--
ALTER TABLE `author_table`
  ADD PRIMARY KEY (`authorid`);

--
-- Index för tabell `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`isbn`);

--
-- Index för tabell `book_author`
--
ALTER TABLE `book_author`
  ADD KEY `bookid` (`bookid`),
  ADD KEY `authorid` (`authorid`);

--
-- Index för tabell `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`commentid`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT för tabell `booktable`
--
ALTER TABLE `booktable`
  MODIFY `isbn` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1341473672;

--
-- AUTO_INCREMENT för tabell `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `commentid` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `booktable` (`isbn`),
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`authorid`) REFERENCES `author_table` (`authorid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
