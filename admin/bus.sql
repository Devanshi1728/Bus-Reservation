-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 08:13 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bustype` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `ticketno` bigint(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `address`, `city`, `contactno`, `email`, `bustype`, `date`, `cardno`, `price`, `total`, `ticketno`) VALUES
(1, 'Jahanvi', 'Raiji Nager', 'Mumbai', '9809899099', 'jahanvi@gmail.com', 'Volvo', '2017-08-08', '00ff88', 300, 600, 2),
(2, 'Ekta', 'Laxmi Nager', 'Indor', '8155088990', 'ekta@yahoo.com', 'Isuzu', '2017-07-12', '00oo66', 350, 700, 2),
(3, 'Devanshi', 'Vanjari ', 'Rajkot', '9909889099', 'devu@yahoo.com', 'Non ac', '2017-06-01', '00yy77', 250, 750, 3),
(4, 'Minaxi', 'Near Alpha School', 'Vapi', '8809999088', 'minaxi@gmail.com', 'Sleeper Ac', '2017-05-10', '00pp77', 400, 800, 2),
(5, 'Rashila', 'Near Shivay Temple', 'Jamnager', '9909988809', 'rashila@yahoo.com', 'Volvo', '2017-04-11', '00rr55', 300, 900, 3),
(6, 'Rekha', 'Near Shivram school', 'Ahemdabad', '9907777099', 'rekha@gmail.com', 'Non Ac', '2017-02-07', '00ii77', 250, 500, 2),
(7, 'Mansi', 'Near Jalaram Temple', 'Navsari', '9009080080', 'mansi@gmail.com', 'Volvo', '2017-03-14', '00mmjj', 300, 1200, 4),
(8, 'Heena', 'Moti Baug Road', 'Surat', '8798778978', 'heena@yahoo.com', 'Non Ac', '2017-02-07', '99oouu', 250, 1000, 4),
(9, 'Bhavisha', 'Joshipura', 'Vadodara', '9709787087', 'bhavisha@gmail.com', 'Volvo', '2017-08-23', 'pp0099', 300, 900, 3),
(10, 'Mayuri', 'Zanzarada Road', 'Jaipur', '9907676099', 'mayuri@gmail.com', 'Volvo', '2017-03-21', '00mm88', 350, 1050, 3),
(11, 'Sweety', 'Gandhi Road', 'Junagadh', '8098090890', 'sweety@yahoo.com', 'Sleeper Ac', '2017-04-10', 'hh7799', 400, 1200, 3),
(12, 'Meera', 'Shivaji Road', 'Vadodara', '9806767909', 'meera@yahoo.com', 'Non Ac', '2017-02-02', '00ppuu', 250, 500, 2),
(13, 'Geeta', 'Near Jamnadas school', 'Anand', '8798778978', 'geeta@gmail.com', 'Sleeper', '2016-12-09', '0088yy', 280, 1120, 4),
(14, 'Krupa', 'sardar Baug', 'Valsad', '8909999089', 'krupa@yahoo.com', 'Volvo', '2017-09-15', '00rr55', 300, 600, 2),
(15, 'Varsa', 'Abdul Kalam Road', 'Chikhali', '9908989065', 'varsa@yahoo.com', 'Sleeper', '2018-01-19', '00rr77', 280, 560, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE IF NOT EXISTS `cancel` (
`id` int(11) NOT NULL,
  `Name` varchar(34) NOT NULL,
  `Date` date NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ticketno` varchar(34) NOT NULL,
  `Referenceno` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `Name`, `Date`, `Contact`, `Email`, `Ticketno`, `Referenceno`) VALUES
(1, 'Jahanvi', '2017-08-09', '2147483647', 'jahanvi@gmail.com', '1', '9809899099'),
(2, 'Ekta', '2017-07-13', '2147483647', 'ekta@yahoo.com', '1', '8155088990'),
(3, 'Devanshi', '2017-07-13', '2147483647', 'devu@yahoo.com', '1', '9809899099'),
(4, 'Rekha', '2018-02-03', '9907777099', 'rekha@gmail.com', '1', '9907777099'),
(5, 'Mansi', '2018-03-15', '9909080080', 'mansi@gmail.com', '1', '9909080080'),
(6, 'Rashila', '2017-11-07', '9909988809', 'rashila@yahoo.com', '2', '9909988809'),
(7, 'Minaxi', '2017-05-12', '8809999088', 'minaxi@gmail.com', '1', '8809999088'),
(8, 'Bhavisha', '2017-08-25', '9709787087', 'bhavisha@gmail.com', '1', '9709787087');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `contactno`, `feedback`) VALUES
(1, 'Heena', 'heena@yahoo.com', '8798778978', 'It is Good'),
(2, 'Meera', 'meera@yahoo.com', '9806767909', 'Great Services'),
(3, 'Rekha', 'rekha@yahoo.com', '9907777099', 'It is Good'),
(4, 'Rashila', 'rashila@yahoo.com', '9909988809', 'Not Satisfied'),
(5, 'Minaxi', 'minaxi@email.com', '8809999088', 'Great Services'),
(6, 'Jahanvi', 'jahanvi@gmail.com', '9809899099', 'It is Good'),
(7, 'Ekta', 'ekta@yahoo.com', '8155088990', 'Great Services'),
(8, 'Devanshi', 'devu@yahoo.com', '9909889099', 'It is Good'),
(9, 'Rekha', 'rekha@gmail.com', '9907777099', 'Not Satisfied'),
(10, 'Mansi', 'mansi@gmail.com', '9907676099', 'It is Good'),
(11, 'Bhavisha', 'bhavisha@gmail.com', '9709787087', 'Great services'),
(12, 'Mayuri', 'mayuri@gmail.com', '9907676099', 'It is Good'),
(13, 'Sweety', 'sweety@yahoo.com', '8098090890', 'Great services'),
(14, 'Krupa', 'krupa@yahoo.com', '8909999089', 'Not Satisfied'),
(15, 'Varsa', 'varsa@yahoo.com', '9908989065', 'It is Good');

