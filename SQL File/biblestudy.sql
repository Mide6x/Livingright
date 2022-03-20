

CREATE DATABASE LoginSystem;

--
-- Table structure for table `admin`
--
CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);
--
-- Dumping data for table `admin`
--
--
-- Table structure for table `users`
--
CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);
--
-- Dumping data for table `users`
--

CREATE TABLE `wordfortheday` (
  `topic` varchar(500) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `sermon` varchar(2000) DEFAULT NULL,
  `prayer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `bibleverses` (
  `firstverse` varchar(500) DEFAULT NULL,
  `secondverse` varchar(500) DEFAULT NULL,
  `thirdverse` varchar(500) DEFAULT NULL,
  `fourthverse` varchar(500) DEFAULT NULL,
  `fifthverse` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `tdlist` (
  `list` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



