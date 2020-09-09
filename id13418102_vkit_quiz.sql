-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2020 at 08:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13418102_vkit_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('vkit', 'cse1234');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL,
  `timer` varchar(50) NOT NULL DEFAULT '03:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`, `timer`) VALUES
(1, 'What is the official name of the disease causing the novel coronavirus 2019 outbreak announced by World Health Organization on 11 February 2020?', 'COVIID-19', 'COVID-19', 'ConV-20', 'CORVID-19', 'COVID-19', NULL, '1:00'),
(2, 'Where the first case of novel coronavirus was identified?', 'Beijing', 'Shanghai', 'Wuhan, Hubei   ', 'Tianjin', 'Wuhan, Hubei   ', NULL, '03:00'),
(3, 'The diseases related to coronavirus are following?', 'MERS', 'SARS', 'Both A and B        ', 'Neither A nor B', 'Both A and B        ', NULL, '03:00'),
(4, 'Corona virus got its name?', 'Due to its crown-like projections         ', 'Due to its leaf-like projections', 'Due to its surface structure of bricks', 'None of the above', 'Due to its crown-like projections         ', NULL, '03:00'),
(5, 'IF someone uses tissue to sneeze, what should he/she do now?', 'Immediately dispose it off in a covered bin                ', 'Keep it in pocket & reuse it, as it will save tress', 'Throw it anywhere', 'Keep it with you and dispose it at your home', 'Immediately dispose it off in a covered bin                ', NULL, '03:00'),
(6, 'What is COVID-19 Pandemic?', 'A bio-chemical conflict', 'Pandemic declared by the WHO which is a virus generated disease           ', 'I don’t know', 'Germs in the air, water and soil', 'Pandemic declared by the WHO which is a virus generated disease           ', NULL, '03:00'),
(7, 'Best way our COVID-19 is', 'IT is a Pandemic, follow authentic instructions but don’t panic              ', 'Panic situation', 'Follow Social Media', 'Talk to your colleague or friend who may not be the expert on this', 'IT is a Pandemic, follow authentic instructions but don’t panic              ', NULL, '03:00'),
(8, 'Which medicine should you take for COVID-19?', 'Homeopathic', 'Allopathic', 'Isolation', 'There is no medicine currently, consult a qualified doctor if you need.    ', 'There is no medicine currently, consult a qualified doctor if you need.    ', NULL, '03:00'),
(9, 'COVID-19 can infect', 'Females more than Males', 'People of any age, while people with pre-existing medical history & older people and are more susceptible', 'Children below 6 years only', 'Old people having age more than 60 years', 'People of any age, while people with pre-existing medical history & older people and are more susceptible', NULL, '03:00'),
(10, 'A good practice about food is', 'Eat dairy products', 'Eat only vegetarian products', 'Eat completely cooked and washed food-vegetarian or non-vegetarian            ', 'Eat anything', 'Eat completely cooked and washed food-vegetarian or non-vegetarian            ', NULL, '03:00'),
(11, 'The habits needs to be adopted in order to tackle this Pandemic are', 'Good personal hygiene', 'Social Distancing', 'Cover your mouth while coughing & sneezing', 'All of the above', 'All of the above', NULL, '03:00'),
(12, 'What shall you do, if you feel sick these days?', 'It is shameful, you will keep this secret', 'Immediately get yourself tested for COVID-19 infection', 'Continue working normally', 'Consult a doctor & share recent medical, travel and visit to any suspected COVID-19 patient history                      ', 'Consult a doctor & share recent medical, travel and visit to any suspected COVID-19 patient history                      ', NULL, '03:00'),
(13, 'An effective way to clean hands is', 'Wash with Cold water', 'Wash with Hot water', 'Follow a minimum 20 seconds wash cycle with soap, water or alcohol based hand sanitizer', 'Alcohol based hand sanitizer is mandatory', 'Follow a minimum 20 seconds wash cycle with soap, water or alcohol based hand sanitizer', NULL, '03:00'),
(14, 'Best source to get information about COVID-19 is', 'Authentic sources-WHO, Local or National health authorities and official websites         ', 'Google', 'Family or Friend Groups', 'All of the above', 'Authentic sources-WHO, Local or National health authorities and official websites         ', NULL, '03:00'),
(15, 'It is mandatory to wash hands', 'After coughing and sneezing', 'After touching unhygienic surface', 'Before & after cooking and eating meals', 'All of the above', 'All of the above', NULL, '03:00'),
(16, 'What shall you do, if an employee in your organization has been declared positively infected by  COVID-19?', 'Will help him/her                     ', 'Will leave that organization', 'Will follow official instructions', 'None of the above', 'Will help him/her                     ', NULL, '03:00'),
(17, 'What are various symptoms to a person suffering from COVID-19?', 'Body Pains', 'Will be clear after complete body checkup', 'A combination of cold, fever, body ache, coughs, breathing trouble etc.,', 'None of the above', 'A combination of cold, fever, body ache, coughs, breathing trouble etc.,', NULL, '03:00'),
(18, 'What shall you do, if a family member is confirmed with COVID-19 infection?', 'Will get assistance from internet', 'Will continue my office work', 'Will stay with the patient, taking care of him/ her -at home/ hospital as advised, minimum contact, all instructions followed including good hygiene practices              ', 'Will inform family & friends to seek their help', 'Will stay with the patient, taking care of him/ her -at home/ hospital as advised, minimum contact, all instructions followed including good hygiene practices              ', NULL, '03:00'),
(19, 'Who needs to wear a mask?', 'A sick person', 'People taking care of sick person', 'Contacts of healthcare workers', 'All of the above', 'All of the above', NULL, '03:00'),
(20, 'WHO stands for?', 'Wealth Health Organization', 'Woman Health Organization', 'World Health Organization    ', 'World Help Organization', 'World Health Organization    ', NULL, '03:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(200) NOT NULL,
  `mob_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `mob_no`) VALUES
('Dr. Vidya A', '9986011084');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
