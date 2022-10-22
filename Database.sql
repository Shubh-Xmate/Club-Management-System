-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2022 at 03:46 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_req_robo`
--

CREATE TABLE `app_req_robo` (
  `Club_Name` varchar(20) NOT NULL,
  `Project_Id` varchar(20) NOT NULL,
  `Applicant_Name` varchar(20) NOT NULL,
  `Applicant_Role` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Request_date` date NOT NULL,
  `Budget` varchar(10) NOT NULL,
  `Approval_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_req_robo`
--

INSERT INTO `app_req_robo` (`Club_Name`, `Project_Id`, `Applicant_Name`, `Applicant_Role`, `Email`, `Phone_no`, `Request_date`, `Budget`, `Approval_date`) VALUES
('Robotronics', 'pr10', 'pratik', 'Co-ordinator', 'b20106@students.iitmandi.ac.in', '8767341519', '2021-11-11', '20000', '2021-11-11'),
('Robotronics', 'pr2', 'Vaibhav', 'Core-member', 'vaibhavgoyalop@gmail.com', '9812276214', '2022-07-25', '25000', '2022-07-25'),
('Robotronics', 'pr51', 'Vaibhav', 'Co-ordinator', 'vaibhavgoyalop@gmail.com', '981227621312', '2022-07-25', '12312', '2022-07-25'),
('Robotronics', 'pr1', 'Sanjeet', 'Core-member', 'b20140@students.iitmandi.ac.in', '32423', '2022-07-25', '15000', '2022-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `password`, `role`) VALUES
('amrendra', 'b20080@students.iitmandi.ac.in', '$2y$10$DuXotrdI3WtbkPA/0IU/7u06rt.F.G9RsLTP5mkwdFxng69Ggkja6', 'coordinator'),
('pratik kamble', 'b20106@students.iitmandi.ac.in', '$2y$10$D27BtKNHdNTxBVy/wp034.PvNeuCITm97iyla8hZDQFtacRIUQw3.', 'coordinator'),
('sanjeet', 'b20131@students.iitmandi.ac.in', '$2y$10$DuXotrdI3WtbkPA/0IU/7u06rt.F.G9RsLTP5mkwdFxng69Ggkja6', 'authority'),
('shailesh rathod', 'b20133@students.iitmandi.ac.in', '$2y$10$D27BtKNHdNTxBVy/wp034.PvNeuCITm97iyla8hZDQFtacRIUQw3.', 'coordinator'),
('vaibhav goyal', 'b20140@students.iitmandi.ac.in', '$2y$10$D27BtKNHdNTxBVy/wp034.PvNeuCITm97iyla8hZDQFtacRIUQw3.', 'coordinator'),
('shubham', 'b20168@students.iitmandi.ac.in', '$2y$10$DuXotrdI3WtbkPA/0IU/7u06rt.F.G9RsLTP5mkwdFxng69Ggkja6', 'authority');

-- --------------------------------------------------------

--
-- Table structure for table `new_pro_robo`
--

CREATE TABLE `new_pro_robo` (
  `id` varchar(20) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `registrar_name` varchar(20) NOT NULL,
  `registrar_email` varchar(50) NOT NULL,
  `registrar_role` varchar(20) NOT NULL,
  `head` varchar(20) NOT NULL,
  `sponsor` varchar(20) NOT NULL,
  `sponsor_email` varchar(40) DEFAULT NULL,
  `due_date` date NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_pro_robo`
--

INSERT INTO `new_pro_robo` (`id`, `project_name`, `registrar_name`, `registrar_email`, `registrar_role`, `head`, `sponsor`, `sponsor_email`, `due_date`, `registration_date`) VALUES
('pr20', 'Cellphone-Operated Land Rover', 'pratik kamble', 'b20106@students.iitmandi,ac.in', 'Co-ordinator', 'tony stark', 'iit mandi', 'b20133@students.iitmandi.ac.in', '2021-11-26', '2021-11-11'),
('pr10', 'Automatic Mess Attendance System', 'Vaibhav', 'vaibhavgoyalop@gmail.com', 'Co-ordinator', 'Vaibhav', 'IIT MANDI', 'none', '2022-07-30', '2022-07-25'),
('pr51', 'Automatic Mess Attendence', 'Vaibhav', 'vaibhavgoyalop@gmail.com', 'Teacher-associate', 'Vaibhav', 'IIT MANDI', 'none', '2022-07-30', '2022-07-25'),
('pr101', 'Automatic Attendence', 'Shubham', 'b20140@students.iitmandi.ac.in', 'Co-ordinator', 'Vaibhav', 'IIT Mandi', 'clubmanagementsystemiitm@gmail.com', '2022-07-22', '2022-07-25'),
('pr44', 'Automatic Tennis Ball Thrower', 'Amrendra', 'b20080@students.iitmandi.ac.in', 'Co-ordinator', 'Amrendra', 'IIT Mandi', 'vaibhavgoyalop@gmail.com', '2022-07-29', '2022-07-25'),
('pr45', 'Automatic Mess Attendance System', 'qweqwe', 'vaibhavgoyalop@gmail.com', 'Co-ordinator', 'Vaibhav', 'IIT MANDI', 'none', '2022-07-29', '2022-07-25'),
('pr46', 'Automatic Mess Attendance System', 'qweqwe', 'vaibhavgoyalop@gmail.com', 'Co-ordinator', 'Vaibhav', 'IIT MANDI', 'none', '2022-07-29', '2022-07-25');

--
-- Triggers `new_pro_robo`
--
DELIMITER $$
CREATE TRIGGER `addNewProject` AFTER INSERT ON `new_pro_robo` FOR EACH ROW BEGIN
	INSERT INTO sponsor_robo(id, sponsor_name, sponsor_mail, sponsor_role)
	VALUES (new.id, new.sponsor, new.sponsor_email, 'title-sponsor');
	
    INSERT INTO project_robo(id, project_name, head, sponsor, due_date, status)
 	VALUES (new.id, new.Project_name, new.head, new.sponsor, new.due_date,'Not Requested');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `project_robo`
--

CREATE TABLE `project_robo` (
  `id` varchar(20) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `head` varchar(20) NOT NULL,
  `sponsor` varchar(20) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Requested'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_robo`
--

INSERT INTO `project_robo` (`id`, `project_name`, `head`, `sponsor`, `due_date`, `status`) VALUES
('pr1', 'Artificial Intelligence-Based Chatbot for Appliance Control	\n', 'Ella Cross	', 'Auris Health	', '2021-11-30', 'Approved'),
('pr10', 'Soccer Robot	', 'Maggie Ramos	', 'Markforged	', '2021-11-30', 'Approved'),
('pr101', 'Automatic Attendence', 'Vaibhav', 'IIT Mandi', '2022-07-22', 'Requested'),
('pr2', 'Virtual Telepresence Robot Using Raspberry Pi	', 'Francis Simon	', 'Peloton Technology	', '2021-11-30', 'Approved'),
('pr20', 'Cellphone-Operated Land Rover', 'tony stark', 'iit mandi', '2021-11-26', 'Rejected'),
('pr3', 'Make Your Own Remote Controlled Robot	', 'Marco Washington	', 'Abbott Fund	', '2021-11-30', 'Rejected'),
('pr4', 'Arduino based Smartphone Controlled Robot Car	', 'Henrietta Gonzales	', 'Lockheed Martin	', '2021-11-30', 'Rejected'),
('pr44', 'Automatic Tennis Ball Thrower', 'Amrendra', 'IIT Mandi', '2022-07-29', 'Not Requested'),
('pr45', 'Automatic Mess Attendance System', 'Vaibhav', 'IIT MANDI', '2022-07-29', 'Not Requested'),
('pr46', 'Automatic Mess Attendance System', 'Vaibhav', 'IIT MANDI', '2022-07-29', 'Not Requested'),
('pr5', 'Colour Sensing Robot with MATLAB	', 'Emilio Gilbert	', 'DSS SolidWorks	', '2021-11-30', 'Not Requested'),
('pr51', 'Automatic Mess Attendence', 'Vaibhav', 'IIT MANDI', '2022-07-30', 'Approved'),
('pr6', 'RF Controlled Robot	', 'Lynne Munoz	', 'The Linley Group	', '2021-11-30', 'Not Requested'),
('pr7', 'Android Phone Controlled Robot	', 'Emma Ferguson	', 'Intuitive Surgical	', '2021-11-30', 'Not Requested'),
('pr8', 'Fire Extinguishing Robot	', 'Kate Jackson	', 'Westcoast Products	', '2021-11-30', 'Not Requested'),
('pr9', 'Wireless Gesture-Controlled Robot	', 'Meredith Hines	', 'Automation Direct	', '2021-11-30', 'Not Requested');

-- --------------------------------------------------------

--
-- Table structure for table `rej_req_robo`
--

CREATE TABLE `rej_req_robo` (
  `Club_Name` varchar(20) NOT NULL,
  `Project_Id` varchar(20) NOT NULL,
  `Applicant_Name` varchar(20) NOT NULL,
  `Applicant_Role` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Request_date` varchar(20) NOT NULL,
  `Budget` varchar(20) NOT NULL,
  `Rejection_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rej_req_robo`
--

INSERT INTO `rej_req_robo` (`Club_Name`, `Project_Id`, `Applicant_Name`, `Applicant_Role`, `Email`, `Phone_no`, `Request_date`, `Budget`, `Rejection_date`) VALUES
('Robotronics', 'pr20', 'Amrendra', 'Core-member', 'b20080@stuednts.iitmandi.ac.in', '9812276214', '2022-07-25', '15000', '2022/07/25'),
('Robotronics', 'pr3', 'Vaibhav', 'Core-member', 'vaibhavgoyalop@gmail.com', '32423', '2022-07-25', '10000', '2022/07/25'),
('Robotronics', 'pr4', 'CMS', 'Core-member', 'sdfsdf', '234234', '2022-07-25', '2342134', '2022/07/25');

-- --------------------------------------------------------

--
-- Table structure for table `requests_robo`
--

CREATE TABLE `requests_robo` (
  `Club_Name` varchar(50) NOT NULL,
  `Project_Id` varchar(20) NOT NULL,
  `Applicant_Name` varchar(50) NOT NULL,
  `Applicant_Role` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Request_date` date NOT NULL,
  `Budget` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests_robo`
--

INSERT INTO `requests_robo` (`Club_Name`, `Project_Id`, `Applicant_Name`, `Applicant_Role`, `Email`, `Phone_no`, `Request_date`, `Budget`) VALUES
('Robotronics', 'pr101', 'Amrendra', 'Core-member', 'b20140@students.iitmandi.ac.in', '9812276214', '2022-07-25', '10000');

--
-- Triggers `requests_robo`
--
DELIMITER $$
CREATE TRIGGER `after_requests_robo_insert` AFTER INSERT ON `requests_robo` FOR EACH ROW BEGIN
    	UPDATE project_robo SET status = "Requested" WHERE id = new.Project_Id ;
    
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_robo`
--

CREATE TABLE `sponsor_robo` (
  `id` varchar(20) NOT NULL,
  `sponsor_name` varchar(50) NOT NULL,
  `sponsor_mail` varchar(50) NOT NULL,
  `sponsor_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsor_robo`
--

INSERT INTO `sponsor_robo` (`id`, `sponsor_name`, `sponsor_mail`, `sponsor_role`) VALUES
('pr1', 'Auris Health	', 'pk28022003@gmail.com', 'title-sponsor'),
('pr1', 'Santiago Kim', 'Santiago_Kim@gmail.com', 'sub-sponsor'),
('pr1', 'Evelyn Bradley', 'Evelyn_Bradley@gmail.com', 'sub-sponsor'),
('pr1', 'Clinton Pearson', 'Clinton_Pearson@gmail.com', 'sub-sponsor'),
('', '', '', ''),
('pr1', 'Patty Murray', 'Patty_Murray@gmail.com', 'sub-sponsor'),
('pr1', 'Tina Castro', 'Tina_Castro@gmail.com', 'sub-sponsor'),
('pr2', 'Markforged	', 'b20106@students.iitmandi.ac.in', 'title-sponsor'),
('pr2', 'Veronica Buchanan', 'Veronic_ Buchanan@gmail.com', 'sub-sponsor'),
('pr2', 'Brian Ramsey', 'Brian_Ramsey@gmail.com', 'sub-sponsor'),
('pr2', 'Ruben Long', 'Ruben_Long@gmail.com', 'sub-sponsor'),
('pr2', 'Sonya Stone', 'Sonya_Stonegmail.com', 'sub-sponsor'),
('pr2', 'Edwin Burgess', 'Edwin_Burgess@gmail.com', 'sub-sponsor'),
('', '', '', ''),
('pr3', 'Peloton Technology	', 'b20080@students.iitmandi.ac.in', 'title-sponsor'),
('pr3', 'Cassandra Morgan', 'Cassandra_Morgan@gmail.com', 'sub-sponsor'),
('pr3', 'Cindy Patton', 'Cindy_Patton@gmail.com', 'sub-sponsor'),
('pr3', 'Edmund Graves', 'Edmund_Graves@gmail.com', 'sub-sponsor'),
('', '', '', ''),
('pr4', 'Abbott Fund	', 'b20168@students.iitmandi.ac.in', 'title-sponsor'),
('pr4', 'Darrin Freeman', 'Darrin_Freeman@gmail.com', 'sub-sponsor'),
('pr4', 'Mathew Curtis', 'Mathew_Curtis@gmail.com', 'sub-sponsor'),
('pr4', 'Yvonne Fletcher', 'Yvonne_Fletcher@gmail.com', 'sub-sponsor'),
('pr4', 'Clyde White', 'Clyde_White@gmail.com', 'sub-sponsor'),
('pr5', 'Lockheed Martin	', 'b20140@students.iitmandi.ac.in', 'title-sponsor'),
('pr5', 'Emily Cook', 'Emily_Cook@gmail.com', 'sub-sponsor'),
('pr5', 'Lorena Elliott', 'Lorena_Elliott@gmail.com', 'sub-sponsor'),
('pr5', 'Kimberly Hubbard', 'Kimberly_Hubbard@gmail.com', 'sub-sponsor'),
('pr5', 'Marcos Beck', 'Marcos_Beck@gmail.com', 'sub-sponsor'),
('pr5', 'Jan Swanson', 'Jan_Swanson@gmail.com', 'sub-sponsor'),
('pr5', 'Garrett Morgan', 'Garrett_ Morgan@gmail.com', 'sub-sponsor'),
('pr5', 'Jan Swanson', 'Jan_Swanson@gmail.com', 'sub-sponsor'),
('pr5', 'Garrett Morgan', 'Garrett_ Morgan@gmail.com', 'sub-sponsor'),
('pr6', 'DSS SolidWorks	', 'b20124@students.iitmandi.ac.in', 'title-sponsor'),
('pr6', 'Terrance Carter', 'Terrance_Carter@gmail.com', 'sub-sponsor'),
('pr7', 'The Linley Group	', 'b20133@students.iitmandi.ac.in', 'title-sponsor'),
('pr7', 'Brandi Hayes', 'Brandi_Hayes@gmail.com', 'sub-sponsor'),
('pr8', 'Westcoast Products	', 'b20131@students.iitmandi.ac.in', 'title-sponsor'),
('pr8', 'Terence Hale', 'Terence_Hale@gmail.com', 'sub-sponsor'),
('pr9', 'Automation Direct	', 'b20106@students.iitmandi.ac.in', 'title-sponsor'),
('pr9', 'Aubrey Ray', 'Aubrey_Ray@gmail.com', 'sub-sponsor'),
('pr10', 'Markforged	', 'b20106@students.iitmandi.ac.in', 'title-sponsor'),
('pr10', 'Francis Clark', 'Francis_Clark@gmail.com', 'sub-sponsor'),
('pr10', 'Rene Romero', 'Rene_Romero@gmail.com', 'sub-sponsor'),
('pr10', 'Kathleen Dunn', 'Kathlee_ Dunn@gmail.com', 'sub-sponsor'),
('pr10', 'Karen Weaver', 'Karen_Weaver@gmail.com', 'sub-sponsor'),
('pr20', 'iit mandi', 'b20133@students.iitmandi.ac.in', 'title-sponsor'),
('pr10', 'IIT MANDI', 'none', 'title-sponsor'),
('pr51', 'IIT MANDI', 'none', 'title-sponsor'),
('pr101', 'IIT Mandi', 'clubmanagementsystemiitm@gmail.com', 'title-sponsor'),
('pr44', 'IIT Mandi', 'vaibhavgoyalop@gmail.com', 'title-sponsor'),
('pr45', 'IIT MANDI', 'none', 'title-sponsor'),
('pr46', 'IIT MANDI', 'none', 'title-sponsor');

-- --------------------------------------------------------

--
-- Table structure for table `student_robo`
--

CREATE TABLE `student_robo` (
  `id` varchar(20) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_robo`
--

INSERT INTO `student_robo` (`id`, `student_name`, `student_email`, `student_role`) VALUES
('pr1', 'Geneva Copeland', 'Geneva_Copeland@gmail.com', 'co-ordinator'),
('pr1', 'Terry Gregory', 'Terry_Gregory@gmail.com', 'student-associate'),
('pr2', 'Jimmy Delgado', 'Jimmy_Delgado@gmail.com', 'co-ordinator'),
('pr2', 'Benjamin Byrd', 'Benjamin_Byrd@gmail.com', 'student-associate'),
('pr3', 'Herman Casey', 'Herman_Casey@gmail.com', 'co-ordinator'),
('pr3', 'Miriam Poole', 'Miriam_Poole@gmail.com', 'student-associate'),
('pr4', 'Eleanor Ford', 'Eleanor_Ford@gmaill.com', 'co-ordinator'),
('pr4', 'Cary Goodwin', 'Cary_Goodwin@gmail.com', 'student-associate'),
('pr5', 'Leigh Ellis', 'Leigh_Ellis@gmail.com', 'co-ordinator'),
('pr5', 'Randall Dennis', 'Randall_Dennis@gmail.com', 'student-associate'),
('pr6', 'Rickey Richardson', 'Rickey_Richardson@gmail.com', 'co-ordinator'),
('pr6', 'Domingo Bowers', 'Domingo_Bowers@gmail.com', 'student-associate'),
('pr7', 'Curtis Holmes', 'Curtis_Holmes@gmail.com', 'co-ordinator'),
('pr7', 'Janie Evans', 'Janie_Evans@gmail.com', 'student-associate'),
('pr8', 'Viola Maldonado', 'Viola_Maldonado@gmail.com', 'co-ordinator'),
('pr8', 'Penny Willis', 'Penny_Willis@gmail.com', 'student-associate'),
('pr9', 'Ricardo Moody', 'Ricardo_Moody@gmail.com', 'co-ordinator'),
('pr9', 'Ronnie Norris', 'Ronnie_Norris@gmail.com', 'student-associate'),
('pr10', 'Heidi Carroll', 'Heidi_Carroll@gmail.com', 'co-ordinator'),
('pr10', 'Carmen Horton', 'Carmen_Horton@gmail.com', 'student-associate');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_robo`
--

CREATE TABLE `teachers_robo` (
  `id` varchar(20) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_robo`
--

INSERT INTO `teachers_robo` (`id`, `teacher_name`, `teacher_email`, `teacher_role`) VALUES
('pr1', 'Jose Rodriguez', 'Jose_Rodriguez@gmail.com', 'head'),
('pr1', 'Nina Rogers', 'Nina_Rogers@gmail.com', 'teacher-associate'),
('pr2', 'Glenda Pierce', 'Glenda_Pierce@gmail.com', 'head'),
('pr2', 'Vincent Vega', 'Vincent_Vega@gmail.com', 'teacher-associate'),
('pr3', 'Kyle Harmon', 'Kyle_Harmon@gmail.com', 'head'),
('pr3', 'Sandy Simmons', 'Sandy_Simmons@gmail.com', 'teacher-associate'),
('pr4', 'Kerry Carroll', 'Kerry_Carroll@gmail.com', 'head'),
('pr4', 'Larry Evans', 'Larry_Evans@gmail.com', 'teacher-associate'),
('pr5', 'Delbert Obrien', 'Delbert_Obrien@gmail.com', 'head'),
('pr5', 'Stella Rios', 'Stella_ Rios@gmail.com', 'teacher-associate'),
('pr6', 'Whitney Gray', 'Whitney_Gray@gmail.com', 'head'),
('pr6', 'Dana Johnson', 'Dana_Johnson@gmail.com', 'teacher-associate'),
('pr7', 'Lee Franklin', 'Lee_Franklin@gmail.com', 'head'),
('pr7', 'Cathy Hubbard', 'Cathy_Hubbard@gmail.com', 'teacher-associate'),
('pr8', 'Kirk Underwood', 'Kirk_Underwood@gmail.com', 'head'),
('pr8', 'Cora Richardson', 'Cora_Richardson@gmail.com', 'teacher-associate'),
('pr9', 'Roger West', 'Roger_West@gmail.com', 'head'),
('pr9', 'Calvin Carr', 'Calvin_Carr@gmail.com', 'teacher-associate'),
('pr10', 'Anita Pratt', 'Anita_Pratt@gmail.com', 'head'),
('pr10', 'Sandy Adkins', 'Sandy_Adkins@gmail.com', 'teacher-ssociate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `project_robo`
--
ALTER TABLE `project_robo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_robo`
--
ALTER TABLE `sponsor_robo`
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `student_robo`
--
ALTER TABLE `student_robo`
  ADD KEY `id` (`id`);

--
-- Indexes for table `teachers_robo`
--
ALTER TABLE `teachers_robo`
  ADD KEY `id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_robo`
--
ALTER TABLE `student_robo`
  ADD CONSTRAINT `student_robo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `project_robo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `teachers_robo`
--
ALTER TABLE `teachers_robo`
  ADD CONSTRAINT `teachers_robo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `project_robo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
