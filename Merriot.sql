-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Lug 09, 2018 alle 16:06
-- Versione del server: 5.7.22-0ubuntu0.16.04.1
-- Versione PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Merriot`
--
CREATE DATABASE IF NOT EXISTS `Merriot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Merriot`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Linked_rooms`
--

DROP TABLE IF EXISTS `Linked_rooms`;
CREATE TABLE `Linked_rooms` (
  `IdLinkedRoom` int(11) NOT NULL,
  `Id_room` int(11) NOT NULL,
  `Id_linked_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Linked_rooms`
--

INSERT INTO `Linked_rooms` (`IdLinkedRoom`, `Id_room`, `Id_linked_room`) VALUES
(1, 1, 3),
(2, 1, 2),
(5, 2, 4),
(6, 3, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `Message`
--

DROP TABLE IF EXISTS `Message`;
CREATE TABLE `Message` (
  `IdMessage` int(11) NOT NULL,
  `Id_room` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Message`
--

INSERT INTO `Message` (`IdMessage`, `Id_room`, `Id_user`, `Timestamp`, `Message`) VALUES
(1, 3, 2, '2018-07-09 14:05:21', 'ciao a tutti'),
(2, 1, 1, '2018-07-09 14:05:35', 'come va?');

-- --------------------------------------------------------

--
-- Struttura della tabella `Object`
--

DROP TABLE IF EXISTS `Object`;
CREATE TABLE `Object` (
  `IdObject` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Object`
--

INSERT INTO `Object` (`IdObject`, `Name`, `Id_room`) VALUES
(1, 'Pallone', 4),
(2, 'Pentola', 1),
(3, 'Caffè', 1),
(4, 'Cesoia', 4),
(5, 'Lampada', 3),
(6, 'Saponetta', 2),
(7, 'Porta cose', 1),
(8, 'Appenditutto', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `Room`
--

DROP TABLE IF EXISTS `Room`;
CREATE TABLE `Room` (
  `IdRoom` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Room`
--

INSERT INTO `Room` (`IdRoom`, `Name`, `Description`) VALUES
(1, 'Cucina', 'Si mangia'),
(2, 'Bagno', 'Ci si lava etc'),
(3, 'Camera da Letto', 'Si dorme'),
(4, 'Giardino', 'Si gioca');

-- --------------------------------------------------------

--
-- Struttura della tabella `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `IdUser` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `Id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `User`
--

INSERT INTO `User` (`IdUser`, `Name`, `Role`, `Id_room`) VALUES
(1, 'Mario', 'Avvocato', 1),
(2, 'Luca', 'Panettiere', 1),
(3, 'Paola', 'Meretrice', 2),
(4, 'Pino', 'Agricoltore', 1),
(5, 'Giovanni', 'Full Stack Developer', 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Linked_rooms`
--
ALTER TABLE `Linked_rooms`
  ADD PRIMARY KEY (`IdLinkedRoom`),
  ADD KEY `Id_room` (`Id_room`),
  ADD KEY `Linked_rooms_ibfk_2` (`Id_linked_room`);

--
-- Indici per le tabelle `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`IdMessage`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_room` (`Id_room`);

--
-- Indici per le tabelle `Object`
--
ALTER TABLE `Object`
  ADD PRIMARY KEY (`IdObject`),
  ADD KEY `Id_room` (`Id_room`);

--
-- Indici per le tabelle `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`IdRoom`);

--
-- Indici per le tabelle `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`IdUser`),
  ADD KEY `Id_room` (`Id_room`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Linked_rooms`
--
ALTER TABLE `Linked_rooms`
  MODIFY `IdLinkedRoom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `Message`
--
ALTER TABLE `Message`
  MODIFY `IdMessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `Object`
--
ALTER TABLE `Object`
  MODIFY `IdObject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `Room`
--
ALTER TABLE `Room`
  MODIFY `IdRoom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `User`
--
ALTER TABLE `User`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Linked_rooms`
--
ALTER TABLE `Linked_rooms`
  ADD CONSTRAINT `Linked_rooms_ibfk_1` FOREIGN KEY (`Id_room`) REFERENCES `Room` (`IdRoom`),
  ADD CONSTRAINT `Linked_rooms_ibfk_2` FOREIGN KEY (`Id_linked_room`) REFERENCES `Room` (`IdRoom`);

--
-- Limiti per la tabella `Message`
--
ALTER TABLE `Message`
  ADD CONSTRAINT `Message_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `User` (`IdUser`),
  ADD CONSTRAINT `Message_ibfk_2` FOREIGN KEY (`Id_room`) REFERENCES `Room` (`IdRoom`);

--
-- Limiti per la tabella `Object`
--
ALTER TABLE `Object`
  ADD CONSTRAINT `Object_ibfk_1` FOREIGN KEY (`Id_room`) REFERENCES `Room` (`IdRoom`);

--
-- Limiti per la tabella `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_ibfk_1` FOREIGN KEY (`Id_room`) REFERENCES `Room` (`IdRoom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
