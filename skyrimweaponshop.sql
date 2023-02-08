-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 03:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyrimweaponshop`
--
CREATE DATABASE IF NOT EXISTS `skyrimweaponshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `skyrimweaponshop`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `clientrace` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientname`, `clientrace`) VALUES
('Aela', 'Nord'),
('Astrid', 'Nord'),
('Athis', 'Dunmer'),
('Balgruuf', 'Nord'),
('Brenuin', 'Redguard'),
('Brynjolf', 'Nord'),
('Cicero', 'Imperial'),
('Delvin', 'Breton'),
('Faralda', 'Altmer'),
('Gabriella', 'Dunmer'),
('Hadvar', 'Nord'),
('Jzargo', 'Khajit'),
('Karliah', 'Dunmer'),
('Kharjo', 'Khajit'),
('Legate', 'Nord'),
('Maiq', 'Khajit'),
('Miraak', 'Nord'),
('Mjoll', 'Nord'),
('Nazeem', 'Redguard'),
('Nazir', 'Redguard'),
('Neloth', 'Dunmer'),
('Serana', 'Vampire'),
('Sheogorath', 'Daedra'),
('Sven', 'Nord'),
('Tullius', 'Imperial'),
('Ulfric', 'Nord'),
('Veezara', 'Argonian'),
('Vex', 'Imperial'),
('Vilkas', 'Nord');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `clientname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `weaponname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `orderdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`clientname`, `weaponname`, `orderdate`) VALUES
('Aela', 'Dragon Priest Dagger', '2022-05-10'),
('Astrid', 'Aegisbane', '2022-01-01'),
('Balgruuf', 'Blade of Woe', '2022-10-01'),
('Brenuin', 'Falmer Sword', '2022-04-15'),
('Delvin', 'Daedric Warhammer', '2021-01-27'),
('Faralda', 'Orcish Sword', '2022-07-17'),
('Hadvar', 'Steel Mace', '2022-01-03'),
('Miraak', 'Daedric Battleaxe', '2021-04-18'),
('Mjoll', 'Iron Mace', '2021-06-04'),
('Nazeem', 'Ebony Bow', '2021-06-27'),
('Nazir', 'Iron Battleaxe', '2021-03-12'),
('Neloth', 'Silver Greatsword', '2022-09-09'),
('Serana', 'Dwarven Mace', '2021-12-03'),
('Tullius', 'Blades Sword', '2022-09-12'),
('Vex', 'Nord Hero War Axe', '2021-11-03'),
('Vilkas', 'Dwarven Crossbow', '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `weapon`
--

CREATE TABLE `weapon` (
  `weaponname` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `weapontypename` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `price` int(10) NOT NULL,
  `damage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `weapon`
--

INSERT INTO `weapon` (`weaponname`, `weapontypename`, `price`, `damage`) VALUES
('Aegisbane', 'Warhammer', 180, 18),
('Alessandra Dagger', 'Dagger', 10, 5),
('Ancient Nord Greatsword', 'Greatsword', 35, 17),
('Ancient Nord Sword', 'Sword', 13, 8),
('Blade of Sacrifice', 'Dagger', 144, 10),
('Blade of Woe', 'Dagger', 880, 12),
('Blades Sword', 'Sword', 300, 11),
('Bloodskal Blade', 'Greatsword', 1250, 21),
('Bloodthorn', 'Dagger', 183, 8),
('Bow of the Hunt', 'Bow', 434, 10),
('Ceremonial Sword', 'Sword', 5, 8),
('Crossbow', 'Crossbow', 120, 19),
('Daedric Battleaxe', 'Battleaxe', 2750, 25),
('Daedric Dagger', 'Dagger', 500, 11),
('Daedric Mace', 'Mace', 1750, 16),
('Daedric Sword', 'Sword', 1250, 14),
('Daedric War Axe', 'War Axe', 1500, 15),
('Daedric Warhammer', 'Warhammer', 4000, 27),
('Dawnbreaker', 'Sword', 740, 12),
('Dawnguard Rune Hammer', 'Warhammer', 500, 22),
('Dragon Priest Dagger', 'Dagger', 9, 6),
('Drainblood Battleaxe', 'Battleaxe', 266, 21),
('Drainspell Bow', 'Bow', 458, 14),
('Dwarven Crossbow', 'Crossbow', 350, 22),
('Dwarven Dagger', 'Dagger', 55, 7),
('Dwarven Greatsword', 'Greatsword', 270, 19),
('Dwarven Mace', 'Mace', 190, 12),
('Ebony Battleaxe', 'Battleaxe', 1585, 23),
('Ebony Blade', 'Greatsword', 2000, 11),
('Ebony Bow', 'Bow', 1440, 17),
('Ebony Mace', 'Mace', 1000, 16),
('Ebony War Axe', 'War Axe', 865, 15),
('Ebony Warhammer', 'Warhammer', 1725, 25),
('Elven Dagger', 'Dagger', 95, 8),
('Elven Mace', 'Mace', 330, 13),
('Falmer Sword', 'Sword', 67, 10),
('Forsworn Axe', 'War Axe', 90, 11),
('Forsworn Bow', 'Bow', 145, 12),
('Glass Battleaxe', 'Battleaxe', 900, 22),
('Glass Greatsword', 'Greatsword', 820, 21),
('Glass Mace', 'Mace', 575, 14),
('Glass Warhammer', 'Warhammer', 985, 24),
('Illusory War Axe', 'War Axe', 15, 1),
('Imperial Bow', 'Bow', 90, 9),
('Iron Battleaxe', 'Battleaxe', 55, 16),
('Iron Greatsword', 'Greatsword', 50, 15),
('Iron Mace', 'Mace', 35, 9),
('Iron Sword', 'Sword', 25, 7),
('Nord Hero Bow', 'Bow', 200, 11),
('Nord Hero War Axe', 'War Axe', 165, 12),
('Orcish Battleaxe', 'Battleaxe', 165, 19),
('Orcish Bow', 'Bow', 150, 10),
('Orcish Mace', 'Mace', 105, 11),
('Orcish Sword', 'Sword', 75, 9),
('Orcish Warhammer', 'Warhammer', 180, 21),
('Poacher Axe', 'War Axe', 32, 5),
('Silver Greatsword', 'Greatsword', 160, 17),
('Steel Battleaxe', 'Battleaxe', 100, 18),
('Steel Mace', 'Mace', 65, 10),
('Steel War Axe', 'War Axe', 55, 9),
('Stormfang', 'Greatsword', 1175, 17),
('The Longhammer', 'Warhammer', 90, 21),
('Ulfric War Axe', 'War Axe', 55, 9),
('Volendrung', 'Warhammer', 1843, 25),
('Wuuthrad', 'Battleaxe', 2000, 25),
('Zephyr', 'Bow', 670, 12);

-- --------------------------------------------------------

--
-- Table structure for table `weapontype`
--

CREATE TABLE `weapontype` (
  `weapontypename` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `weaponwield` varchar(50) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `weapontype`
--

INSERT INTO `weapontype` (`weapontypename`, `weaponwield`) VALUES
('Battleaxe', 'Two-Handed'),
('Bow', 'Archery'),
('Crossbow', 'Archery'),
('Dagger', 'One-Handed'),
('Greatsword', 'Two-Handed'),
('Mace', 'One-Handed'),
('Sword', 'One-Handed'),
('War Axe', 'One-Handed'),
('Warhammer', 'Two-Handed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientname`),
  ADD UNIQUE KEY `clientname` (`clientname`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`clientname`,`weaponname`),
  ADD KEY `orders_ibfk_2` (`weaponname`);

--
-- Indexes for table `weapon`
--
ALTER TABLE `weapon`
  ADD PRIMARY KEY (`weaponname`),
  ADD UNIQUE KEY `weaponname` (`weaponname`),
  ADD KEY `weapontypename` (`weapontypename`);

--
-- Indexes for table `weapontype`
--
ALTER TABLE `weapontype`
  ADD PRIMARY KEY (`weapontypename`),
  ADD UNIQUE KEY `weapontypename` (`weapontypename`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`clientname`) REFERENCES `client` (`clientname`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`weaponname`) REFERENCES `weapon` (`weaponname`) ON UPDATE CASCADE;

--
-- Constraints for table `weapon`
--
ALTER TABLE `weapon`
  ADD CONSTRAINT `weapon_ibfk_1` FOREIGN KEY (`weapontypename`) REFERENCES `weapontype` (`weapontypename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
