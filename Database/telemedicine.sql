-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 08:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@password');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_consultation`
--

CREATE TABLE `tbl_consultation` (
  `consultation_id` int(11) NOT NULL,
  `consultation_file_number` varchar(225) NOT NULL,
  `consultation_medical_unit` int(11) NOT NULL,
  `consultation_sta` int(11) NOT NULL,
  `consultation_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_consultation`
--

INSERT INTO `tbl_consultation` (`consultation_id`, `consultation_file_number`, `consultation_medical_unit`, `consultation_sta`, `consultation_date`) VALUES
(1, '08102553433', 2, 1, '2024-Jul-Tue');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctors`
--

CREATE TABLE `tbl_doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_unit_id` int(11) NOT NULL,
  `doctor_first_name` varchar(225) NOT NULL,
  `doctor_middle_name` varchar(225) NOT NULL,
  `doctor_last_name` varchar(225) NOT NULL,
  `doctor_email` varchar(225) NOT NULL,
  `doctor_phone` varchar(225) NOT NULL,
  `doctor_city` varchar(225) NOT NULL,
  `doctor_address` varchar(225) NOT NULL,
  `doctor_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctors`
--

INSERT INTO `tbl_doctors` (`doctor_id`, `doctor_unit_id`, `doctor_first_name`, `doctor_middle_name`, `doctor_last_name`, `doctor_email`, `doctor_phone`, `doctor_city`, `doctor_address`, `doctor_password`) VALUES
(1, 2, 'abubakar', 'abdulrazak', 'lilsadiq', 'abubakarsa242@gmail.com', '08102553433', 'Niger State', 'Behind Tudunwada', 'doctor@equity');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `file_id` int(11) NOT NULL,
  `file_phone` varchar(225) NOT NULL,
  `file_passport` varchar(225) NOT NULL,
  `file_first_name` varchar(225) NOT NULL,
  `file_middle_name` varchar(225) NOT NULL,
  `file_last_name` varchar(225) NOT NULL,
  `file_gender` varchar(225) NOT NULL,
  `file_age` varchar(225) NOT NULL,
  `file_marriage_status` varchar(225) NOT NULL,
  `file_nationality` varchar(225) NOT NULL,
  `file_state` varchar(225) NOT NULL,
  `file_localgovernment` varchar(225) NOT NULL,
  `file_tribe` varchar(225) NOT NULL,
  `file_religion` varchar(225) NOT NULL,
  `file_date` varchar(255) NOT NULL,
  `file_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`file_id`, `file_phone`, `file_passport`, `file_first_name`, `file_middle_name`, `file_last_name`, `file_gender`, `file_age`, `file_marriage_status`, `file_nationality`, `file_state`, `file_localgovernment`, `file_tribe`, `file_religion`, `file_date`, `file_address`) VALUES
(8, '08102553433', '997727903475tdJ8HnsYh4qWwOuUx27cfGbBIzRSXC643831705377oCRljNvumDcwtq7WKe14sJHIB9SfyT_j.jpeg', 'Abubakar', 'Abdulrazak', 'Lilsadiq', 'Male', '24', 'Single', 'Nigeria', 'Niger', 'Kontagora', 'Hausa', 'Islam', '2024-Jul-Tue', 'Segi arae Kontagora Niger State');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medical_prescription`
--

CREATE TABLE `tbl_medical_prescription` (
  `prescription_id` int(11) NOT NULL,
  `prescription_schedule_id` int(11) NOT NULL,
  `prescription` longtext NOT NULL,
  `prescription_datetime` varchar(255) NOT NULL,
  `prescription_file_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_medical_prescription`
--

INSERT INTO `tbl_medical_prescription` (`prescription_id`, `prescription_schedule_id`, `prescription`, `prescription_datetime`, `prescription_file_number`) VALUES
(1, 3, '[\"Tab PCM 500mg\"]', '2024-07-20 23:25:38', '08102553433');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medical_record`
--

