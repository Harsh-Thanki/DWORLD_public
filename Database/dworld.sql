-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 08:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_code`
--

CREATE TABLE `cat_code` (
  `cat_code_id` int(200) NOT NULL,
  `cat_code_nm` varchar(30) NOT NULL,
  `cat_code_img` varchar(25) NOT NULL,
  `cat_code_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_code`
--

INSERT INTO `cat_code` (`cat_code_id`, `cat_code_nm`, `cat_code_img`, `cat_code_desc`) VALUES
(1, 'C Program', 'c.png', 'logo of c language'),
(2, 'JAVA program', 'java.png', 'logo of JAVA language'),
(3, 'PHP program', 'php.png', 'logo of PHP language'),
(4, 'HTML program', 'html.jpeg', 'logo of HTML language'),
(5, 'CSS program', 'css.jpg', 'logo of css language'),
(6, 'Java Script program', 'js.jpg', 'logo of Java Script language');

-- --------------------------------------------------------

--
-- Table structure for table `cat_logo`
--

CREATE TABLE `cat_logo` (
  `cat_logo_id` int(200) NOT NULL,
  `cat_logo_nm` varchar(30) NOT NULL,
  `cat_logo_img` varchar(25) NOT NULL,
  `cat_logo_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_logo`
--

INSERT INTO `cat_logo` (`cat_logo_id`, `cat_logo_nm`, `cat_logo_img`, `cat_logo_desc`) VALUES
(1, 'Pictorial marks', 'pictorial marks.png', 'pictorial marks'),
(2, 'Abstract design', 'abs.jpg', 'Abstract design'),
(3, 'Wordmark design', 'wordmark.jpg', 'Wordmark design'),
(4, 'Monogram marks', 'mo 1.jpeg', 'Monogram design'),
(5, 'Emblem design', 'emblems.jpg', 'Emblem design'),
(6, 'Mascot design', 'mascots.png', 'Mascot design'),
(7, 'Combination marks', 'co 1.jpeg', 'Combination-marks design');

-- --------------------------------------------------------

--
-- Table structure for table `cat_temp`
--

CREATE TABLE `cat_temp` (
  `cat_temp_id` int(200) NOT NULL,
  `cat_temp_nm` varchar(30) NOT NULL,
  `cat_temp_img` varchar(25) NOT NULL,
  `cat_temp_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_temp`
--

INSERT INTO `cat_temp` (`cat_temp_id`, `cat_temp_nm`, `cat_temp_img`, `cat_temp_desc`) VALUES
(1, 'Art & Design', 'art and design.jpg', 'template of Art & Design'),
(2, 'Technology', 'ai4.jpg', 'template of Technology category'),
(3, 'Fashion', 'fashion.jpg', 'templates of Fashion category'),
(4, 'Education', 'edu5.jpg', 'templates of Education category'),
(5, 'Food and Restaurant', 'food2.jpg', 'templates of Food category'),
(6, 'Travel', 'travel2.jpg', 'templates of Travel category'),
(7, 'Sale', 'sale.jpg', 'templates of Sale category');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `code_id` int(200) NOT NULL,
  `code_nm` varchar(30) NOT NULL,
  `code_owner` varchar(30) NOT NULL,
  `code_text` varchar(300) NOT NULL,
  `code_file` varchar(50) NOT NULL,
  `cat_code_id` int(200) NOT NULL,
  `usr_reg_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`code_id`, `code_nm`, `code_owner`, `code_text`, `code_file`, `cat_code_id`, `usr_reg_id`) VALUES
