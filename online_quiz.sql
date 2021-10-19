-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 04:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123'),
(2, 'admin2@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) UNSIGNED NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'PHP'),
(2, 'HTML'),
(3, 'CSS'),
(4, 'JAVASCRIPT');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(100) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(14, 'PHP stands for ', 'Hypertext Preprocessor ', 'Pretext Hypertext Preprocessor', ' Personal Home Processor', ' None of the above', 1, 1),
(15, 'Who is known as the father of PHP?  ', 'Drek Kolkevi ', 'List Barely ', 'Rasmus Lerdrof', ' None of the above', 2, 1),
(16, 'Variable name in PHP starts with -  ', '! (Exclamation) ', '$ (Dollar) ', '&amp; (Ampersand) ', '# (Hash)', 1, 1),
(17, 'Which of the following is the default file extension of PHP?', '.php ', '.hphp ', '.xml', ' .html', 0, 1),
(18, 'Which of the following is correct to add a comment in php?  ', '&amp; &hellip;&hellip; &amp;', ' // &hellip;&hellip; ', '/* &hellip;&hellip; */ ', 'Both (b) and (c)', 3, 1),
(20, 'HTML stands for -  ', 'HighText Machine Language ', 'HyperText and links Markup Language ', 'HyperText Markup Language ', 'None of these', 2, 2),
(21, 'The correct sequence of HTML tags for starting a webpage is -', '  Head, Title, HTML, body ', 'HTML, Body, Title, Head ', 'HTML, Head, Title, Body ', 'None of the above', 2, 2),
(22, 'Which of the following element is responsible for making the text bold in HTML?  ', '&lt;pre&gt; ', '&lt;a&gt; ', '&lt;b&gt; ', '&lt;br&gt;', 2, 2),
(23, ' Which of the following tag is used to insert a line-break in HTML?  ', '&lt;br&gt; ', '&lt;a&gt; ', '&lt;pre&gt; ', '&lt;b&gt;', 0, 2),
(24, ' CSS stands for - ', ' Cascade style sheets ', 'Color and style sheets ', 'Cascading style sheets ', 'None of the above', 2, 3),
(25, 'Which of the following is the correct syntax for referring the external style sheet?', '&lt;style src = example.css&gt; ', '&lt;style src = &quot;example.css&quot; &gt;', ' &lt;stylesheet&gt; example.css &lt;/stylesheet&gt; ', '&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;example', 3, 3),
(26, 'The property in CSS used to change the background color of an element is -  ', 'bgcolor ', 'color ', 'background-color ', 'All of the above', 2, 3),
(27, ' Which type of JavaScript language is ___', 'Object-Oriented ', 'Object-Based ', 'Assembly-language', ' High-level', 1, 4),
(28, 'Which one of the following also known as Conditional Expression:', 'Alternative to if-else ', 'Switch statement ', 'If-then-else statement ', 'immediate if', 3, 4),
(29, 'When interpreter encounters an empty statements, what it will do:', 'Shows a warning', ' Prompts to complete the statement ', ' Throws an error', ' Ignores the statements', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) UNSIGNED NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `uname`, `email`, `mob_no`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '123', '121'),
(2, 'abcd', 'abcd@gmail.com', '1234', '123'),
(3, 'hjfvb', 'n@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
