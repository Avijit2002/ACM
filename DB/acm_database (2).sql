-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 02:54 PM
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
-- Database: `acm database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_members`
--

CREATE TABLE `admin_members` (
  `sln` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_members`
--

INSERT INTO `admin_members` (`sln`, `name`, `username`, `hash`) VALUES
(5, '', 'shivani', '$2y$10$Gynx80u3OfwKzw.teYuSCe3Bl7lS4nrnwB/4uIV6AI/r24r1OLY2C'),
(6, '', 'shivani@gmail.com', '$2y$10$07feL4SshSUWbUhS3MKNGO/BELg.aKBnQXY0SO/fAZKb/x2bfhsLW'),
(7, '', 'avijit@gmail.com', '$2y$10$3KdM3QfvhSTw0BB1iO/Ud.t.TfzUW5ddxqVdqqTxYCyGrTPXL1tXu'),
(8, 'Avijit', 'avijit123@gmail.com', '$2y$10$qty7jsff6KpvcwQHlrmlOe7WrnL4jRuvMkunWcNktCqeiCxfTl6aq');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `sln` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `acronym` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `start_time` date NOT NULL,
  `end_time` time NOT NULL,
  `event address` varchar(200) NOT NULL,
  `contact name` varchar(100) NOT NULL,
  `contact email` varchar(25) NOT NULL,
  `event type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`sln`, `Title`, `acronym`, `image`, `description`, `start_time`, `end_time`, `event address`, `contact name`, `contact email`, `event type`) VALUES
