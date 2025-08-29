-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 09:28 AM
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
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `adminregdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `adminname`, `username`, `mobile_number`, `branch`, `city`, `adminregdate`) VALUES
(1, 'panktiv283', 'Pankti Vaghasiya', 'pankti', '9510003128', 'Surat', 'Surat', '2024-03-07 09:23:24'),
(2, 'netra123', 'trivedi netra', 'netra', '9234568901', 'bhavnagar', 'bhavnagar', '2025-01-15 11:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `services` varchar(50) NOT NULL,
  `appointment_date` varchar(10) NOT NULL,
  `appointment_time` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `medical_history` varchar(200) NOT NULL,
  `insurance_info` varchar(500) NOT NULL,
  `note` varchar(500) NOT NULL,
  `next_visit` varchar(20) NOT NULL,
  `medicine` varchar(500) NOT NULL,
  `report` varchar(500) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `note_doctor` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `mobile_number`, `email`, `date_of_birth`, `gender`, `services`, `appointment_date`, `appointment_time`, `address`, `doctor`, `medical_history`, `insurance_info`, `note`, `next_visit`, `medicine`, `report`, `remark`, `note_doctor`) VALUES
(5, 'Pankti', '9825950123', 'classydivyu2382013@gmail.com', '2024-03-15', 'Female', 'Neurology', '2024-03-15', '5:00 P.M - 7:00 P.M', 'dfgbvhnjh', 'prdr', 'no', 'vo', 'hey', '2024-03-18', 'fhg', 'gjhhk', 'ghnj', 'gjhj'),
(6, 'Pankti', '9510003188', 'pankti.patel866@gmail.com', '2024-02-27', 'Male', 'vfch', '2024-04-06', '5:00 P.M - 7:00 P.M', '2152', 'Dr. Prakash Bhatt (Neurologist)', 'no', 'hgfhg', 'fgbfgvb', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `work_experince` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `apply_for` varchar(50) NOT NULL,
  `job_time` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `joiny` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `first_name`, `last_name`, `address`, `date_of_birth`, `qualification`, `email`, `phone_number`, `work_experince`, `skill`, `apply_for`, `job_time`, `date`, `status`, `joiny`) VALUES
(8, 'ffcvnvb', 'gjnmbm', 'bnnm', '2024-02-07', 'DM(Neurology)', 'classydivyu2382013@gmail.com', '9510003188', '1year', 'dgfvvbgj', 'Nurse ', 'Full-Time', '2024-04-05', 'Accept', '2024-04-06'),
(10, 'Riya', 'gohil', 'ashar', '2023-02-28', 'DM(Neurology)', 'classydivyu2382013@gmail.com', '3216547890', '5year', 'dgfvvbgj', 'Assistant  ', 'Internship  ', '2024-03-28', 'Interview', '2024-03-29'),
(11, 'Nishtha', 'Busa', 'mahuva', '2023-02-14', 'MD(Psychiatry)', 'pankti.patel866@gmail.com', '9825950123', '2year', 'dgfvvbgj', 'Doctor ', 'Part-Time ', '2024-03-22', 'Reject', '2024-03-12'),
(13, 'mona', 'dave', 'Plot no C/25, 5t654y6765uhh road, Bharatnagar, Bhavnagar', '1998-04-14', 'MD(CARDDI0LOGY)', 'bmbm@gdfgdb.com', '8235927575', '2', 'cardio', 'Doctor ', 'Part-Time', '2025-04-14', ' ', '2025-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `mobile_number`, `email`) VALUES
(2, 'kunjal', '3215648970', 'classydivyu2382013@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `department_name` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `image`, `department_name`, `description`) VALUES
(4, '', 'pankti', 'heybv'),
(5, 'images/', 'csjjs', 'dih yertr'),
(6, 'admin/department/', 'csjjs', 'dih yertr'),
(7, 'department/', 'dsdv', 'dsg d'),
(16, 'images/h1.jpg', 'jbvjhs', 'ahdukafc'),
(17, 'department/h1.jpg', 'jbvjhs', 'ahdukafc'),
(18, 'department/h1.jpg', 'jbvjhs', 'ahdukafc');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(10) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `adress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `phone_number`, `email`, `time`, `adress`) VALUES
(1, '9510003188', 'pankti.patel866@gmail.com', ' Mon - Sun: 8AM - 8PM', 'Office No:8,Shree Sidhhivinayak Complex, near Bhagwati circal, Kaliyabid, Bhavnagar, Gujarat 364001'),
(2, ' 9356236790', 'drjanakddesai@gmail.com', 'mon-sat:9:00am to 7:00 pm', 'Nr. Stadium Circle,\r\nNavrangpura, Ahmedabad - 380 009\r\nGujarat (India)');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `img_dir` varchar(1000) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `doctor_dept` varchar(100) NOT NULL,
  `doctor_degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `img_dir`, `doctor_name`, `doctor_dept`, `doctor_degree`) VALUES
(17, 'doc1.jpeg', 'admin/upload/doc1.jpeg', 'Divyam', 'gjhkjk', 'jljklkl'),
(18, 'doc1.jpeg', 'admin/upload/doc1.jpeg', 'Divyam', 'gjhkjk', 'jljklkl'),
(19, '', 'admin/upload/', 'pankti', 'hey', 'ujlokip;'),
(20, '', 'admin/upload/', 'pankti', 'hey', 'ujlokip;'),
(25, 'janak-desai-big.jpg', 'images/janak-desai-big.jpg', 'Dr. Janak Desai', 'founder4', 'FRCS ');

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `id` int(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `test` varchar(100) NOT NULL,
  `test_date` varchar(20) NOT NULL,
  `test_time` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `report_result` varchar(500) NOT NULL,
  `report_issue_date` varchar(50) NOT NULL,
  `remark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `name`, `mobile_number`, `email`, `date_of_birth`, `gender`, `test`, `test_date`, `test_time`, `address`, `report_result`, `report_issue_date`, `remark`) VALUES
(4, 'Pankti', '9825950123', 'classydivyu2382013@gmail.com', '2024-03-13', 'Female', 'Blood Glucose Test', '2024-03-13', '3:00 P.M - 5:00 P.M', '2156', '', '', ''),
(13, '', '', '', '', '', 'dfghfj', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `email`, `no`, `password`, `gender`) VALUES
('1', 'mona', '21', 'monadave@gmail.com', '9145678920', 'mona234', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `image` varchar(25) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `description`) VALUES
(1, 'ssss', 'upload/c1 (2).jpg', 'hfth'),
(2, 'ssss', 'upload/c1 (2).jpg', 'hfth'),
(3, 'vakiee', 'upload/pharmacy.svg', 'v erye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
