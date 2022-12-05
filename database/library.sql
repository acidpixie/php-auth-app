-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2022 at 07:09 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(40) NOT NULL,
  `title` varchar(80) NOT NULL,
  `author` varchar(80) NOT NULL,
  `author_id` varchar(10) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `ages` varchar(40) NOT NULL,
  `year` year(4) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `author_id`, `genre`, `ages`, `year`, `image`) VALUES
('9781447273288', 'Children of Time', 'Adrian Tchaikovsky\r\n', 'AT01', 'Science Fiction', 'Adult', 2015, 'images/children.jpg'),
('9780007119318', 'Murder on the Orient Express', 'Agatha Christie', 'AC01', 'Mystery Thriller', 'Young Adult', 1934, 'images/orient-express.jpg'),
('9780804139021', 'The Martian', 'Andy Weir', 'AW01', 'Science Fiction', 'Young Adult', 2011, 'images/martian.jpg'),
('9780684833392', 'Catch 22', 'Joseph Heller', 'JH01', 'Historical Fiction', 'Adult', 1961, 'images/catch-22.jpg'),
('9781439167342', 'How To Win Friends and Influence People\r\n', 'Dale Carnegie', 'DC01', 'Business', 'All Ages', 1936, 'images/influence.jpg'),
('9781421501680', 'Death Note', 'Tsugumi Ohba', 'TO01', 'Manga', 'Middle grade', 2004, 'images/death.jpg'),
('9781444737097', 'A Street Cat Named Bob\r\n', 'James Bowen', 'JB01', 'Biography', 'All Ages', 2012, 'images/cat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `firstname` varchar(80) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `password`, `type`) VALUES
(1, 'Nikki', 'Baguette', 'nikki@gmail.com', 'test123', 0),
(2, 'Tash', 'Panini', 'tash@gmail.com', 'hello', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