-- --------------------------------------------------------

--
-- Table structure for table `frenchise`
--

CREATE TABLE IF NOT EXISTS `frenchise` (
  `city` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact no` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frenchise`
--

INSERT INTO `frenchise` (`city`, `address`, `contact no`, `email`) VALUES
('gondal', 'swaminarayan temple', 9724337148, 'mto_gondal@gmail.com'),
('Ahemdabad', 'paldi', 9270696600, 'mto_ahemdabad@gmail.com'),
('bhavnagar', 'laal tanki', 27824399686, 'mto_bhavnagae@gmail.com'),
('baroda', 'bapunagar', 9724337529, 'mto_baroda@gmail.com'),
('jamnagar', 'char rasta', 9876025863, 'mto_jamanagar@yahoo.com'),
('indore', 'gururdwara', 9852351456, 'mto_indore@gmail.com'),
('mumbai', 'borivali', 9978499912, 'mto_mumbai@gmail.com'),
('surat', 'mission swaminarayan', 9825660122, 'mto_surat@gmail.com'),
('vapi', 'ringroad', 9825942264, 'mto_vapi@yahoo.com'),
('navsari', 'pramukh cinema', 9724337145, 'mto_navsari@gmail.com'),
('vidhyanaga', 'setelite', 9724337136, 'mto_vidhyanagar@gmail.com'),
('nathdwara', 'shreenathji temple', 9724337185, 'mto_nathdwara@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Jahanvi', '12345'),
(2, 'Ekta', 'ekta1'),
(3, 'Devanshi', 'devu1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `city`, `email`, `pincode`, `contactno`, `age`, `username`, `password`, `country`, `state`) VALUES
(1, 'Jahanvi', 'Raiji Nager', 'Mumbai', 'jahanvi@gmail.com', '890001', '9809899099', '19', 'Jahanvi', '12345', 'India', 'maharastra'),
(2, 'Ekta', 'Laxmi Nagar', 'Indor', 'ekta@yahoo.com', '879000', '8155088990', '18', 'Ekta', 'ekta1', 'India', 'madhay Pradesh'),
(3, 'Devanshi', 'Vanjari', 'Rajkot', 'devu@yahoo.com', '789678', '9909889099', '21', 'Devanshi', 'devu1', 'India', 'Gujarat'),
(4, 'Rekha', 'Near Shivram school', 'Ahemdabad', 'rekha@gmail.com', '897000', '9907777099', '50', 'Rekha', '10111', 'India', 'Gujarat'),
(5, 'Rashila', 'Near Shivay Temple', 'Jamnager', 'rashila@yahoo.com', '678900', '9909988809', '45', 'Rashila', '12131', 'India', 'Gujarat'),
(6, 'Mansi', 'Near Jalaram Temple', 'Navsari', 'mansi@gmail.com', '678000', '9909080080', '34', 'Mansi', '14151', 'India', 'Gujarat'),
(7, 'Bhavisha', 'Joshipura', 'Vadodara', 'bhavisha@gmail.com', '670000', '9709787087', '44', 'Bhavisha', '16171', 'India', 'Gujarat'),
(8, 'Mayuri', 'Zanzarda Road', 'Jaipur', 'mayuri@gmail.com', '890760', '9907676099', '34', 'Mayuri', '18191', 'India', 'Rajasthan'),
(9, 'Sweety', 'Gandhi Road', 'Junagadh', 'sweety@yahoo.com', '909090', '8098090890', '31', 'Sweety', '20211', 'India', 'Gujarat'),
(10, 'Meera', 'Shivaji Road', 'Vadodara', 'meera@yahoo.com', '899000', '9806767909', '56', 'Meera', '22231', 'India', 'Gujarat'),
(11, 'Geeta', 'Near Jamnadas School', 'Anand', 'geeta@gmail.com', '894000', '8798778978', '45', 'Geeta', '24251', 'India', 'Gujarat'),
(12, 'Krupa', 'Sardar Baug', 'Valsad', 'krupa@yahoo.com', '679000', '8909999089', '43', 'Krupa', '26271', 'India', 'madhay Pradesh'),
(13, 'Minaxi', 'Near Alpha school', 'Vapi', 'minaxi@gmail.com', '890000', '8809999088', '56', 'Minaxi', '28291', 'India', 'Gujarat'),
(14, 'Varsa', 'Abdul Kalam Road', 'Chikhali', 'varsa@yahoo.com', '879000', '9908989065', '45', 'Varsa', '30311', 'India', 'Gujarat'),
(15, 'Heena', 'Moti Baug', 'Surat', 'heena@yahoo.com', '876543', '8798778978', '56', 'Heena', '32331', 'India', 'Gujarat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
