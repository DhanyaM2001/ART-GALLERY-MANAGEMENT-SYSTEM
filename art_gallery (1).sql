-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 03:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `adname` varchar(20) DEFAULT NULL,
  `admin_id` varchar(15) NOT NULL,
  `admin_email_id` varchar(25) DEFAULT NULL,
  `admin_mobile_no` varchar(10) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`adname`, `admin_id`, `admin_email_id`, `admin_mobile_no`, `admin_password`) VALUES
('admin', 'admin', 'admin@gmail.com', '1234567890', 'admin'),
('admin22', 'admins22', 'admin22@gmail.com', '2134567890', 'Admin@22'),
('Chandana', 'chandana', 'chandana@gmail.com', '2134567890', 'Chandana2000'),
('Dhanya', 'Dhanya22', 'dhanya@gmail.com', '2134567890', 'Dhanya22.');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(15) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image_file` varchar(200) DEFAULT NULL,
  `article_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `image_file`, `article_date`) VALUES
(7, 'Realism (arts)', 'Realism in the arts is generally the attempt to represent subject matter truthfully, without artificiality and avoiding speculative fiction and supernatural elements. The term is often used interchangeably with naturalism, even though these terms are not synonymous. Naturalism, as an idea relating to visual representation in Western art, seeks to depict objects with the least possible amount of distortion and is tied to the development of linear perspective and illusionism in Renaissance Europe.[1] Realism, while predicated upon naturalistic representation and a departure from the idealization of earlier academic art, refers to a specific art historical movement that originated in France in the aftermath of the French Revolution of 1848. With artists like Gustave Courbet capitalizing on the mundane, ugly or sordid, realism was motivated by the renewed interest in the common man and the rise of leftist politics.[2] The Realist painters rejected Romanticism, which had come to dominate French literature and art, with roots in the late 18th century.', 'project2/images/Realism7.jpg', '2022-08-21'),
(9, 'pencil drawing', 'pencil drawing, drawing executed with an instrument composed of graphite enclosed in a wood casing and intended either as a sketch for a more elaborate work in another medium, an exercise in visual expression, or a finished work. The cylindrical graphite pencil, because of its usefulness in easily producing linear gray-black strokes, became the successor of the older, metallic drawing stylus, with which late medieval and Renaissance artists and tradesmen sketched or wrote on paper, parchment, or wood.', 'project2/images/pencilsketch5.jpg', '2022-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` varchar(15) DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `femail` varchar(35) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `feedback` tinytext DEFAULT NULL,
  `suggestions` text DEFAULT NULL,
  `reg_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `fname`, `femail`, `phone`, `feedback`, `suggestions`, `reg_date`) VALUES
('Dhanya22', 'Dhanya', 'd@gmail.com', '1111111111', 'good', 'good\r\n', NULL),
('Dhanya22', 'Dhanya', 'd@gmail.com', '1111111111', 'excellent', 'cdvghsjak,', NULL),
('Sandy123', 'Sandy', 'sandy@gmail.com', '8900000000', 'poor', 'bad', NULL),
('Sandy123', 'Sandy', 'sandy@gmail.com', '890000099', 'good', 'ytrtr', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `user_id` varchar(15) DEFAULT NULL,
  `pid` int(50) DEFAULT NULL,
  `logintime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`user_id`, `pid`, `logintime`) VALUES
('Dhanya22', 28, '21-08-22 06:31:04'),
('Dhanya22', 29, '21-08-22 06:31:14'),
('Sandy123', 24, '22-08-22 03:47:24'),
('Sandy123', 24, '22-08-22 03:48:19'),
('Harry111', 25, '22-08-22 05:01:59'),
('Harry111', 25, '22-08-22 06:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `Plan_id` varchar(100) NOT NULL,
  `Plan_Description` varchar(100) DEFAULT NULL,
  `Plan_Duration` varchar(100) DEFAULT NULL,
  `Plan_Amount` varchar(100) DEFAULT NULL,
  `plancontent` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`Plan_id`, `Plan_Description`, `Plan_Duration`, `Plan_Amount`, `plancontent`) VALUES
