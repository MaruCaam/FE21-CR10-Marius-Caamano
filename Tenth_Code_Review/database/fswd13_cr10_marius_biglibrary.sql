-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 12:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_cr10_marius_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr10_marius_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fswd13_cr10_marius_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `books_Id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `author_f_name` varchar(255) NOT NULL,
  `author_l_name` varchar(255) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `published_date` date NOT NULL,
  `type` enum('Softcover','Hardcover','Paperback') NOT NULL,
  `book_status` enum('Available','Reserved') NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`books_Id`, `book_title`, `author_f_name`, `author_l_name`, `ISBN`, `description`, `published_date`, `type`, `book_status`, `picture`, `publisher_name`, `publisher_address`) VALUES
(1, 'Lord of the Flies', 'William', 'Golding', '978-0571273577', 'When a plane crashes on a remote island, a small group of schoolboys are the sole survivors. From the prophetic Simon and virtuous Ralph to the lovable Piggy and brutish Jack, each of the boys attempts to establish control as the reality.', '2011-08-04', 'Softcover', 'Available', 'lotf.jpg', 'Faber & Faber', 'Bloomsbury House, 74–77 Great Russell Street, London'),
(2, '64 (Sixty Four)', 'Hideo', 'Yokoyama', '978-3855350179', 'Six Four. The nightmare no parent could endure. The case no detective could solve. The twist no listener could predict. ', '2018-03-09', 'Hardcover', 'Reserved', '64.jpg', 'Atrium', 'Franklinstrasse 23, 8050 Zürich, Switzerland'),
(3, '1984', 'George', 'Orwell', '9783548234106', '1984 is a dystopian novella by George Orwell published in 1949, which follows the life of Winston Smith, a low ranking member of \'the Party\', who is frustrated by the omnipresent eyes of the party, and its ominous ruler Big Brother. \'Big Brother\' controls', '1994-06-01', 'Paperback', 'Reserved', '1984.jpg', 'Ullstein Verlag', 'Friedrichstr. 126, 10117 Berlin'),
(4, 'The art of being normal', 'Lisa', 'Williamson', '978-0374302375', 'David Piper has always been an outsider. His parents think he\'s gay. The school bully thinks he\'s a freak. Only his two best friends know the real truth: David wants to be a girl.', '2016-05-31', 'Softcover', 'Reserved', 'theartofbeing.jpg', 'Farrar, Straus and Giroux', '120 Broadway, New York, NY'),
(5, 'Interview with the Vampire', 'Anne', 'Rice', '978-0345337665', 'Here are the confessions of a vampire. Hypnotic, shocking, and chillingly sensual, this is a novel of mesmerizing beauty and astonishing force—a story of danger and flight, of love and loss, of suspense and resolution.', '1991-09-13', 'Softcover', 'Available', 'interview.jpg', 'Penguin Random House', '20 Vauxhall Bridge Rd, London'),
(6, 'Fahrenheit 451', 'Ray', 'Bradbury', '978-0-00-654606-1', 'Guy Montag is a fireman. In his world, where television rules and literature is on the brink of extinction, firemen start fires rather than put them out. His job is to destroy the most illegal of commodities, the printed book.', '2008-09-01', 'Paperback', 'Available', 'fahrenheit.jpeg', 'Harper Collins', '195 Broadway New York, NY 10007 USA'),
(7, 'Heart shaped box', 'Joe', 'Hill', '978-0575081864', 'So Jude did.\r\n\r\nHe bought it, in the shape of the dead man\'s suit, delivered in a heart-shaped box, because he wanted it: because his fans ate up that kind of story. It was perfect for his collection.', '2008-05-01', 'Softcover', 'Available', 'heart.jpg', 'Gollancz ', 'Carmelite House. 50 Victoria Embankment. London'),
(8, 'The Green Mile', 'Stephen', 'King', '978-3453435841', 'Welcome to Cold Mountain Penitentiary, home to the Depression-worn men of E Block. Convicted killers all, each awaits his turn to walk the Green Mile, keeping a date with the electric chair.', '2011-02-08', 'Softcover', 'Reserved', 'mile.jpg', 'Heyne Verlag', 'Bayerstraße 71-73, 80335 München '),
(9, 'The Art of Dying', 'Ambrosse', 'Parry', '978-1-78689-673-5', 'Edinburgh, 1849. Hordes of patients are dying all across the city, with doctors finding their remedies powerless. And a whispering campaign seeks to paint Dr James Simpson, pioneer of medical chloroform, as a murderer.', '2021-03-02', 'Hardcover', 'Available', 'artofdying.jpg', 'Canongate Books Ltd.', '14 High St, Edinburgh EH1 1TE, United Kingdom'),
(10, 'The Therapy', 'Sebastian', 'Fitzek', '978-3-426-63309-0', 'Josy, the twelve-year-old daughter of the renowned psychiatrist Viktor Larenz, seems to have disappeared without trace after one of her numerous visits to the doctor. At this point, she has been suffering from an illness for months.', '2006-11-01', 'Softcover', 'Reserved', 'therapy.jpg', 'Knaur', 'Hilblestraße 54 , 80636 München'),
(16, 'Test Edit Works', 'Test', 'Test', 'Test', 'Testing', '2021-07-09', 'Hardcover', 'Available', '61179bd94637b.png', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`books_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `books_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