CREATE TABLE `tbl_medical_record` (
  `record_id` int(11) NOT NULL,
  `record_schedule_id` int(11) NOT NULL,
  `record` longtext NOT NULL,
  `record_description` longtext NOT NULL,
  `record_conclusion` longtext NOT NULL,
  `record_datetime` varchar(255) NOT NULL,
  `record_file_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_medical_record`
--

INSERT INTO `tbl_medical_record` (`record_id`, `record_schedule_id`, `record`, `record_description`, `record_conclusion`, `record_datetime`, `record_file_number`) VALUES
(1, 3, '[\"bruises\",\"broken joint\"]', 'patient came to the hospital with injure legs', 'test given and admitted to a&e', '2024-07-20 23:24:48', '08102553433'),
(2, 3, '[\"1st degree burn, on the upper thorax\",\"burns on the upper thorax\"]', 'the patient was admitted with with burns all over the body.', 'the patient have been admitted to A & E', '2024-07-20 23:58:47', '08102553433');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messege`
--

CREATE TABLE `tbl_messege` (
  `messege_id` int(11) NOT NULL,
  `messege_identifier` int(11) NOT NULL,
  `messege_carrier` varchar(225) NOT NULL,
  `messege` longtext NOT NULL,
  `messege_timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_messege`
--

INSERT INTO `tbl_messege` (`messege_id`, `messege_identifier`, `messege_carrier`, `messege`, `messege_timestamp`) VALUES
(1, 3, 'doctor', 'hello', ''),
(2, 3, 'patient', 'hi sir, i cant read well, video call?', ''),
(3, 3, 'doctor', 'yes sure, click on the videocall i con, copy the peer id and send to me', ''),
(4, 3, 'patient', 'ok sir', ''),
(5, 3, 'patient', '5abc8103-6837-421f-becf-6c11d222df68', ''),
(6, 3, 'patient', 'what of voice call?', ''),
(7, 3, 'doctor', 'lets try', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `patient_id` int(11) NOT NULL,
  `patient_phone` varchar(225) NOT NULL,
  `patient_password` varchar(225) NOT NULL,
  `form_ispaid` int(11) NOT NULL,
  `form_isfilled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patient_id`, `patient_phone`, `patient_password`, `form_ispaid`, `form_isfilled`) VALUES
(1, '08102553433', 'hellojello', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_ref` varchar(225) NOT NULL,
  `payment_phone` varchar(225) NOT NULL,
  `payment_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_ref`, `payment_phone`, `payment_date`) VALUES
(2, 'T921182219521701', '08102553433', '2024-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `report_id` int(11) NOT NULL,
  `report_patient_number` varchar(225) NOT NULL,
  `report_doctor_id` int(11) NOT NULL,
  `report_description` longtext NOT NULL,
  `report_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`report_id`, `report_patient_number`, `report_doctor_id`, `report_description`, `report_date`) VALUES
(1, '08102553433', 1, 'embarrasment', '2024-Jul-Tue'),
(2, '08102553433', 1, 'gfhfhgf', '2024-Jul-Tue'),
(3, '08102553433', 1, 'hkiyiuy', '2024-Jul-Tue'),
(4, '08102553433', 1, 'gfjjfjfjf', '2024-Jul-Tue');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_medical_unit` varchar(225) NOT NULL,
  `schedule_file_number` varchar(225) NOT NULL,
  `schedule_doctor_id` int(11) NOT NULL,
  `schedule_date` varchar(225) NOT NULL,
  `schedule_time` varchar(225) NOT NULL,
  `schedule_sta` int(11) NOT NULL,
  `schedule_isstart` int(11) NOT NULL,
  `schedule_isrecorded` int(11) NOT NULL,
  `schedule_isprescribed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`schedule_id`, `schedule_medical_unit`, `schedule_file_number`, `schedule_doctor_id`, `schedule_date`, `schedule_time`, `schedule_sta`, `schedule_isstart`, `schedule_isrecorded`, `schedule_isprescribed`) VALUES
(3, 'psychiatric', '08102553433', 1, '2024-07-15', '12:31', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uinit`
--

CREATE TABLE `tbl_uinit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `unit_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_uinit`
--

INSERT INTO `tbl_uinit` (`unit_id`, `unit_name`, `unit_description`) VALUES
(2, 'psychiatric', 'mad people');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_consultation`
--
ALTER TABLE `tbl_consultation`
  ADD PRIMARY KEY (`consultation_id`);

--
-- Indexes for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_medical_prescription`
--
ALTER TABLE `tbl_medical_prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `tbl_medical_record`
--
ALTER TABLE `tbl_medical_record`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `tbl_messege`
--
ALTER TABLE `tbl_messege`
  ADD PRIMARY KEY (`messege_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_uinit`
--
ALTER TABLE `tbl_uinit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_consultation`
--
ALTER TABLE `tbl_consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_doctors`
--
ALTER TABLE `tbl_doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_medical_prescription`
--
ALTER TABLE `tbl_medical_prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_medical_record`
--
ALTER TABLE `tbl_medical_record`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_messege`
--
ALTER TABLE `tbl_messege`
  MODIFY `messege_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_uinit`
--
ALTER TABLE `tbl_uinit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
