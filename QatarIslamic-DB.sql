-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 09:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qatar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `id` int(11) NOT NULL,
  `skeleton` int(30) NOT NULL DEFAULT '1100',
  `turnkey` int(30) NOT NULL DEFAULT '1700'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `skeleton`, `turnkey`) VALUES
(6, 1500, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `project_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imageurl`, `name`, `location`, `description`, `project_cat`) VALUES
(156, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501656974.jpg', 'Qatar', 'Dhoha', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially', 1),
(157, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501650799.jpg', 'Recent Project Name 2(After Updated)', 'Recent Project Location 2(After Updated)', 'Recent Project Description 2(After Updated)', 1),
(158, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501650278.jpg', 'Recent Project Name 3', 'Recent Project Location 3', 'Recent Project Description 3', 1),
(159, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501651025.jpg', 'Active Project Name 1', 'Active Project Location 1', 'Active Project Description 1', 2),
(160, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501651099.jpg', 'Active Project Name 2', 'Active Project Location 2', 'Active Project Description 2', 2),
(161, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501654360.jpg', 'Active Project Name 3(Updated)', 'Active Project Location 3(Updated)', 'ACTIVE PROJECT NAME 3(UPDATED)', 2),
(162, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501651188.jpg', 'Future Project Name 1', 'Future Project Location 1', 'Future Project Description 1', 3),
(163, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501651203.jpg', 'Future Project Name 2', 'Future Project Location 2', 'Future Project Description 2', 3),
(164, 'http://site.startupbug.net:6999/qatarislamic/assets/uploads/projects/1501651223.jpg', 'Future Project Name 3', 'Future Project Location 3', 'Future Project Description 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `fb` varchar(70) NOT NULL,
  `twitter` varchar(70) NOT NULL,
  `insta` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `fb`, `twitter`, `insta`, `email`, `number`) VALUES
(7, 'https://www.facebook.com/', 'https://twitter.com/Qatarislamic', 'https://www.instagram.com/', 'contactus@qatarislamic.com', 40164787);

-- --------------------------------------------------------

--
-- Table structure for table `linksorting`
--

CREATE TABLE `linksorting` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `name` varchar(70) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linksorting`
--

INSERT INTO `linksorting` (`id`, `link`, `name`, `order`) VALUES
(13, 'http://site.startupbug.net:6999/qatarislamic/', 'Home', 1),
(14, 'http://site.startupbug.net:6999/qatarislamic/home/about_view', 'About Us', 2),
(15, 'http://site.startupbug.net:6999/qatarislamic/home/project_view', 'Our Projects', 3),
(16, 'http://site.startupbug.net:6999/qatarislamic/home/calculate_view', 'Calculate Cost', 4),
(17, 'http://site.startupbug.net:6999/qatarislamic/home/servicesmen_view', 'Services', 5),
(18, 'http://site.startupbug.net:6999/qatarislamic/home/contact_view', 'CONTACT US', 6);

-- --------------------------------------------------------

--
-- Table structure for table `linksortingfooter`
--

CREATE TABLE `linksortingfooter` (
  `id` int(11) NOT NULL,
  `link` varchar(150) NOT NULL,
  `name` varchar(70) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linksortingfooter`
--

INSERT INTO `linksortingfooter` (`id`, `link`, `name`, `order`) VALUES
(1, 'http://site.startupbug.net:6999/qatarislamic/home/about_view', 'About Us', 1),
(2, 'http://site.startupbug.net:6999/qatarislamic/home/contact_view', 'Contact Us', 2),
(3, 'http://site.startupbug.net:6999/qatarislamic/home/calculate_view', 'Calculate Cost', 3),
(4, 'http://site.startupbug.net:6999/qatarislamic/home/contact_view', 'Our Location', 4),
(5, 'http://site.startupbug.net:6999/qatarislamic/home/project_view', 'Our Projects', 5);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name1` varchar(150) NOT NULL,
  `description1` longtext NOT NULL,
  `name2` varchar(150) NOT NULL,
  `description2` longtext NOT NULL,
  `name3` varchar(150) NOT NULL,
  `description3` longtext NOT NULL,
  `name4` varchar(150) NOT NULL,
  `description4` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name1`, `description1`, `name2`, `description2`, `name3`, `description3`, `name4`, `description4`) VALUES
(38, 'General contracting for buildings ', 'We work based on modern philosophy to integrate latest technology and best practices in order to complete projects efficiently and in a timely manner. We take a partnership approach to our client relationships tailoring our services to suit our client’s requirements guiding them through each step of the construction process. We provide construction, construction-management services to our clients; we will also manage your programme requirements through to successful delivery.', 'Building Materials Trading', 'We provide a range of construction material, tools and machinery for the industry. We host the best brands in the field.', 'Selling and purchasing real estate', 'We have a good experience and knowledge in selling and purchasing of real estate ', 'Workmanship Resourcing', 'We provide professional services for mason, carpentry, steel fixing and others utilizing best and latest practices in the market.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linksorting`
--
ALTER TABLE `linksorting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linksortingfooter`
--
ALTER TABLE `linksortingfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `linksorting`
--
ALTER TABLE `linksorting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `linksortingfooter`
--
ALTER TABLE `linksortingfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