('1', 'BASIC PLAN', '30', '199', 'View complete details of the properties'),
('2', 'STANDARD', '180', '299', 'View complete details of the properties'),
('3', 'PREMIUM', '365', '499', 'View complete details of the properties');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(255) NOT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(500) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `artist_name` varchar(255) DEFAULT NULL,
  `pyear` int(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `height` int(50) DEFAULT NULL,
  `width` int(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `short_desc` varchar(500) DEFAULT NULL,
  `long_desc` varchar(500) DEFAULT NULL,
  `speciality` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `admin_id`, `user_id`, `pname`, `artist_name`, `pyear`, `style`, `medium`, `subject`, `price`, `height`, `width`, `image`, `short_desc`, `long_desc`, `speciality`) VALUES
(23, NULL, 'Ron12345', 'd', 'd', 1990, 'Expressionism', 'Pastel', 'Landscape Painting', '$712', 22, 22, 'project2/images/hyper-pencil-121-ImResizer.jpg', 'sdfd', 'df', 'sdf'),
(24, NULL, 'Ron12345', 'Bear Rabbit', 'Leonardo Da Vinci', 232, 'Surrealism', 'Gouache', 'Genre Painting', '$71', 22, 22, 'project2/images/tigercub-ImResizer.jpg', 'dc', 'dfv', 'sd'),
(25, NULL, 'Dhanya22', 'Women', 'Gustave Courbet', 1890, 'Realism', 'Fresco', 'Others', '$712', 100, 50, 'project2/images/Realism4-ImResizer.jpg', 'It is no surprise the Gustave Courbet appears again in this list as he has already proven to be certainly one of the most influential artists of the 1890 century with immaculate French Realism', 'It is no surprise the Gustave Courbet appears again in this list as he has already proven to be certainly one of the most influential artists of the 1890 century with immaculate French Realism It is no surprise the Gustave Courbet appears again in this list as he has already proven to be certainly one of the most influential artists of the 1890 century with immaculate French Realism It is no surprise the Gustave Courbet appears again in this list as he has already proven to be certainly one of t', 'good'),
(26, NULL, 'Dhanya22', 'Group of men', 'Thomas', 1777, 'Realism', 'Encaustic', 'Genre Painting', '$800', 45, 89, 'project2/images/Realism9-ImResizer.jpg', 'The surgery happens to be an orthopedic one and Thomas himself can be sighted in the top left corner of the portrait', 'The surgery happens to be an orthopedic one and Thomas himself can be sighted in the top left corner of the portrait The painting oozes realism and taut detailing the forming of the most highly regarded artworks by Thomas Eakins \r\nThe surgery happens to be an orthopedic one and Thomas himself can be sighted in the top left corner of the portrait The painting oozes realism and taut detailing the forming of the most highly regarded artworks by Thomas Eakins', 'lalalala'),
(27, 'Dhanya22', NULL, 'Women', 'Miguel Angel Nunez', 1990, 'Photorealism', 'Acrylic', 'Genre Painting', '$71', 120, 100, 'project2/images/Photorealism2-ImResizer.jpg', 'Miguel Angel Nunez an artist from Uruguay has created an impressive array of photorealistic art using oil on wood or canvas The subjects of his talents are usually food or drink, and they are so realistic they make your mouth water', 'Miguel Angel Nunez an artist from Uruguay has created an impressive array of photorealistic art using oil on wood or canvas The subjects of his talents are usually food or drink, and they are so realistic they make your mouth water\r\nMiguel Angel Nunez an artist from Uruguay has created an impressive array of photorealistic art using oil on wood or canvas The subjects of his talents are usually food or drink, and they are so realistic they make your mouth water', 'hahahaha'),
(28, 'Dhanya22', NULL, 'Men', 'Chuck Close', 1999, 'Photorealism', 'Pastel', 'Genre Painting', '$100', 88, 89, 'project2/images/Photorealism1-ImResizer.jpg', 'Chuck Close is a well-known photorealistic artist who makes his artwork on an enormous scale ', 'Chuck Close is a well-known photorealistic artist who makes his artwork on an enormous scale Though Close often uses close-shot photographs in his work many of his pieces are painted or drawn Big Self Portrait  is acrylic on canvas\r\nChuck Close is a well-known photorealistic artist who makes his artwork on an enormous scale Though Close often uses close-shot photographs in his work many of his pieces are painted or drawn Big Self Portrait  is acrylic on canvas', 'yeahhhhhhhhhhh'),
(29, 'admins22', NULL, 'iron man', 'marvel studios', 2001, 'Expressionism', 'Encaustic', 'Landscape Painting', '$71000', 100, 89, 'project2/images/iron-ImResizer.jpg', 'Iron Man is a 2008 American superhero film based on the Marvel Comics character of the same name Produced by Marvel Studios and distributed by Paramount Pictures it is the first film in the Marvel Cinematic Universe ', 'Iron Man is a 2008 American superhero film based on the Marvel Comics character of the same name Produced by Marvel Studios and distributed by Paramount Pictures  it is the first film in the Marvel Cinematic Universe Directed by Jon Favreau from a screenplay by the writing teams of Mark Fergus and Hawk Ostby and Art Marcum and Matt Holloway  the film stars Robert Downey Jr as Tony Stark  Iron Man alongside Terrence Howard Jeff Bridges Shaun Toub and Gwyneth Paltrow In the film following his esca', 'i am iron man'),
(30, 'admins22', NULL, 'Doddy', 'j k rowling', 1999, 'Photorealism', 'Spray Paint', 'Portrait Art', '$74', 120, 89, 'project2/images/dobby-ImResizer.jpg', 'Dobby was a male house-elf who served the Malfoy family His masters were Dark Wizards who treated him cruelly', ' In 1992 he disobeyed his masters and tried to warn Harry Potter of the plot to have the Chamber of Secrets reopened He came to know this via the contact between his masters and Lord Voldemort At the end of that school year  after Harry had vanquished the memory of Tom Riddle and slayed the basilisk in the Chamber of Secrets he tricked Lucius Malfoy into freeing Dobby Harry accomplished this by placing T M Riddle Diary inside his own sock  Lucius disgustedly ripped the sock off the book and thre', 'Dobby is a free elf');

-- --------------------------------------------------------

--
-- Table structure for table `userplan`
--

CREATE TABLE `userplan` (
  `Plan_id` varchar(100) NOT NULL,
  `Plan_Description` varchar(100) DEFAULT NULL,
  `Plan_Duration` varchar(100) DEFAULT NULL,
  `Plan_Amount` varchar(100) DEFAULT NULL,
  `Plan_Start_Date` varchar(100) DEFAULT NULL,
  `Plant_End_Date` varchar(100) DEFAULT NULL,
  `Email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userplan`
--

INSERT INTO `userplan` (`Plan_id`, `Plan_Description`, `Plan_Duration`, `Plan_Amount`, `Plan_Start_Date`, `Plant_End_Date`, `Email_id`) VALUES
('3', 'PREMIUM', '365', '499', '2022/08/16', '2023/08/16', 'ron@gmail.com'),
('1', 'BASIC PLAN', '30', '199', '2022/08/16', '2022/09/15', 'd@gmail.com'),
('1', 'BASIC_PLAN', '15', '0', '2022/08/22', '2022/09/06', 'sandy@gmail.com'),
('3', 'PREMIUM', '365', '499', '2022/08/22', '2023/08/22', 'aman@gmail.com'),
('1', 'BASIC PLAN', '30', '199', '2022/08/22', '2022/09/21', 'harry@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `name` varchar(25) DEFAULT NULL,
  `user_id` varchar(20) NOT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `mobile_no` varchar(10) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`name`, `user_id`, `email_id`, `mobile_no`, `password`) VALUES
('Aman', 'Aman1234', 'aman@gmail.com', '6789876789', 'Aman1234'),
('Chandana', 'Chandana', 'c@gmail.com', '6789876789', 'Chandana17'),
('Dhanya22', 'Dhanya22', 'd@gmail.com', '2222222222', 'Dhanya22.'),
('Harry', 'Harry111', 'harry@gmail.com', '6789876789', 'Harry2001'),
('Ron', 'Ron12345', 'ron@gmail.com', '6748987870', 'Ron123'),
('Sandy', 'Sandy123', 'sandy@gmail.com', '890000099', 'Sandy123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`Plan_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
