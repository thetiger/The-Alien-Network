-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 02:40 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thealien_network`
--
CREATE DATABASE IF NOT EXISTS `thealien_network` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thealien_network`;

-- --------------------------------------------------------

--
-- Table structure for table `alien_categories`
--

CREATE TABLE `alien_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alien_categories`
--

INSERT INTO `alien_categories` (`id`, `name`) VALUES
(1, 'Aliens'),
(2, 'Government cover-up'),
(3, 'Paranormal'),
(4, 'Breaking'),
(5, 'Ghosts'),
(6, 'Civil unrest'),
(7, 'Social Issues'),
(8, 'Touchy'),
(9, 'UFO''s'),
(10, 'Project Bluebook'),
(11, 'Earthquakes'),
(12, 'HAARP'),
(13, 'Site Announcements');

-- --------------------------------------------------------

--
-- Table structure for table `alien_comments`
--

CREATE TABLE `alien_comments` (
  `id` int(11) NOT NULL,
  `storyid` varchar(120) NOT NULL,
  `username` varchar(50) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alien_countries`
--

CREATE TABLE `alien_countries` (
  `id` int(5) NOT NULL,
  `countryName` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alien_countries`
--

INSERT INTO `alien_countries` (`id`, `countryName`) VALUES
(1, 'Andorra'),
(2, 'United Arab Emirates'),
(3, 'Afghanistan'),
(4, 'Antigua and Barbuda'),
(5, 'Anguilla'),
(6, 'Albania'),
(7, 'Armenia'),
(8, 'Angola'),
(9, 'Antarctica'),
(10, 'Argentina'),
(11, 'American Samoa'),
(12, 'Austria'),
(13, 'Australia'),
(14, 'Aruba'),
(15, 'Åland'),
(16, 'Azerbaijan'),
(17, 'Bosnia and Herzegovina'),
(18, 'Barbados'),
(19, 'Bangladesh'),
(20, 'Belgium'),
(21, 'Burkina Faso'),
(22, 'Bulgaria'),
(23, 'Bahrain'),
(24, 'Burundi'),
(25, 'Benin'),
(26, 'Saint Barthélemy'),
(27, 'Bermuda'),
(28, 'Brunei'),
(29, 'Bolivia'),
(30, 'Bonaire'),
(31, 'Brazil'),
(32, 'Bahamas'),
(33, 'Bhutan'),
(34, 'Bouvet Island'),
(35, 'Botswana'),
(36, 'Belarus'),
(37, 'Belize'),
(38, 'Canada'),
(39, 'Cocos [Keeling] Islands'),
(40, 'Democratic Republic of the Congo'),
(41, 'Central African Republic'),
(42, 'Republic of the Congo'),
(43, 'Switzerland'),
(44, 'Ivory Coast'),
(45, 'Cook Islands'),
(46, 'Chile'),
(47, 'Cameroon'),
(48, 'China'),
(49, 'Colombia'),
(50, 'Costa Rica'),
(51, 'Cuba'),
(52, 'Cape Verde'),
(53, 'Curacao'),
(54, 'Christmas Island'),
(55, 'Cyprus'),
(56, 'Czech Republic'),
(57, 'Germany'),
(58, 'Djibouti'),
(59, 'Denmark'),
(60, 'Dominica'),
(61, 'Dominican Republic'),
(62, 'Algeria'),
(63, 'Ecuador'),
(64, 'Estonia'),
(65, 'Egypt'),
(66, 'Western Sahara'),
(67, 'Eritrea'),
(68, 'Spain'),
(69, 'Ethiopia'),
(70, 'Finland'),
(71, 'Fiji'),
(72, 'Falkland Islands'),
(73, 'Micronesia'),
(74, 'Faroe Islands'),
(75, 'France'),
(76, 'Gabon'),
(77, 'United Kingdom'),
(78, 'Grenada'),
(79, 'Georgia'),
(80, 'French Guiana'),
(81, 'Guernsey'),
(82, 'Ghana'),
(83, 'Gibraltar'),
(84, 'Greenland'),
(85, 'Gambia'),
(86, 'Guinea'),
(87, 'Guadeloupe'),
(88, 'Equatorial Guinea'),
(89, 'Greece'),
(90, 'South Georgia and the South Sandwich Islands'),
(91, 'Guatemala'),
(92, 'Guam'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Hong Kong'),
(96, 'Heard Island and McDonald Islands'),
(97, 'Honduras'),
(98, 'Croatia'),
(99, 'Haiti'),
(100, 'Hungary'),
(101, 'Indonesia'),
(102, 'Ireland'),
(103, 'Israel'),
(104, 'Isle of Man'),
(105, 'India'),
(106, 'British Indian Ocean Territory'),
(107, 'Iraq'),
(108, 'Iran'),
(109, 'Iceland'),
(110, 'Italy'),
(111, 'Jersey'),
(112, 'Jamaica'),
(113, 'Jordan'),
(114, 'Japan'),
(115, 'Kenya'),
(116, 'Kyrgyzstan'),
(117, 'Cambodia'),
(118, 'Kiribati'),
(119, 'Comoros'),
(120, 'Saint Kitts and Nevis'),
(121, 'North Korea'),
(122, 'South Korea'),
(123, 'Kuwait'),
(124, 'Cayman Islands'),
(125, 'Kazakhstan'),
(126, 'Laos'),
(127, 'Lebanon'),
(128, 'Saint Lucia'),
(129, 'Liechtenstein'),
(130, 'Sri Lanka'),
(131, 'Liberia'),
(132, 'Lesotho'),
(133, 'Lithuania'),
(134, 'Luxembourg'),
(135, 'Latvia'),
(136, 'Libya'),
(137, 'Morocco'),
(138, 'Monaco'),
(139, 'Moldova'),
(140, 'Montenegro'),
(141, 'Saint Martin'),
(142, 'Madagascar'),
(143, 'Marshall Islands'),
(144, 'Macedonia'),
(145, 'Mali'),
(146, 'Myanmar [Burma]'),
(147, 'Mongolia'),
(148, 'Macao'),
(149, 'Northern Mariana Islands'),
(150, 'Martinique'),
(151, 'Mauritania'),
(152, 'Montserrat'),
(153, 'Malta'),
(154, 'Mauritius'),
(155, 'Maldives'),
(156, 'Malawi'),
(157, 'Mexico'),
(158, 'Malaysia'),
(159, 'Mozambique'),
(160, 'Namibia'),
(161, 'New Caledonia'),
(162, 'Niger'),
(163, 'Norfolk Island'),
(164, 'Nigeria'),
(165, 'Nicaragua'),
(166, 'Netherlands'),
(167, 'Norway'),
(168, 'Nepal'),
(169, 'Nauru'),
(170, 'Niue'),
(171, 'New Zealand'),
(172, 'Oman'),
(173, 'Panama'),
(174, 'Peru'),
(175, 'French Polynesia'),
(176, 'Papua New Guinea'),
(177, 'Philippines'),
(178, 'Pakistan'),
(179, 'Poland'),
(180, 'Saint Pierre and Miquelon'),
(181, 'Pitcairn Islands'),
(182, 'Puerto Rico'),
(183, 'Palestine'),
(184, 'Portugal'),
(185, 'Palau'),
(186, 'Paraguay'),
(187, 'Qatar'),
(188, 'Réunion'),
(189, 'Romania'),
(190, 'Serbia'),
(191, 'Russia'),
(192, 'Rwanda'),
(193, 'Saudi Arabia'),
(194, 'Solomon Islands'),
(195, 'Seychelles'),
(196, 'Sudan'),
(197, 'Sweden'),
(198, 'Singapore'),
(199, 'Saint Helena'),
(200, 'Slovenia'),
(201, 'Svalbard and Jan Mayen'),
(202, 'Slovakia'),
(203, 'Sierra Leone'),
(204, 'San Marino'),
(205, 'Senegal'),
(206, 'Somalia'),
(207, 'Suriname'),
(208, 'South Sudan'),
(209, 'São Tomé and Príncipe'),
(210, 'El Salvador'),
(211, 'Sint Maarten'),
(212, 'Syria'),
(213, 'Swaziland'),
(214, 'Turks and Caicos Islands'),
(215, 'Chad'),
(216, 'French Southern Territories'),
(217, 'Togo'),
(218, 'Thailand'),
(219, 'Tajikistan'),
(220, 'Tokelau'),
(221, 'East Timor'),
(222, 'Turkmenistan'),
(223, 'Tunisia'),
(224, 'Tonga'),
(225, 'Turkey'),
(226, 'Trinidad and Tobago'),
(227, 'Tuvalu'),
(228, 'Taiwan'),
(229, 'Tanzania'),
(230, 'Ukraine'),
(231, 'Uganda'),
(232, 'U.S. Minor Outlying Islands'),
(233, 'United States'),
(234, 'Uruguay'),
(235, 'Uzbekistan'),
(236, 'Vatican City'),
(237, 'Saint Vincent and the Grenadines'),
(238, 'Venezuela'),
(239, 'British Virgin Islands'),
(240, 'U.S. Virgin Islands'),
(241, 'Vietnam'),
(242, 'Vanuatu'),
(243, 'Wallis and Futuna'),
(244, 'Samoa'),
(245, 'Kosovo'),
(246, 'Yemen'),
(247, 'Mayotte'),
(248, 'South Africa'),
(249, 'Zambia'),
(250, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `alien_credentials`
--

CREATE TABLE `alien_credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `ip` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alien_credentials`
--

INSERT INTO `alien_credentials` (`id`, `username`, `ip`) VALUES
(1, 'sastiger', '92.232.196.211'),
(2, 'sastiger', '161.112.232.102');

-- --------------------------------------------------------

--
-- Table structure for table `alien_disallow`
--

CREATE TABLE `alien_disallow` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alien_disallow`
--

INSERT INTO `alien_disallow` (`id`, `username`) VALUES
(1, 'admin'),
(2, 'administrator'),
(3, 'moderator'),
(6, 'TheTiger');

-- --------------------------------------------------------

--
-- Table structure for table `alien_events`
--

CREATE TABLE `alien_events` (
  `id` int(11) NOT NULL,
  `eventname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alien_events`
--

INSERT INTO `alien_events` (`id`, `eventname`, `username`, `time`) VALUES
(3, 'Created a topic', 'sastiger', '1430760710'),
(4, 'Logged-out', 'sastiger', '1430760719'),
(5, 'Logged-in', 'sastiger', '1430762400'),
(6, 'Logged-out', 'sastiger', '1430763014'),
(7, 'Logged-in', 'sastiger', '1431117865'),
(8, 'Posted a reply', 'sastiger', '1431117949'),
(9, 'Logged-out', 'sastiger', '1431118110'),
(10, 'Logged-in', 'sastiger', '1432893954'),
(11, 'Posted a reply', 'sastiger', '1432894065'),
(12, 'Logged-out', 'sastiger', '1432894085'),
(13, 'Logged-in', 'sastiger', '1433092283'),
(14, 'Posted a reply', 'sastiger', '1433092345'),
(15, 'Logged-out', 'sastiger', '1433092452'),
(16, 'Logged-in', 'sastiger', '1433334659'),
(17, 'Posted a reply', 'sastiger', '1433334668'),
(18, 'Logged-out', 'sastiger', '1433334674'),
(19, 'Logged-in', 'sastiger', '1433640893'),
(20, 'Logged-out', 'sastiger', '1433640927'),
(21, 'Logged-in', 'sastiger', '1433688371'),
(22, 'Logged-out', 'sastiger', '1433688581'),
(23, 'Logged-in', 'sastiger', '1434438530'),
(24, 'Logged-in', 'sastiger', '1434439053'),
(25, 'Posted a reply', 'sastiger', '1434439288'),
(26, 'Posted a reply', 'sastiger', '1434439321'),
(27, 'Logged-in', 'sastiger', '1435049450'),
(28, 'Logged-out', 'sastiger', '1435049452'),
(29, 'Logged-in', 'sastiger', '1436133070'),
(30, 'Created a topic', 'sastiger', '1436133410'),
(31, 'Logged-out', 'sastiger', '1436133721'),
(32, 'Logged-in', 'sastiger', '1436683043'),
(33, 'Logged-out', 'sastiger', '1436686966'),
(34, 'Logged-in', 'sastiger', '1437136032'),
(35, 'Logged-out', 'sastiger', '1437136039'),
(36, 'Logged-in', 'sastiger', '1437606257'),
(37, 'Logged-in', 'sastiger', '1437606515'),
(38, 'Logged-out', 'sastiger', '1437606656'),
(39, 'Logged-in', 'sastiger', '1437606765'),
(40, 'Logged-in', 'sastiger', '1437643544'),
(41, 'Logged-in', 'sastiger', '1437648455'),
(42, 'Logged-in', 'sastiger', '1437675853'),
(43, 'Logged-out', 'sastiger', '1437675878'),
(44, 'Logged-in', 'sastiger', '1437922112'),
(45, 'Logged-out', 'sastiger', '1437922121'),
(46, 'Logged-in', 'sastiger', '1438651711'),
(47, 'Logged-in', 'sastiger', '1438810804'),
(48, 'Logged-in', 'sastiger', '1439181904'),
(49, 'Logged-in', 'sastiger', '1439376118'),
(50, 'Logged-out', 'sastiger', '1439381053'),
(51, 'Logged-in', 'sastiger', '1439381062'),
(52, 'Logged-out', 'sastiger', '1439381648'),
(53, 'Logged-in', 'sastiger', '1439381663'),
(54, 'Logged-out', 'sastiger', '1439381991'),
(55, 'Logged-in', 'sastiger', '1439381997'),
(56, 'Logged-out', 'sastiger', '1439382033'),
(57, 'Logged-in', 'sastiger', '1439465046'),
(58, 'Logged-out', 'sastiger', '1439465147'),
(59, 'Logged-in', 'sastiger', '1439465149'),
(60, 'Logged-out', 'sastiger', '1439465575'),
(61, 'Logged-in', 'sastiger', '1439510294'),
(62, 'Logged-out', 'sastiger', '1439510343'),
(63, 'Logged-in', 'sastiger', '1439602007'),
(64, 'Logged-out', 'sastiger', '1439602043'),
(65, 'Logged-in', 'sastiger', '1439602054'),
(66, 'Logged-in', 'sastiger', '1439602768'),
(67, 'Logged-in', 'sastiger', '1439602856'),
(68, 'Created a topic', 'sastiger', '1439603082'),
(69, 'Logged-in', 'sastiger', '1439739954'),
(70, 'Logged-out', 'sastiger', '1439739975'),
(71, 'Logged-in', 'sastiger', '1439747751'),
(72, 'Logged-out', 'sastiger', '1439747844'),
(73, 'Logged-in', 'sastiger', '1439747847'),
(74, 'Posted a reply', 'sastiger', '1439747911'),
(75, 'Logged-out', 'sastiger', '1439748106'),
(76, 'Logged-in', 'sastiger', '1440455707'),
(77, 'Logged-out', 'sastiger', '1440455724'),
(78, 'Logged-in', 'sastiger', '1440949709'),
(79, 'Logged-out', 'sastiger', '1440961473'),
(80, 'Logged-in', 'sastiger', '1442167481'),
(81, 'Logged-out', 'sastiger', '1442167576'),
(82, 'Logged-in', 'sastiger', '1442170087'),
(83, 'Logged-out', 'sastiger', '1442170391'),
(84, 'Logged-in', 'sastiger', '1442170395'),
(85, 'Logged-out', 'sastiger', '1442171402'),
(86, 'Logged-in', 'sastiger', '1442171732'),
(87, 'Logged-out', 'sastiger', '1442172104'),
(88, 'Logged-in', 'sastiger', '1442185251'),
(89, 'Logged-out', 'sastiger', '1442185293'),
(90, 'Logged-in', 'sastiger', '1442293582'),
(91, 'Logged-out', 'sastiger', '1442293778'),
(92, 'Logged-in', 'sastiger', '1442293781'),
(93, 'Logged-out', 'sastiger', '1442293795'),
(94, 'Logged-in', 'sastiger', '1442293862'),
(95, 'Logged-out', 'sastiger', '1442293996'),
(96, 'Logged-in', 'sastiger', '1442323470'),
(97, 'Logged-out', 'sastiger', '1442323485'),
(98, 'Logged-in', 'sastiger', '1442373077'),
(99, 'Logged-out', 'sastiger', '1442373146'),
(100, 'Logged-in', 'sastiger', '1442512045'),
(101, 'Created a topic', 'sastiger', '1442513032'),
(102, 'Logged-out', 'sastiger', '1442513223'),
(103, 'Logged-in', 'sastiger', '1442753514'),
(104, 'Logged-out', 'sastiger', '1442753538'),
(105, 'Logged-in', 'sastiger', '1442762262'),
(106, 'Posted a reply', 'sastiger', '1442763211'),
(107, 'Logged-out', 'sastiger', '1442763227'),
(108, 'Logged-in', 'sastiger', '1442772367'),
(109, 'Created a topic', 'sastiger', '1442772395'),
(110, 'Logged-out', 'sastiger', '1442777671'),
(111, 'Logged-in', 'kiskit', '1442888500'),
(112, 'Logged-in', 'sastiger', '1442888531'),
(113, 'Created a topic', 'sastiger', '1442888649'),
(114, 'Logged-in', 'kiskit', '1442889308'),
(115, 'Logged-out', 'sastiger', '1442893552'),
(116, 'Logged-in', 'sastiger', '1442893557'),
(117, 'Logged-out', 'sastiger', '1442893582'),
(118, 'Logged-in', 'sastiger', '1442901537'),
(119, 'Posted a reply', 'sastiger', '1442901600'),
(120, 'Logged-out', 'sastiger', '1442901874'),
(121, 'Logged-in', 'sastiger', '1442902025'),
(122, 'Logged-in', 'sastiger', '1442976269'),
(123, 'Logged-in', 'sastiger', '1443021555'),
(124, 'Logged-out', 'sastiger', '1443021586'),
(125, 'Logged-in', 'sastiger', '1443021714'),
(126, 'Logged-in', 'sastiger', '1443021800'),
(127, 'Logged-out', 'sastiger', '1443021865'),
(128, 'Logged-in', 'sastiger', '1443021892'),
(129, 'Logged-in', 'sastiger', '1443021909'),
(130, 'Logged-out', 'sastiger', '1443021934'),
(131, 'Logged-in', 'sastiger', '1443021946'),
(132, 'Logged-out', 'sastiger', '1443021954'),
(133, 'Logged-out', 'sastiger', '1443021957'),
(134, 'Logged-in', 'sastiger', '1443022574'),
(135, 'Logged-out', 'sastiger', '1443022594'),
(136, 'Logged-in', 'sastiger', '1443028973'),
(137, 'Logged-out', 'sastiger', '1443029034'),
(138, 'Logged-in', 'sastiger', '1443037470'),
(139, 'Posted a reply', 'sastiger', '1443037997'),
(140, 'Logged-out', 'sastiger', '1443038147'),
(141, 'Logged-in', 'sastiger', '1443039689'),
(142, 'Logged-in', 'sastiger', '1443063186'),
(143, 'Posted a reply', 'sastiger', '1443065006'),
(144, 'Logged-out', 'sastiger', '1443068686'),
(145, 'Logged-in', 'sastiger', '1443095992'),
(146, 'Logged-out', 'sastiger', '1443096116'),
(147, 'Logged-in', 'sastiger', '1443096500'),
(148, 'Logged-out', 'sastiger', '1443096520'),
(149, 'Logged-in', 'sastiger', '1443148795'),
(150, 'Posted a reply', 'sastiger', '1443148965'),
(151, 'Logged-in', 'sastiger', '1443249916'),
(152, 'Posted a reply', 'sastiger', '1443250041'),
(153, 'Logged-out', 'sastiger', '1443250089'),
(154, 'Logged-in', 'sastiger', '1443254193'),
(155, 'Logged-in', 'sastiger', '1443547475'),
(156, 'Created a topic', 'sastiger', '1443547637'),
(157, 'Logged-out', 'sastiger', '1443556226'),
(158, 'Logged-in', 'sastiger', '1443556744'),
(159, 'Logged-out', 'sastiger', '1443556939'),
(160, 'Logged-in', 'sastiger', '1443556950'),
(161, 'Logged-out', 'sastiger', '1443558145'),
(162, 'Logged-in', 'sastiger', '1443558467'),
(163, 'Logged-in', 'sastiger', '1443558467'),
(164, 'Logged-in', 'sastiger', '1443558467'),
(165, 'Created a topic', 'sastiger', '1443558485'),
(166, 'Logged-out', 'sastiger', '1443558750'),
(167, 'Logged-in', 'sastiger', '1443559865'),
(168, 'Logged-out', 'sastiger', '1443559895'),
(169, 'Logged-in', 'sastiger', '1443603030'),
(170, 'Logged-out', 'sastiger', '1443603255'),
(171, 'Logged-in', 'sastiger', '1443644579'),
(172, 'Logged-out', 'sastiger', '1443644612'),
(173, 'Logged-in', 'sastiger', '1443719292'),
(174, 'Created a topic', 'sastiger', '1443720061'),
(175, 'Logged-out', 'sastiger', '1443720376'),
(176, 'Logged-in', 'Jonm', '1444216681'),
(177, 'Logged-out', 'Jonm', '1444217875'),
(178, 'Logged-in', 'sastiger', '1444545919'),
(179, 'Logged-out', 'sastiger', '1444549853'),
(180, 'Logged-in', 'sastiger', '1444909573'),
(181, 'Logged-out', 'sastiger', '1444911278'),
(182, 'Logged-in', 'sastiger', '1444973838'),
(183, 'Logged-out', 'sastiger', '1444974125'),
(184, 'Logged-in', 'hiphip7855', '1444974492'),
(185, 'Logged-in', 'hiphip7855', '1444974493'),
(186, 'Logged-in', 'sastiger', '1445261765'),
(187, 'Logged-out', 'sastiger', '1445261991'),
(188, 'Logged-in', 'sastiger', '1447047288'),
(189, 'Logged-out', 'sastiger', '1447048333'),
(190, 'Logged-in', 'sastiger', '1447048341'),
(191, 'Logged-out', 'sastiger', '1447052791'),
(192, 'Logged-in', 'Jonm', '1447143302'),
(193, 'Logged-out', 'Jonm', '1447143326'),
(194, 'Logged-in', 'Jonm', '1447143358'),
(195, 'Logged-in', 'sastiger', '1447143427'),
(196, 'Logged-out', 'Jonm', '1447143439'),
(197, 'Created a topic', 'sastiger', '1447143618'),
(198, 'Logged-out', 'sastiger', '1447143873'),
(199, 'Logged-in', 'sastiger', '1447639734'),
(200, 'Logged-out', 'sastiger', '1447647234'),
(201, 'Logged-in', 'sastiger', '1447739689'),
(202, 'Logged-out', 'sastiger', '1447739742'),
(203, 'Logged-in', 'sastiger', '1448110727'),
(204, 'Created a topic', 'sastiger', '1448110826'),
(205, 'Logged-in', 'sastiger', '1448446856'),
(206, 'Created a topic', 'sastiger', '1448446938'),
(207, 'Logged-out', 'sastiger', '1448449543'),
(208, 'Logged-in', 'Sastiger', '1448886311'),
(209, 'Logged-in', 'sastiger', '1449058853'),
(210, 'Logged-out', 'sastiger', '1449060307'),
(211, 'Logged-in', 'sastiger', '1451853260'),
(212, 'Logged-out', 'sastiger', '1451855585'),
(213, 'Logged-in', 'sastiger', '1452053355'),
(214, 'Logged-in', 'Sastiger', '1452233934'),
(215, 'Logged-out', 'sastiger', '1452233984'),
(216, 'Logged-in', 'Sastiger', '1452234158'),
(217, 'Logged-out', 'sastiger', '1452237382'),
(218, 'Logged-in', 'sastiger', '1452299866'),
(219, 'Logged-out', 'sastiger', '1452300033'),
(220, 'Logged-in', 'sastiger', '1452300203'),
(221, 'Logged-in', 'sastiger', '1452302908'),
(222, 'Logged-in', 'Sastiger', '1452321312'),
(223, 'Logged-out', 'sastiger', '1452321443'),
(224, 'Logged-in', 'sastiger', '1452407017'),
(225, 'Created a topic', 'sastiger', '1452408696'),
(226, 'Logged-out', 'sastiger', '1452408741'),
(227, 'Logged-in', 'sastiger', '1452417146'),
(228, 'Logged-out', 'sastiger', '1452417349'),
(229, 'Logged-in', 'Sastiger', '1452426223'),
(230, 'Logged-out', 'sastiger', '1452426300'),
(231, 'Logged-in', 'sastiger', '1452677144'),
(232, 'Created a topic', 'sastiger', '1452677535'),
(233, 'Logged-in', 'sastiger', '1452847577'),
(234, 'Logged-out', 'sastiger', '1452856208'),
(235, 'Logged-in', 'Sastiger', '1453054451'),
(236, 'Logged-out', 'sastiger', '1453054472'),
(237, 'Logged-in', 'sastiger', '1454554110'),
(238, 'Created a topic', 'sastiger', '1454554338'),
(239, 'Logged-in', 'sastiger', '1454652328'),
(240, 'Logged-in', 'sastiger', '1454665447'),
(241, 'Logged-out', 'sastiger', '1454665472'),
(242, 'Logged-in', 'sastiger', '1454912229'),
(243, 'Logged-out', 'sastiger', '1454915446'),
(244, 'Logged-in', 'sastiger', '1454924035'),
(245, 'Logged-out', 'sastiger', '1454924463'),
(246, 'Logged-in', 'sastiger', '1454924559'),
(247, 'Logged-out', 'sastiger', '1454925247'),
(248, 'Logged-in', 'sastiger', '1454925260'),
(249, 'Created a topic', 'sastiger', '1454925517'),
(250, 'Logged-out', 'sastiger', '1454926629'),
(251, 'Logged-in', 'sastiger', '1454930422'),
(252, 'Logged-out', 'sastiger', '1454930537'),
(253, 'Logged-in', 'sastiger', '1454930546'),
(254, 'Posted a reply', 'sastiger', '1454930639'),
(255, 'Logged-in', 'sastiger', '1455173961'),
(256, 'Logged-out', 'sastiger', '1455175026'),
(257, 'Logged-in', 'sastiger', '1455199953'),
(258, 'Logged-out', 'sastiger', '1455200421'),
(259, 'Logged-in', 'sastiger', '1455741543'),
(260, 'Created a topic', 'sastiger', '1455741652'),
(261, 'Logged-out', 'sastiger', '1455742358'),
(262, 'Logged-in', 'sastiger', '1455803057'),
(263, 'Logged-in', 'sastiger', '1456622235'),
(264, 'Logged-out', 'sastiger', '1456625665'),
(265, 'Logged-in', 'sastiger', '1456625719'),
(266, 'Created a topic', 'sastiger', '1456626064'),
(267, 'Logged-in', 'sastiger', '1457117075'),
(268, 'Logged-out', 'sastiger', '1457118920'),
(269, 'Logged-in', 'sastiger', '1457118949'),
(270, 'Logged-out', 'sastiger', '1457119178'),
(271, 'Logged-in', 'sastiger', '1457284369'),
(272, 'Logged-in', 'sastiger', '1457506724'),
(273, 'Logged-out', 'sastiger', '1457508872'),
(274, 'Logged-in', 'thetiger100', '1457509250'),
(275, 'Logged-out', 'thetiger100', '1457509356'),
(276, 'Logged-in', 'sastiger', '1457509363'),
(277, 'Logged-out', 'sastiger', '1457510133'),
(278, 'Logged-in', 'sastiger', '1457771983'),
(279, 'Logged-out', 'sastiger', '1457772130'),
(280, 'Logged-in', 'sastiger', '1461577535'),
(281, 'Posted a reply', 'sastiger', '1461577592'),
(282, 'Logged-out', 'sastiger', '1461577602'),
(283, 'Logged-in', 'sastiger', '1462430604'),
(284, 'Created a topic', 'sastiger', '1462430963'),
(285, 'Logged-in', 'sastiger', '1462603185'),
(286, 'Created a topic', 'sastiger', '1462603320'),
(287, 'Logged-in', 'sastiger', '1464431362'),
(288, 'Logged-out', 'sastiger', '1464433055'),
(289, 'Logged-in', 'sastiger', '1464437182'),
(290, 'Created a topic', 'sastiger', '1464437316'),
(291, 'Logged-out', 'sastiger', '1464437329'),
(292, 'Logged-in', 'sastiger', '1464437820'),
(293, 'Logged-in', 'jonathonm', '1465487947'),
(294, 'Logged-in', 'jonathonm', '1465487985'),
(295, 'Logged-out', 'jonathonm', '1465490306'),
(296, 'Logged-in', 'jonathonm', '1465490677'),
(297, 'Logged-out', 'jonathonm', '1465494551');

-- --------------------------------------------------------

--
-- Table structure for table `alien_likes`
--

CREATE TABLE `alien_likes` (
  `id` int(11) NOT NULL,
  `topicid` varchar(40) NOT NULL,
  `user` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alien_messages`
--

CREATE TABLE `alien_messages` (
  `id` int(11) NOT NULL,
  `userfrom` varchar(120) NOT NULL,
  `userto` varchar(120) NOT NULL,
  `subject` varchar(120) NOT NULL,
  `message` varchar(120) NOT NULL,
  `date` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alien_pcomments`
--

CREATE TABLE `alien_pcomments` (
  `id` int(11) NOT NULL,
  `userfrom` varchar(200) NOT NULL,
  `userto` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alien_profiles`
--

CREATE TABLE `alien_profiles` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(100) NOT NULL COMMENT 'User uniqueid',
  `sex` varchar(20) NOT NULL COMMENT 'sex of user',
  `fname` varchar(50) NOT NULL COMMENT 'user firstname',
  `lname` varchar(50) NOT NULL COMMENT 'user lastname',
  `age` varchar(4) NOT NULL COMMENT 'user age',
  `country` varchar(40) NOT NULL COMMENT 'user country',
  `skype` varchar(20) NOT NULL DEFAULT '0' COMMENT 'user skype',
  `hotmail` varchar(40) NOT NULL DEFAULT '0' COMMENT 'user hotmail',
  `twitter` varchar(30) NOT NULL DEFAULT '0' COMMENT 'user twitter',
  `about` varchar(120) NOT NULL DEFAULT '0',
  `yvideo` varchar(20) NOT NULL DEFAULT '0',
  `avatar` varchar(30) NOT NULL DEFAULT '0' COMMENT 'user avatar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alien_settings`
--

CREATE TABLE `alien_settings` (
  `id` int(11) NOT NULL,
  `sitename` varchar(100) NOT NULL COMMENT 'Name of site',
  `metadesc` varchar(250) NOT NULL COMMENT 'Metadesc of site',
  `metakeywords` varchar(200) NOT NULL COMMENT 'Metakeywords of site',
  `status` varchar(2) NOT NULL COMMENT '1 = site online, 0 - offline',
  `registration` varchar(4) NOT NULL COMMENT 'Are registrations open?',
  `beta` varchar(10) NOT NULL COMMENT 'is site in beta 1=yes, 0=no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alien_settings`
--

INSERT INTO `alien_settings` (`id`, `sitename`, `metadesc`, `metakeywords`, `status`, `registration`, `beta`) VALUES
(1, 'The Alien Network - ', 'Welcome to The Alien Network, a conspiracy theory website, we have different topics and encourage active communication! Come and get involved, or stay on the side-lines, We invite you.', 'the alien network, aliens,ufos,paranormal,bluebook,illuminati,news 24,live,top,hot', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `alien_stories`
--

CREATE TABLE `alien_stories` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(120) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `title` varchar(120) NOT NULL,
  `post` varchar(2000) NOT NULL,
  `cat` varchar(40) NOT NULL,
  `date` varchar(200) NOT NULL,
  `likes` varchar(120) NOT NULL,
  `comment` varchar(120) NOT NULL,
  `video` varchar(2) NOT NULL,
  `videoid` varchar(25) NOT NULL,
  `flag` varchar(2) NOT NULL,
  `pinned` varchar(2) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alien_stories`
--

INSERT INTO `alien_stories` (`id`, `uniqueid`, `owner`, `title`, `post`, `cat`, `date`, `likes`, `comment`, `video`, `videoid`, `flag`, `pinned`, `status`) VALUES
(10, 'c43d4d8648bea5295ca87d221805577e', 'sastiger', 'Update: 12-04-2015', '<h1>The Alien Network...How far are we now?</h1>\r\n<p>With just over two weeks to launch, I have been very busy, there are still a lot of things to integrate. Listed below are all the objectives I need to complete within this time frame to ensure the site is as secure as possible.</p>\r\n<ol>\r\n<li>Enable a ''top'' page, this will allow for all topics on the site to be viewed.</li>\r\n<li>Create a function for user password recovery.</li>\r\n<li>Add likes button for page stories, this will get developed after 2 weeks of `The Alien Network` going live.</li>\r\n<li>Add HTML entities to user input</li>\r\n<li>Add captcha for user registration, possibly integrate an additional php script for verification. RE-CAPTCHA could be a possible.</li>\r\n<li>Add categories to stories within the story.php page.</li>\r\n<li>Add homepage videos to frontpage to database</li>\r\n</ol>\r\n<p>This website has been a big under-taking, I have done a lot of work to get this site to go live.</p>', 'Breaking', '1429852828', '2', '2', '1', '3O1_3zBUKM8', '1', '1', ''),
(11, '0ce397acca6aa080d7ca8647b1c77b49', 'sastiger', 'Quick update 01/05/2015', '<p>I am currently in the processing of rolling out updates to this website, This will include Pagination as well as a limit on how quickly you can re-post another topic as well as ensuring that the pages load quickly and user activation works correctly.</p>\r\n<p>As at the moment, login is currently disabled for the entire website but in the meantime why not listen to some jazzy tune over there &gt;</p>\r\n<p>&nbsp;</p>\r\n<p>The Alien Network Staff</p>', 'Breaking', '1430448673', '2', '2', '1', 'eHuebHTD-lY', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `alien_users`
--

CREATE TABLE `alien_users` (
  `id` int(11) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `avatar` varchar(30) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(250) NOT NULL,
  `salt` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `status` varchar(4) NOT NULL,
  `activationhash` varchar(50) NOT NULL,
  `lastlogin` varchar(20) NOT NULL,
  `loginip` varchar(15) NOT NULL,
  `hash` varchar(40) NOT NULL,
  `privelege` varchar(4) NOT NULL,
  `avatarcheck` varchar(5) NOT NULL DEFAULT '0',
  `changecode` varchar(200) NOT NULL,
  `lastactivity` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table for users';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alien_categories`
--
ALTER TABLE `alien_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_comments`
--
ALTER TABLE `alien_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_countries`
--
ALTER TABLE `alien_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_credentials`
--
ALTER TABLE `alien_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_disallow`
--
ALTER TABLE `alien_disallow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_events`
--
ALTER TABLE `alien_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_likes`
--
ALTER TABLE `alien_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_messages`
--
ALTER TABLE `alien_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_pcomments`
--
ALTER TABLE `alien_pcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_profiles`
--
ALTER TABLE `alien_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_settings`
--
ALTER TABLE `alien_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_stories`
--
ALTER TABLE `alien_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alien_users`
--
ALTER TABLE `alien_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alien_categories`
--
ALTER TABLE `alien_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `alien_comments`
--
ALTER TABLE `alien_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `alien_countries`
--
ALTER TABLE `alien_countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `alien_disallow`
--
ALTER TABLE `alien_disallow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `alien_events`
--
ALTER TABLE `alien_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `alien_likes`
--
ALTER TABLE `alien_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `alien_messages`
--
ALTER TABLE `alien_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alien_pcomments`
--
ALTER TABLE `alien_pcomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `alien_profiles`
--
ALTER TABLE `alien_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `alien_settings`
--
ALTER TABLE `alien_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alien_stories`
--
ALTER TABLE `alien_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `alien_users`
--
ALTER TABLE `alien_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
