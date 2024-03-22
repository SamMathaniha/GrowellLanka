-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 07:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `growell`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_login`
--

CREATE TABLE `client_login` (
  `user_id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_login`
--

INSERT INTO `client_login` (`user_id`, `Username`, `Password`) VALUES
(100, 'HCL', 'HCL123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `PhoneNo1` int(15) NOT NULL,
  `PhoneNo2` int(15) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_ID`, `name`, `email`, `address`, `PhoneNo1`, `PhoneNo2`, `Description`) VALUES
(5, 'sam', 'sam@gmail.com', '102/1 kandy road, peradeniya', 778568545, 766666666, 'one year cleaning service'),
(8, 'HCL', 'HCL@gmail.com', '5th floor, Cinnoman Place, Colombo 3', 2147483647, 2147483647, 'One year industrial and Clean services'),
(9, 'Google', 'google@gmail.com', '12/4 Nawalapitiya Road, gampola', 123456789, 987654321, '4 years Landscaping '),
(10, 'kanish', 'kanish@gmail.com', '125/1 wattala ', 23654789, 98745632, '1 week service'),
(11, 'aloy', 'roy@gmail.com', '110/1 nawalapitiya road, patana', 56954122, 36523641, '5 sdasdf asdf');

-- --------------------------------------------------------

--
-- Table structure for table `helpdesk`
--

CREATE TABLE `helpdesk` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `PhoneNo` int(15) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `helpdesk`
--

INSERT INTO `helpdesk` (`id`, `name`, `email`, `PhoneNo`, `message`) VALUES
(1, 'sam', 'sam@gmail.com', 771579711, 'hiiiiiiiiiii'),
(2, 'sam', 'roy@gmail.com', 6546546, 'sadaf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_ID` int(255) NOT NULL,
  `cus_ID` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `refNo` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `cus_ID`, `email`, `refNo`, `date`, `amount`) VALUES
(1, 2, 'sam@gmail.com', 'asdfasd', '2023-08-10', 5000000),
(2, 2, 'roy@gmail.com', 'asdfasd', '2023-08-09', 985000);

-- --------------------------------------------------------

--
-- Table structure for table `payment_slip`
--

CREATE TABLE `payment_slip` (
  `paySlipID` int(255) NOT NULL,
  `Image` text NOT NULL,
  `refNo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_slip`
--

INSERT INTO `payment_slip` (`paySlipID`, `Image`, `refNo`, `email`, `date`, `amount`) VALUES
(5, 'chatbot.PNG', 'sadas', 'aloy@gmail.com', '2023-08-17', 5000000),
(7, '20230731_045028.mp4', 'asdfasd', 'roy@gmail.com', '2023-08-30', 5000),
(8, '20230731_045028.mp4', 'asdfasd', 'roy@gmail.com', '2023-08-30', 5000),
(10, 'pexels-eberhard-grossgasteiger-691668.jpg', 'asdfasd', 'sugi@gmail.com', '2023-06-15', 5000),
(11, 'pexels-pratik-gupta-2748716.jpg', 'asdfasd', 'roy@gmail.com', '2023-08-16', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_ID` int(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review_Note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_ID`, `email`, `review_Note`) VALUES
(1, 'Dominos@gmail.com', 'Best Service, Our company will recommend Growell Lanka. I hope our touch and service will continue for future also. Thank you Growell Lanka'),
(3, 'Kandyan@gmail.com', 'Recommended Services, 100% neat work. Good Staffs.Thank you Growell Lanka'),
(4, 'Taj@gmail.com', 'Great services. Happy to having the services from Growell Lanka. 100% worth. Thank you. ');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `SerReq_ID` int(50) NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `service` varchar(100) NOT NULL,
  `Q1` varchar(255) NOT NULL,
  `Q2` varchar(255) NOT NULL,
  `Q3` varchar(255) NOT NULL,
  `Q4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`SerReq_ID`, `name`, `date`, `service`, `Q1`, `Q2`, `Q3`, `Q4`) VALUES
(1, 'sam', '2023-08-01', 'sasd', 'asdas', 'asdasd', 'asdasd', 'asdasd'),
(5, 'jack', '2023-08-02', 'asdas', 'dfh sdf', 'h srthdfg', 'haergd', 'fgaergfdx'),
(6, 'kanish', '2023-08-08', 'SDf', 'SDg', 'SDgSD', 'SDgS', 'Sdg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ID` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Department` varchar(15) DEFAULT NULL,
  `Team_No` varchar(15) DEFAULT NULL,
  `PhoneNo1` int(15) NOT NULL,
  `PhoneNo2` int(15) NOT NULL,
  `Gender` text NOT NULL,
  `JoinedDate` date NOT NULL,
  `LeftDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `name`, `email`, `DOB`, `Department`, `Team_No`, `PhoneNo1`, `PhoneNo2`, `Gender`, `JoinedDate`, `LeftDate`) VALUES
