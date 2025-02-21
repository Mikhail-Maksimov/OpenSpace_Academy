-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 06:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses2`
--

CREATE TABLE `courses2` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `text` varchar(20000) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses2`
--

INSERT INTO `courses2` (`id`, `title`, `text`, `picture`) VALUES
(1, 'edit Visibility for Safety in Multi-use Spaces', 'Visibility plays a crucial role in creating safe spaces. This course explores how simple layout interventions can significantly enhance the perception of safety for space users. Participants will learn foundational principles and practical strategies to design environments that promote visibility and security, ensuring users feel more comfortable and protected. Ideal for designers seeking to integrate safety into their spatial design projects.', './/img/img1.png'),
(2, 'Lighting for Safety in Multi-Use Spaces', 'Research shows that lighting profoundly affects how people feel in a space. This quick course covers four key principles of lighting design, helping you understand how to create environments that enhance mood and functionality. Whether for residential, commercial, or public spaces, you will learn essential lighting strategies to improve the overall ambiance and user experience.', './/img/img2.png'),
(3, 'Wayfinding for Safety in Multi-Use Spaces', 'Wayfinding is essential for helping people enter, move through, and exit a space easily, enhancing their sense of safety. This mini course covers four key principles for developing, testing, and refining an effective wayfinding system. Learn how to create intuitive navigation strategies that improve user experience and ensure smooth spatial flow.\r\n', './/img/img3.png'),
(4, 'Creating Shared Responsibility for Safety', 'Ensuring safety in a multi-use space requires collective effort. This mini course guides you in creating a set of practical safety guidelines that can be shared, displayed, and adopted by all users. Learn how to foster a collaborative environment where everyone contributes to the overall safety, enhancing the well-being and security of all occupants.\r\n', './/img/img4.png'),
(5, 'Case Studies for Best-Practice in Safe Multi-Use Spaces', 'This open-ended course features the latest best-practice case studies shared by industry experts, providing inspiration, ideas, and practical examples to support the development of safe multi-use spaces. Stay updated with innovative approaches and learn from real-world successes to enhance the safety and functionality of your projects.\r\n\r\n\r\n\r\n\r\n\r\n', './/img/img5.png'),
(6, 'Mastering Client Conversations for Spatial Designers', 'Effective communication is crucial for successful spatial design projects. This course teaches designers how to ask strategic questions to uncover client needs, preferences, and constraints, and how to translate these insights into impactful design solutions. Participants will learn to navigate conversations about budgets, timelines, and design styles, addressing common client concerns and queries. Ideal for both new and experienced designers, this course enhances communication skills to ensure projects meet and exceed client expectations.', './/img/img6.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(22, 'Mikhail Maksimov', 'mishanz2003@gmail.com', 'new world'),
(23, 'Mikhail Maksimov', 'mishanz2003@gmail.com', 'paknsave'),
(24, 'Fred', 'jason@gmail.com', 'Freds message'),
(25, 'bob', 'bob@gmail.com', 'bobs message'),
(26, 'Jane', 'jane@gmail.com', 'janes message'),
(27, 'dan', 'dan@gmail.com', 'dans message'),
(28, 'amy', 'amy@gmail.com', 'amys message'),
(29, 'sam', 'sam@nonExistentEmail.beep', 'sams message'),
(30, 'Mikhail Maksimov', 'mishanz2003@gmail.com', 'dwdw'),
(31, 'Urban', 'mishanz2003@gmail.com', 'message'),
(32, 'sue', 'sue@gmail.com', 'egvrterg'),
(33, 'person', 'person@gmail.com', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `profession` varchar(500) NOT NULL,
  `text` varchar(50000) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profession`, `text`, `picture`) VALUES
(1, 'Emily Tran', 'Interior Designer', '\"OpenSpace Academy has been a game-changer for me. The resources and modules helped me refine my approach to designing safer, more inviting spaces. It\'s invaluable for anyone in the design field.\"', './/img/emily.png'),
(2, 'Michael Rodriguez', 'Co-working Space Manager', ' \"As a manager, OpenSpace Academy gave me practical tools to enhance safety protocols in our co-working space. The insights are actionable and tailored perfectly to our needs.\"', './/img/michael.png'),
(3, 'Sarah Johnson', 'Community Center Director', '\"OpenSpace Academy provided us with the knowledge to create a welcoming environment that prioritizes safety. It\'s a must-have resource for anyone managing community spaces.\"', './/img/sarah.png'),
(4, 'David Lee', 'Architect', '\"I\'ve integrated OpenSpace Academy\'s principles into my projects, and the results speak for themselves. It\'s a resource that elevates design by focusing on user safety and well-being.\"', './/img/david.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses2`
--
ALTER TABLE `courses2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses2`
--
ALTER TABLE `courses2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