(1, 'hello world c program', 'John Kennedy', 'How to write hello world in c language?', 'c/hello world c program.pdf', 1, 8),
(2, 'factorial c program', 'Sachin Shah', 'how to find factorial of a number in c language?', 'c/factorial c program.pdf', 1, 9),
(3, 'simple calculator c program', 'Visha Manhotra', 'how to simple calculator in c language?', 'c/simple calc c program.pdf', 1, 10),
(4, 'factorial java program', 'Akshay Modi', 'how to find factorial of number in java language?', 'java/factorial java program.pdf', 2, 11),
(5, 'fibonacci java program', 'john cooper', 'how to print fibonacci series in java language?', 'java/fibonacci java program.pdf', 2, 12),
(6, 'reverse number java program', 'jack smith', 'how to find reverse of number in java language?', 'java/reverse num java program.pdf', 2, 13),
(7, 'armstrong php program', 'wanda roy', 'how to check number is armstrong or not in php language?', 'php/armstrong php program.pdf', 3, 14),
(8, 'palindrome php program', 'harry stark', 'how to check number is palindrome or not in php language?', 'php/palindrome php program.pdf', 3, 15),
(9, 'prime number php program', 'aditi sinha', 'how to check number is prime or not in php language?', 'php/prime number php program.pdf', 3, 16),
(10, 'headings html program', 'tony harries', 'how to put headings in html language?', 'html/headings html program.pdf', 4, 17),
(11, 'image html program', 'priya mehta', 'how to add image in html language?', 'html/image html program.pdf', 4, 18),
(12, 'link html program', 'parth singhaniya', 'how to add link in html language?', 'html/link html program.pdf', 4, 19),
(13, 'align css program', 'neha singh', 'how to align element in css language?', 'css/align css program.pdf', 5, 20),
(14, 'font colour css program', 'John Kennedy', 'how to font colour in css language?', 'css/font colour css program.pdf', 5, 8),
(15, 'font family css program', 'Sachin Shah', 'how to font family in css language?', 'css/font family css program.pdf', 5, 9),
(16, 'sum of 2 numbers js program', 'Visha Manhotra', 'how to sum 2 numbers in js language?', 'js/sum of 2 numbers js program.pdf', 6, 10),
(17, 'fibonacci js program', 'Akshay Modi', 'how to print fibonacci series in js language?', 'js/fibonacci js program.pdf', 6, 11),
(18, 'factorial js program', 'harry stark', 'how to find factorial of number in js language?', 'js/factorial js program.pdf', 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(200) NOT NULL,
  `contact_msg` varchar(300) NOT NULL,
  `usr_reg_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_msg`, `usr_reg_id`) VALUES
(1, 'i wanna talk with you.', 8);

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `cid` int(11) NOT NULL,
  `cnm` varchar(400) NOT NULL,
  `cstart` datetime NOT NULL,
  `cend` datetime NOT NULL,
  `cplace` varchar(400) NOT NULL,
  `cimg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`cid`, `cnm`, `cstart`, `cend`, `cplace`, `cimg`) VALUES
(1, 'Mobile app Contest', '2021-05-01 18:01:33', '2021-05-21 18:01:33', 'Milpitas, City in California ,US', 'app_con.jpg'),
(2, 'web Development contest', '2021-05-01 18:01:33', '2021-05-10 18:01:33', 'Ambavadi, Gulbai Tekra, Ahmedabad', 'code_con.jpg'),
(3, 'Logo development Contest', '2021-05-10 18:09:41', '2021-05-20 18:09:41', 'REVA University Bengaluru India', 'logo_con.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contest_reg`
--

CREATE TABLE `contest_reg` (
  `crid` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `coid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contest_reg`
--

INSERT INTO `contest_reg` (`crid`, `reg_id`, `coid`) VALUES
(4, 15, 1),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contest_winner`
--

CREATE TABLE `contest_winner` (
  `cwid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c_ans`
--

CREATE TABLE `c_ans` (
  `caid` int(11) NOT NULL,
  `cans` varchar(500) NOT NULL,
  `usr_reg_id` int(11) NOT NULL,
  `cqid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_ans`
--

INSERT INTO `c_ans` (`caid`, `cans`, `usr_reg_id`, `cqid`) VALUES
(1, 'i am redy for full time webdevlopment', 10, 1),
(2, 'me too ,i am redy for full time webdevlopment', 12, 1),
(6, 'yes , its one of the most rapidly growing field in recent 5 years..go for it.', 15, 7);

-- --------------------------------------------------------

--
-- Table structure for table `c_forum`
--

CREATE TABLE `c_forum` (
  `cfid` int(11) NOT NULL,
  `cfnm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_forum`
--

INSERT INTO `c_forum` (`cfid`, `cfnm`) VALUES
(1, 'Job Opportunity'),
(2, 'Career Queries');

-- --------------------------------------------------------

--
-- Table structure for table `c_que`
--

CREATE TABLE `c_que` (
  `cqid` int(11) NOT NULL,
  `cque` varchar(500) NOT NULL,
  `usr_reg_id` int(11) NOT NULL,
  `cfid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_que`
--

INSERT INTO `c_que` (`cqid`, `cque`, `usr_reg_id`, `cfid`) VALUES
(1, 'I need Web Devloper', 9, 1),
(2, 'I need Web Designer', 8, 1),
(7, 'what are the scopes in IOT field ... is IOT good for career ? ', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(200) NOT NULL,
  `feedback_nm` varchar(30) NOT NULL,
  `feedback_mail` varchar(25) NOT NULL,
  `feedback_text` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_nm`, `feedback_mail`, `feedback_text`) VALUES
