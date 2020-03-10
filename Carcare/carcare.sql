-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 11:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nickname`, `phone`, `status`) VALUES
(1, 'artty', '1234', 'art', 845662189, 'Admin'),
(2, 'really', '1234', 'real', 899454656, '');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `plate` varchar(10) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `typename` varchar(10) NOT NULL,
  `carimage` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `plate`, `driver`, `company`, `typename`, `carimage`) VALUES
(30, 'à¸žà¸­0000', 'à¸ªà¸¡à¸žà¸£', 'à¸¡à¸‚', 'à¸šà¸±à¸ª', 'upload/car2_1524668825_1525352018.jpg'),
(31, 'à¸­à¸›1234', 'à¸¡à¸²à¸¢à¸±à¸‡', 'à¹€à¸£à¹‡à¸§à¹†', 'à¸šà¸±à¸ª', 'upload/car4_1524651741_1525352703.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carcare`
--

CREATE TABLE `carcare` (
  `id_car` int(3) NOT NULL,
  `namecarcare` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carcare`
--

INSERT INTO `carcare` (`id_car`, `namecarcare`, `phone`, `address`, `latitude`, `longitude`) VALUES
(1, 'à¹à¸§à¸§à¸±à¸š', 27489321, '113/45', '120021245451', '0001245457'),
(4, 'à¸—à¸”à¸ªà¸­à¸š', 4121212, '124/9', '1121232012', '0512145455'),
(5, 'à¹‚à¸Šà¸§à¹Œà¸«à¹ˆà¸§à¸¢', 254564565, '115/96', '00032154545', '01124524541');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `typeid` int(1) NOT NULL,
  `typename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`typeid`, `typename`) VALUES
(0, 'รถบัส'),
(1, 'รถตู้');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `date` date NOT NULL,
  `name_activity` varchar(50) NOT NULL,
  `opjective` varchar(100) NOT NULL,
  `status1` int(1) NOT NULL,
  `car_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `date`, `name_activity`, `opjective`, `status1`, `car_id`) VALUES
(18, 'ioioi', '#008000', '2018-04-12 00:00:00', '2018-04-13 00:00:00', '0000-00-00', 'ryryr', 'eryeryer', 1, 27),
(21, 'qwqwqwqwqw', '#008000', '2018-04-12 00:00:00', '2018-04-13 00:00:00', '0000-00-00', 'asda', 'asaa', 1, 28),
(22, 'thailand', '#008000', '2018-04-18 00:00:00', '2018-04-19 00:00:00', '0000-00-00', '', '', 1, 28),
(23, 'qqqq', '#008000', '2018-04-19 00:00:00', '2018-04-20 00:00:00', '0000-00-00', '', '', 1, 0),
(24, 'a', '#008000', '2018-05-07 00:00:00', '2018-05-08 00:00:00', '0000-00-00', '', '', 1, 0),
(26, 'junior', '#FFD700', '2018-05-09 00:00:00', '2018-05-10 00:00:00', '0000-00-00', 'asdasd', 'cdsdcsd', 1, 0),
(27, 'lll', '#FFD700', '2018-05-08 00:00:00', '2018-05-09 00:00:00', '0000-00-00', '', '', 0, 0),
(28, 'eiei', '#FFD700', '2018-05-10 00:00:00', '2018-05-11 00:00:00', '0000-00-00', 'aaa', 'aaaa', 0, 0),
(29, 'new', '#008000', '2018-05-11 00:00:00', '2018-05-12 00:00:00', '0000-00-00', 'aaaa', 'aaaaa', 1, 0),
(30, 'meow', '#FFD700', '2018-05-16 00:00:00', '2018-05-17 00:00:00', '0000-00-00', 'meow', 'meow', 0, 0),
(31, 'm', '#FFD700', '2018-05-15 00:00:00', '2018-05-16 00:00:00', '0000-00-00', '', '', 0, 0),
(32, 'mm', '#008000', '2018-05-02 00:00:00', '2018-05-03 00:00:00', '0000-00-00', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `Fname`, `Lname`, `mail`, `pass`, `phone`, `status`) VALUES
(1, 'borirat', 'car', 'borirat@hotmail.com', 'borirat', '0956584126', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(10) NOT NULL,
  `namereport` varchar(100) CHARACTER SET utf32 NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `no` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `typeid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `ses_time` time NOT NULL,
  `ses_day` date NOT NULL,
  `why` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`no`, `name`, `typeid`, `date`, `ses_time`, `ses_day`, `why`) VALUES
