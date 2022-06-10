-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 04:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_b_tubes_213040044`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(299) CHARACTER SET utf8 NOT NULL,
  `synopsis` text CHARACTER SET utf8 DEFAULT NULL,
  `director` varchar(299) DEFAULT NULL,
  `screenwriter` varchar(299) DEFAULT NULL,
  `producer` varchar(299) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `movie_status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `movie_img` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `synopsis`, `director`, `screenwriter`, `producer`, `release_date`, `movie_status`, `movie_img`) VALUES
(1, 'Black Widow', 'In Marvel Studios\' action-packed spy thriller \"Black Widow,\" Natasha Romanoff aka Black Widow confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal with her history as a spy and the broken relationships left in her wake long before she became an Avenger.', 'Cate Shortland', 'Eric Pearson', 'Kevin Feige', '2021-07-03', 'Released', 'Black_Widow_(2021_film)_poster.jpg'),
(7, 'Shang-Chi and the Legend of the Ten Rings', 'Shang-Chi, the master of weaponry-based Kung Fu, is forced to confront his past after being drawn into the Ten Rings organization', 'Destin Daniel Cretton', 'Dave Callaham & Destin Daniel Cretton & Andrew Lanham', 'Kevin Feige and Jonathan Schwartz', '2021-09-03', 'Released', 'Shang-Chi_and_the_Legend_of_the_Ten_Rings_poster.jpeg'),
(11, 'Eternals', 'The saga of the Eternals, a race of immortal beings who lived on Earth and shaped its history and civilizations.\r\n\r\nFollowing the events of Avengers: Endgame (2019), an unexpected tragedy forces the Eternals, ancient aliens who have been living on Earth in secret for thousands of years, out of the shadows to reunite against mankind\'s most ancient enemy, the Deviants.', 'Chloé Zhao', 'Chloé Zhao and Chloé Zhao & Patrick Burleigh and Ryan Firpo & Kaz Firpo', 'Kevin Feige and Nate Moore', '2021-11-05', 'Released', 'Eternals_(film)_poster.jpeg'),
(17, 'Spider-Man: No Way Home', 'Peter Parker\'s secret identity is revealed to the entire world. Desperate for help, Peter turns to Doctor Strange to make the world forget that he is Spider-Man. The spell goes horribly wrong and shatters the multiverse, bringing in monstrous villains that could destroy the world.', 'Jon Watts ', 'Chris McKenna & Erik Sommers', 'Kevin Feige and Amy Pascal', '2021-12-17', 'Released', 'Spider-Man_No_Way_Home_poster.jpg'),
(22, 'Doctor Strange in the Multiverse of Madness', 'Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse. They seek help from Wanda the Scarlet Witch, Wong and others.', 'Sam Raimi', 'Michael Waldron', 'Kevin Feige', '2022-05-22', 'Released', 'Doctor_Strange_in_the_Multiverse_of_Madness_poster.jpg'),
(25, 'Thor: Love and Thunder', 'Thor\'s retirement is interrupted by a galactic killer known as Gorr the God Butcher, who seeks the extinction of the gods. To combat the threat, Thor enlists the help of King Valkyrie, Korg and ex-girlfriend Jane Foster, who - to Thor\'s surprise - inexplicably wields his magical hammer, Mjolnir, as the Mighty Thor. Together, they embark upon a harrowing cosmic adventure to uncover the mystery of the God Butcher\'s vengeance and stop him before it\'s too late.\r\n\r\n', 'Taika Waititi', 'Taika Waititi', 'Kevin Feige and\r\nBrad Winderbaum', '2022-07-08', 'Post-production', 'Thor_Love_and_Thunder_poster.jpeg'),
(29, 'Black Panther: Wakanda Forever', NULL, 'Ryan Coogler', 'Ryan Coogler & Joe Robert Cole', 'Kevin Feige', '2022-11-11', 'Post-production', 'Black_Panther_Wakanda_Forever_logo.png'),
(34, 'Ant-Man and the Wasp: Quantumania', NULL, 'Peyton Reed', 'Jeff Loveness', 'Kevin Feige', '2023-02-17', 'Post-production', 'Ant-Man_and_the_Wasp_Quantumania_logo.jpg'),
(41, 'Guardians of the Galaxy Vol. 3', NULL, 'James Gunn', 'James Gunn', 'Kevin Feige', '2023-05-05', 'Post-production', 'Guardians_of_the_Galaxy_Vol_3_logo.jpeg'),
(44, 'The Marvels', NULL, 'Nia DaCosta', 'Megan McDonnell', 'Kevin Feige', '2023-07-28', 'Post-production', 'The_Marvels_logo.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
