-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 09:18 PM
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
-- Database: `taskmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `priority` enum('Low','Medium','High') NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `assigned_user` varchar(255) DEFAULT NULL,
  `estimated_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `category`, `priority`, `task_name`, `description`, `due_date`, `status`, `assigned_user`, `estimated_time`) VALUES
(1, '1234', 'Medium', 'sdjncm', 'fujdskc', '2024-03-19', 'on progress', 'blakely', '20hrs'),
(3, 'project', 'Low', 'A task management project', 'this project is to create and manage your projects.it creates efficiency', '2024-04-01', 'in progress', 'lewis', '1 week'),
(4, 'project', 'Low', 'A task management project', 'this project is to create and manage your projects.it creates efficiency', '2024-04-01', 'in progress', 'lewis', '1 week'),
(6, 'homework', 'High', 'wertyuio', 'qwertyuiopasdfghjk', '2024-04-03', 'start', 'rtyu', '23456'),
(7, 'homework', 'High', 'wertyuio', 'qwertyuiopasdfghjk', '2024-04-03', 'start', 'rtyu', '23456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