(1, 'Harsh Thanki', 'hjhjh@g.com', 'this is a very good website..keep it up'),
(2, 'Tarang sitapara', 'ts@gmail.com', 'its a really good site..');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(200) NOT NULL,
  `logo_nm` varchar(30) NOT NULL,
  `logo_desc` varchar(300) NOT NULL,
  `logo_owner` varchar(30) NOT NULL,
  `logo_prize` int(10) NOT NULL,
  `logo_path` varchar(30) NOT NULL,
  `logo_file` varchar(30) NOT NULL,
  `cat_logo_id` int(200) NOT NULL,
  `usr_reg_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_nm`, `logo_desc`, `logo_owner`, `logo_prize`, `logo_path`, `logo_file`, `cat_logo_id`, `usr_reg_id`) VALUES
(1, 'Golden', 'Golden logo in black background', 'John Kennedy', 2000, 'pi 2.jpeg', 'pi 2.jpeg', 1, 8),
(2, 'Cloud', 'Cloud with thunder', 'Sachin Shah', 9000, 'pi 4.jpeg', 'pi 4.jpeg', 1, 9),
(3, 'Bird', 'flying Bird', 'Visha Manhotra', 7000, 'pi 6.jpeg', 'pi 6.jpeg', 1, 10),
(4, 'abstract shape', 'abstract shape with white background', 'Akshay Modi', 7000, 'ab 5.jpeg', 'ab 5.jpeg', 2, 11),
(5, 'The Moon', 'The Moon with dark background', 'john cooper', 3000, 'ab 7.jpeg', 'ab 7.jpeg', 2, 12),
(6, 'The Bulb', 'The Bulb with black background', 'john cooper', 2000, 'ab 6.jpeg', 'ab 6.jpeg', 2, 12),
(7, 'loop', 'loop text with interconnected o\'s', 'jack smith', 1000, 'wo 1.jpeg', 'wo 1.jpeg', 3, 13),
(8, 'New Wave', 'New Wave text with interconnected w\'s', 'jack smith', 2000, 'wo 4.jpeg', 'wo 4.jpeg', 3, 13),
(9, 'Ticket', 'Ticket text with dark background', 'wanda roy', 4000, 'wo 7.jpeg', 'wo 7.jpeg', 3, 14),
(10, 'AB ', 'A inside B with light pink type colour', 'harry stark', 9000, 'mo 7.jpeg', 'mo 7.jpeg', 4, 15),
(11, 'HP', 'HP interconnected characters', 'wanda roy', 2000, 'mo 6.jpeg', 'mo 6.jpeg', 4, 14),
(12, 'RO', 'RO characters interconnected and with black background', 'harry stark', 2000, 'mo 4.jpeg', 'mo 4.jpeg', 4, 15),
(13, 'Cofee', 'unique Cofee logo', 'aditi sinha', 2000, 'em 4.jpeg', 'em 4.jpeg', 5, 16),
(14, 'Lions club', 'vintage style Lions club logo', 'tony harries', 1000, 'em 7.jpeg', 'em 7.jpeg', 5, 17),
(15, 'TATOO Studio', 'Vintage style Studio logo', 'priya mehta', 6000, 'em 2.jpeg', 'em 2.jpeg', 5, 18),
(16, 'T-rex', 'T-rex logo for animal organizations', 'priya mehta', 2000, 'ma 2.jpeg', 'ma 2.jpeg', 6, 18),
(17, 'Honey bee', 'Honey bee logo for organic products', 'parth singhaniya', 7000, 'ma 3.jpeg', 'ma 3.jpeg', 6, 19),
(18, 'Software', 'Software logo with mascot design', 'tony harries', 5000, 'ma 5.jpeg', 'ma 5.jpeg', 6, 17),
(19, 'Ninja Bikes', 'Ninja riding a Bike', 'neha singh', 5000, 'co 2.jpeg', 'co 2.jpeg', 7, 20),
(20, 'Construction', 'Roman Centurian in construction logo', 'parth singhaniya', 6000, 'co 3.jpeg', 'co 3.jpeg', 7, 19),
(22, 'Photography', 'Photography logo with MNS keyword', 'John Kennedy', 10000, 'co 6.jpeg', 'co 6.jpeg', 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(200) NOT NULL,
  `usr_img_path` varchar(100) NOT NULL,
  `p_desc` varchar(100) NOT NULL,
  `usr_reg_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `usr_reg_id` int(11) NOT NULL,
  `usr_nm` varchar(30) NOT NULL,
  `usr_reg_nm` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`usr_reg_id`, `usr_nm`, `usr_reg_nm`, `pwd`, `email`) VALUES
(1, 'abc1', 'abc', '123', 'abc@gmail.com'),
(8, 'jk1', 'John Kennedy', '123', 'jk1@gmail.com'),
(9, 'ss1', 'Sachin Shah', '123', 'ss1@gmail.com'),
(10, 'vm1', 'Visha Manhotra', '123', 'vm1@gmail.com'),
(11, 'am1', 'Akshay Modi', '123', 'am1@gmail.com'),
(12, 'jc1', 'john cooper', '123', 'jc1@gmail.com'),
(13, 'js1', 'jack smith', '123', 'js1@gmail.com'),
(14, 'wr1', 'wanda roy', '123', 'wr12@gmail.com'),
(15, 'hs1', 'harry stark', '123', 'hs1@gmail.com'),
(16, 'as1', 'aditi sinha', '123', 'as1@gmail.com'),
(17, 'th1', 'tony harries', '123', 'th1@gmail.com'),
(18, 'pm1', 'priya mehta', '123', 'pm1@gmail.com'),
(19, 'ps1', 'parth singhaniya', '123', 'ps1@gmail.com'),
(20, 'ns1', 'neha singh', '123', 'ns1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `template_id` int(200) NOT NULL,
  `template_nm` varchar(30) NOT NULL,
  `template_desc` varchar(300) NOT NULL,
  `template_owner` varchar(30) NOT NULL,
  `template_price` int(10) NOT NULL,
  `template_path` varchar(30) NOT NULL,
  `template_file` varchar(30) NOT NULL,
  `cat_temp_id` int(200) NOT NULL,
  `usr_reg_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_code`
--
ALTER TABLE `cat_code`
  ADD PRIMARY KEY (`cat_code_id`);

--
-- Indexes for table `cat_logo`
--
ALTER TABLE `cat_logo`
  ADD PRIMARY KEY (`cat_logo_id`);

--
-- Indexes for table `cat_temp`
--
ALTER TABLE `cat_temp`
  ADD PRIMARY KEY (`cat_temp_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`code_id`),
  ADD KEY `foreign key 5` (`cat_code_id`),
  ADD KEY `foreign key 6` (`usr_reg_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contest_reg`
--
ALTER TABLE `contest_reg`
  ADD PRIMARY KEY (`crid`);

--
-- Indexes for table `contest_winner`
--
ALTER TABLE `contest_winner`
  ADD PRIMARY KEY (`cwid`);

--
-- Indexes for table `c_ans`
--
ALTER TABLE `c_ans`
  ADD PRIMARY KEY (`caid`);

--
-- Indexes for table `c_forum`
--
ALTER TABLE `c_forum`
  ADD PRIMARY KEY (`cfid`);

--
-- Indexes for table `c_que`
--
ALTER TABLE `c_que`
  ADD PRIMARY KEY (`cqid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`),
  ADD KEY `foreign key 1` (`cat_logo_id`),
  ADD KEY `foreign key 2` (`usr_reg_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `FOREIGN` (`usr_reg_id`) USING BTREE;

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`usr_reg_id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`template_id`),
  ADD KEY `foreign key 3` (`cat_temp_id`),
  ADD KEY `foreign key 4` (`usr_reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_code`
--
ALTER TABLE `cat_code`
  MODIFY `cat_code_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cat_logo`
--
ALTER TABLE `cat_logo`
  MODIFY `cat_logo_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cat_temp`
--
ALTER TABLE `cat_temp`
  MODIFY `cat_temp_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `code_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contest_reg`
--
ALTER TABLE `contest_reg`
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contest_winner`
--
ALTER TABLE `contest_winner`
  MODIFY `cwid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_ans`
--
ALTER TABLE `c_ans`
  MODIFY `caid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `c_forum`
--
ALTER TABLE `c_forum`
  MODIFY `cfid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c_que`
--
ALTER TABLE `c_que`
  MODIFY `cqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `usr_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `template_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `foreign key 5` FOREIGN KEY (`cat_code_id`) REFERENCES `cat_code` (`cat_code_id`),
  ADD CONSTRAINT `foreign key 6` FOREIGN KEY (`usr_reg_id`) REFERENCES `reg` (`usr_reg_id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`usr_reg_id`) REFERENCES `reg` (`usr_reg_id`);

--
-- Constraints for table `logo`
--
ALTER TABLE `logo`
  ADD CONSTRAINT `foreign key 1` FOREIGN KEY (`cat_logo_id`) REFERENCES `cat_logo` (`cat_logo_id`),
  ADD CONSTRAINT `foreign key 2` FOREIGN KEY (`usr_reg_id`) REFERENCES `reg` (`usr_reg_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`usr_reg_id`) REFERENCES `reg` (`usr_reg_id`);

--
-- Constraints for table `template`
--
ALTER TABLE `template`
  ADD CONSTRAINT `foreign key 3` FOREIGN KEY (`cat_temp_id`) REFERENCES `cat_temp` (`cat_temp_id`),
  ADD CONSTRAINT `foreign key 4` FOREIGN KEY (`usr_reg_id`) REFERENCES `reg` (`usr_reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