(1, 'sam', 'sam@gmail.com', '2001-02-20', 'Maintenance', '2', 2147483647, 2147483647, 'Male', '2022-06-08', '0000-00-00'),
(2, 'jack', 'jack@gmail.com', '1999-07-14', 'Cleaning', '5', 2147483647, 2147483647, 'Female', '2021-06-17', '2023-05-31'),
(5, 'suresh', 'suresh@gmail.com', '2000-03-16', 'sanidazering', '1', 789565895, 769854589, 'Male', '2020-07-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_ID` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `product` varchar(50) NOT NULL,
  `PhoneNo1` int(15) NOT NULL,
  `PhoneNo2` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_ID`, `name`, `email`, `product`, `PhoneNo1`, `PhoneNo2`) VALUES
(2, 'jack', 'jack@gmail.com', 'water', 758456, 456456),
(3, 'sam', 'sam@gmail.com', 'soap', 2147483647, 2147483647),
(4, 'roy', 'roy@gmail.com', 'shampoo', 123456789, 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `Vac_ID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`Vac_ID`, `title`, `department`, `description`) VALUES
(12, 'cleaners|சுத்தம் செய்பவர்கள்| පිරිසිදු කරන්නන්', 'Cleaning ', 'Per week 5 days of work, 60 000 Salary, 2 years Agreement ||සතියකට දින 5 වැඩ, 60 000 වැටුප, අවුරුදු 2 ගිවිසුම.|| \r\nவாரத்திற்கு நாள் 5 வேலை, 60 000 சம்பளம், ஆண்டு 2 ஒப்பந்தம்.'),
(13, 'Supervisor', 'Technical', '* 5 year Experience * 100 000 salary * 5 days work per day * 8 hours work per day | * 5 வருட அனுபவம் * 100 000 சம்பளம் * ஒரு நாளைக்கு 5 நாட்கள் வேலை * ஒரு நாளைக்கு 8 மணி நேரம் வேலை | * අවුරුදු 5ක පළපුරුද්ද * වැටුප 100 000 * දිනකට දින 5 වැඩ');

-- --------------------------------------------------------

--
-- Table structure for table `vacancyrequest`
--

CREATE TABLE `vacancyrequest` (
  `VacReq_ID` int(50) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(15) NOT NULL,
  `department` varchar(50) NOT NULL,
  `PhoneNo` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacancyrequest`
--

INSERT INTO `vacancyrequest` (`VacReq_ID`, `name`, `gender`, `age`, `department`, `PhoneNo`) VALUES
(1, 'jack', 'male', 22, 'IT', 785695485),
(3, 'kanishni', 'female', 21, 'HR', 56485645),
(5, 'sam', 'male', 56, 'Cleaning Team', 46478965),
(6, 'kanishni', 'female', 23, 'Repair', 245635),
(7, 'suresh', 'other', 45, 'Cleaning Team', 24563478);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_login`
--
ALTER TABLE `client_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_ID`);

--
-- Indexes for table `helpdesk`
--
ALTER TABLE `helpdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_ID`);

--
-- Indexes for table `payment_slip`
--
ALTER TABLE `payment_slip`
  ADD PRIMARY KEY (`paySlipID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_ID`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`SerReq_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_ID`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`Vac_ID`);

--
-- Indexes for table `vacancyrequest`
--
ALTER TABLE `vacancyrequest`
  ADD PRIMARY KEY (`VacReq_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `helpdesk`
--
ALTER TABLE `helpdesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_slip`
--
ALTER TABLE `payment_slip`
  MODIFY `paySlipID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `SerReq_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `Vac_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vacancyrequest`
--
ALTER TABLE `vacancyrequest`
  MODIFY `VacReq_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