(9, 'à¸ªà¸¸à¸ à¸±à¸ªà¸ªà¸£à¸²', '0', '2018-04-18', '02:01:00', '2018-04-02', 'dfsdf'),
(10, 'à¸ªà¸¸à¸ à¸±à¸ªà¸ªà¸£à¸²', '0', '2018-04-17', '02:34:00', '2018-04-04', 'retert'),
(11, 'à¹à¸ªà¸‡à¸”à¸²à¸§', '0', '2018-04-19', '13:23:00', '2018-04-01', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_servicebycarcare` int(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `email`, `password`, `tel`, `type`) VALUES
(2, 'auy', 'à¸­à¸¸à¹‰à¸¢', '', '1234', '012345678', 'admin'),
(3, 'arki', 'arki', '', '1111', '12346790', 'User'),
(9, 'wave', 'wave', '', '123', '1234', 'User'),
(11, 'meow', 'à¸ªà¸¸à¸ à¸±à¸ªà¸ªà¸£à¸²', '', '1234', '123', 'User'),
(14, 'auy', 'à¹à¸ªà¸‡à¸”à¸²à¸§', '', '1234', '1245', 'Admin'),
(18, 'supassara', 'à¸ªà¸¸à¸ à¸±à¸ªà¸ªà¸£à¸²', '', '1234', '12345', 'User'),
(19, 'meow', 'meow', '', '1234', '0987', 'Admin'),
(111, 'Arkito', 'arkito', 'arki@gmail.com', '1111', '02132321232', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usercare`
--

CREATE TABLE `usercare` (
  `id_care` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `careemail` varchar(200) NOT NULL,
  `carepassword` varchar(200) NOT NULL,
  `carephone` varchar(200) NOT NULL,
  `id_carcare` int(11) NOT NULL,
  `namecarecare` varchar(200) NOT NULL,
  `careaddress` varchar(200) NOT NULL,
  `carecity` varchar(200) NOT NULL,
  `latitude` varchar(60) NOT NULL,
  `longitude` varchar(60) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercare`
--

INSERT INTO `usercare` (`id_care`, `fname`, `lname`, `careemail`, `carepassword`, `carephone`, `id_carcare`, `namecarecare`, `careaddress`, `carecity`, `latitude`, `longitude`, `status`) VALUES
(1, 'real', 'rrrr', 'real@gmail.com', '1234', '099999999', 0, 'realcare', 'khondd222', 'kkk', '', '', 1),
(4, 'à¹€à¸£à¸µà¸¢à¸§à¸Ÿà¸§à¸¢', 'à¹€à¸Ÿà¸£à¸´à¸ªà¸Ÿà¸§à¸¢', 'à¹‚à¸¡à¹€à¸¡à¸•à¸±à¸‡à¹€à¸¡@gmail.com', '112233', '0866421325', 0, 'à¸ªà¸²à¸§HUSO', '225/45', 'à¸ à¸¹à¹€à¸à¹‡à¸•', '', '', 1),
(5, 'à¹‰à¹‰à¸à¸”à¸«à¸³', 'à¸«à¹‰à¸²à¸šà¸²à¸—', 'à¹‡Humyai_@gmail.com', '123456778', '0936295895', 0, 'à¸šà¸£à¸´à¸£à¸²à¸Š à¹‚à¸¢à¸˜à¸µà¹€à¸ªà¸§à¸•', '7/1 à¸•.à¹ƒà¸™à¹€à¸¡à¸·à¸­à¸‡ à¸­.à¹€à¸¡à¸·à¸­à¸‡', 'à¹€à¸Šà¸µà¸¢à¸‡à¸£à¸²à¸¢', '', '', 1),
(6, 'fdf', 'sdfsdf', 'sdfsdf', 'dsfsdf', 'dsfsd', 0, 'dsfsdf', 'sdfsdf', 'à¸•à¸²à¸', '', '', 1),
(7, 'fdf', 'sdfsdf', 'sdfsdf', 'dsfsdf', 'dsfsd', 0, 'dsfsdf', 'sdfsdf', 'à¸•à¸²à¸', '', '', 2),
(8, 'rq', 'dfsdf', 'sdfsdf', 'dsfdsf', 'dsfsdfdsf', 0, 'fdssdf', 'sdfsdf', 'à¸•à¸²à¸', '', '', 1),
(9, 'ffff', 'ff', 'ffff', 'fff', 'fff', 0, 'aaa', 'aa', 'à¹€à¸Šà¸µà¸¢à¸‡à¹ƒà¸«à¸¡à¹ˆ', '011211215', '030659565', 2),
(10, 'Atipan', 'Siripan', 'artty@gmail.com', '12345', '0880647789', 0, 'ArtCarcare', '227/4-9', 'à¸‚à¸­à¸™à¹à¸à¹ˆà¸™', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `carcare`
--
ALTER TABLE `carcare`
  ADD PRIMARY KEY (`id_car`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `usercare`
--
ALTER TABLE `usercare`
  ADD PRIMARY KEY (`id_care`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `carcare`
--
ALTER TABLE `carcare`
  MODIFY `id_car` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `usercare`
--
ALTER TABLE `usercare`
  MODIFY `id_care` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