(1, 'Linux vs apache web server brief discussion', '', 'event2.jpeg', 'Linux is a family of open-source Unix-like operating systems based on the Linux (/ˈliːnʊks/ (listen) LEE-nuuks or /ˈlɪnʊks/ LIN-uuks)[11] is a family of open-source Unix-like operating systems based on the Linux kernel,[12] an operating system kernel first released on September 17, 1991, by Linus Torvalds.[13][14][15] Linux is typically packaged as a Linux distribution, which includes the kernel and supporting system software and libraries, many of which are provided by the GNU Project. Many Linux distributions use the word \"Linux\" in their name, but the Free Software Foundation uses the name \"GNU/Linux\" to emphasize the importance of GNU software, causing some controversy.[16][17]  Popular Linux distributions[18][19][20] include Debian, Fedora Linux, and Ubuntu, the latter of which itself consists of many different distributions and modifications, including Lubuntu and Xubuntu. Commercial distributions include Red Hat Enterprise Linux and SUSE Linux Enterprise. Desktop Linux distributions include a windowing system such as X11 or Wayland, and a desktop environment such as GNOME or KDE Plasma. Distributions intended for servers may omit graphics altogether, or include a solution stack such as LAMP. Because Linux is freely redistributable, anyone may create a distribution for any purpose.[21]  Linux was originally developed for personal computers based on the Intel x86 architecture, but has since been ported to more platforms than any other operating system.[22] Because of the dominance of the Linux-based Android on smartphones, Linux, including Android, has the largest installed base of all general-purpose operating systems, as of May 2022.[23][24][25] Although Linux is, as of November 2022, used by only around 2.6 percent of desktop computers,[26] the Chromebook, which runs the Linux kernel-based ChromeOS, dominates the US K–12 education market and represents nearly 20 percent of sub-$300 notebook sales in the US.[27] Linux is the leading operating system on servers (over 96.4% of the top 1 million web servers\' operating systems are Linux),[28] leads other big iron systems such as mainframe computers, and is used on all of the world\'s 500 fastest supercompters[d] (since November 2017, having gradually displaced all competitors).[29][30][31] Linux kernel, an operating system kernel first released on September 17, 1991, by Linus Torvalds.', '2022-12-07', '00:00:00', '', '', '', 'ACM-W Celebration'),
(2, 'Linux vs apache web server brief discussion ok in', '', 'event2.jpeg', '', '2022-11-15', '00:00:00', '', '', '', 'ACM-W Celebration'),
(3, 'Networking Components and Useful UNIX Commands.', '', 'eve.jpg', '', '2022-12-25', '00:00:00', '', '', '', 'ACM-W Celebration'),
(4, 'Machine Learning', '', 'biswa.jpg', '', '2022-12-29', '00:00:00', '', '', '', 'ACM-W Celebration'),
(5, 'AI', '', 'avatar.png', '', '2022-08-19', '00:00:00', '', '', '', 'ACM-W Celebration'),
(6, 'Accv', '', 'Screenshot (15).png', '', '0000-00-00', '00:00:00', '', '', '', 'Student Competition');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `sln` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `phone no.` int(20) NOT NULL,
  `membership id` varchar(15) NOT NULL,
  `profile pic` varchar(100) NOT NULL,
  `academic-year` int(11) NOT NULL,
  `user type` varchar(50) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sln`, `email`, `name`, `dept`, `phone no.`, `membership id`, `profile pic`, `academic-year`, `user type`, `linkedin`, `github`) VALUES
(1, 'avijit123@gmail.com', 'Triptanjana Sarangi', 'AIML', 0, '1', 'IMG_20220829_190258_260 - TRIPTANJANA SARANGI.jpeg', 2022, 'Chair', '', ''),
(2, 'say@gmail.com', 'Sayak Ghosh', 'AIML', 0, '2', 'DSC_0004 - Sayak Ghosh.JPG', 2022, 'Vice-chair', '', ''),
(3, 'ankitbhattacharyya666@gmail.com', 'Ankit Bhattacharyya', 'AIML', 0, '3', 'IMG-20230103-WA0003 - Ankit Bhattacharyya.jpg', 2022, 'Treasurer', '', ''),
(4, 'avijit.ram.aiml.2021@tint.edu.in', 'Avijit Ram', 'AIML', 0, '4', 'dp.jpg', 2022, 'Web-master', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_members`
--
ALTER TABLE `admin_members`
  ADD PRIMARY KEY (`sln`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`sln`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sln`),
  ADD UNIQUE KEY `membership id` (`membership id`),
  ADD UNIQUE KEY `membership id_2` (`membership id`),
  ADD UNIQUE KEY `membership id_3` (`membership id`),
  ADD UNIQUE KEY `membership id_4` (`membership id`),
  ADD UNIQUE KEY `membership id_5` (`membership id`),
  ADD UNIQUE KEY `membership id_6` (`membership id`),
  ADD UNIQUE KEY `membership id_7` (`membership id`),
  ADD UNIQUE KEY `membership id_8` (`membership id`),
  ADD UNIQUE KEY `membership id_9` (`membership id`),
  ADD UNIQUE KEY `membership id_10` (`membership id`),
  ADD UNIQUE KEY `membership id_11` (`membership id`),
  ADD UNIQUE KEY `membership id_12` (`membership id`),
  ADD UNIQUE KEY `membership id_13` (`membership id`),
  ADD UNIQUE KEY `membership id_14` (`membership id`),
  ADD UNIQUE KEY `membership id_15` (`membership id`),
  ADD UNIQUE KEY `membership id_16` (`membership id`),
  ADD UNIQUE KEY `membership id_17` (`membership id`),
  ADD UNIQUE KEY `membership id_18` (`membership id`),
  ADD UNIQUE KEY `membership id_19` (`membership id`),
  ADD UNIQUE KEY `membership id_20` (`membership id`),
  ADD UNIQUE KEY `membership id_21` (`membership id`),
  ADD UNIQUE KEY `membership id_22` (`membership id`),
  ADD UNIQUE KEY `membership id_23` (`membership id`),
  ADD UNIQUE KEY `membership id_24` (`membership id`),
  ADD UNIQUE KEY `membership id_25` (`membership id`),
  ADD UNIQUE KEY `membership id_26` (`membership id`),
  ADD UNIQUE KEY `membership id_27` (`membership id`),
  ADD UNIQUE KEY `membership id_28` (`membership id`),
  ADD UNIQUE KEY `membership id_29` (`membership id`),
  ADD UNIQUE KEY `membership id_30` (`membership id`),
  ADD UNIQUE KEY `membership id_31` (`membership id`),
  ADD UNIQUE KEY `membership id_32` (`membership id`),
  ADD UNIQUE KEY `membership id_33` (`membership id`),
  ADD UNIQUE KEY `membership id_34` (`membership id`),
  ADD UNIQUE KEY `membership id_35` (`membership id`),
  ADD UNIQUE KEY `membership id_36` (`membership id`),
  ADD UNIQUE KEY `membership id_37` (`membership id`),
  ADD UNIQUE KEY `membership id_38` (`membership id`),
  ADD UNIQUE KEY `membership id_39` (`membership id`),
  ADD UNIQUE KEY `membership id_40` (`membership id`),
  ADD UNIQUE KEY `membership id_41` (`membership id`),
  ADD UNIQUE KEY `membership id_42` (`membership id`),
  ADD UNIQUE KEY `membership id_43` (`membership id`),
  ADD UNIQUE KEY `membership id_44` (`membership id`),
  ADD UNIQUE KEY `membership id_45` (`membership id`),
  ADD UNIQUE KEY `membership id_46` (`membership id`),
  ADD UNIQUE KEY `membership id_47` (`membership id`),
  ADD UNIQUE KEY `membership id_48` (`membership id`),
  ADD UNIQUE KEY `membership id_49` (`membership id`),
  ADD UNIQUE KEY `membership id_50` (`membership id`),
  ADD UNIQUE KEY `membership id_51` (`membership id`),
  ADD UNIQUE KEY `membership id_52` (`membership id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_members`
--
ALTER TABLE `admin_members`
  MODIFY `sln` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `sln` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sln` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
