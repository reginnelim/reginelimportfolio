-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 05:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `name` text NOT NULL,
  `address` text NOT NULL,
  `intro` text NOT NULL,
  `email` text NOT NULL,
  `contactnum` text NOT NULL,
  `profpic` text NOT NULL,
  `aboutpic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`name`, `address`, `intro`, `email`, `contactnum`, `profpic`, `aboutpic`) VALUES
('Regine Lim', 'San Roque, Zamboanga City, Philippines', 'As a computer science student, I am driven by a curiosity for technology and a passion for creating solutions. Through my coursework, I have gained proficiency in languages like Visual Basic, JavaScript, and SQL, as well as hands-on experience in software development and algorithm design. My academic journey has not only provided me with a strong technical foundation but also honed my ability to work collaboratively in team projects. I am excited about the prospect of applying my skills and knowledge to address real-world challenges and contribute to the ever-evolving landscape of computer science. With a commitment to continuous learning and a keen interest in emerging technologies, I am poised to make meaningful contributions in the field. By the way, check out my awesome work.', 'reginne.lim@gmail.com', '09068668623', 'IMG662bc52d4be1f3.46641627.jpg', 'IMG662a927e1e3362.75265587.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactsdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactsdesc`) VALUES
('EMAIL: REGINNE.LIM@GMAIL.COM\r\nCELLPHONE NUMBER: 0906 866 8623\r\nTELEPHONE: (062) 957 1880');

-- --------------------------------------------------------

--
-- Table structure for table `educ`
--

CREATE TABLE `educ` (
  `educnum` int(11) NOT NULL,
  `school` text NOT NULL,
  `descrip` text NOT NULL,
  `address` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educ`
--

INSERT INTO `educ` (`educnum`, `school`, `descrip`, `address`, `year`) VALUES
(1, 'Western Mindanao State University', 'Bachelor of Science in Computer Science', 'Normal Road, Baliwasan, Zamboanga City', '2025'),
(2, 'Zamboanga National High School - West', 'none', 'R.T. Lim Boulevard, Zamboanga City', '2011');

-- --------------------------------------------------------

--
-- Table structure for table `gallerydb`
--

CREATE TABLE `gallerydb` (
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL,
  `pic5` text NOT NULL,
  `pic6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallerydb`
--

INSERT INTO `gallerydb` (`pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`) VALUES
('IMG662a89da811680.64321430.jpeg', 'IMG662a8ab9d32d01.66541599.png', 'IMG662a8ac8b9f326.02068729.jpg', 'IMG662a8b4876ec44.65927661.png', 'IMG662a8b5404c608.05750355.png', 'IMG662a911b94ac49.41066150.png');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `uname` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`uname`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `jobtitle` text NOT NULL,
  `worknum` int(11) NOT NULL,
  `title` text NOT NULL,
  `address` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`jobtitle`, `worknum`, `title`, `address`, `year`) VALUES
('Programmer', 1, 'Pick N Go', 'Canelar, Zamboanga City', '2016'),
('Programmer', 2, 'Harry Potter Sorting Hat', 'Western Mindanao State University', '2017'),
('Teller', 3, 'Zamcelco', 'The Southway Square Mall', '2017-2023'),
('Graphic Designer', 4, 'Brand Identity for E-sports Company', 'Western Mindanao State University', '2023'),
('Programmer', 5, 'Pick N Go', 'Canelar, Zamboanga City', '2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`worknum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `worknum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
