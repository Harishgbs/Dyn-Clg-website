-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2023 at 02:11 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20532735_gptplpt2`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(30) NOT NULL,
  `passw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`email`, `passw`) VALUES
('harishgb3805@gmail.com', 'harish');

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `DCE` varchar(255) NOT NULL,
  `DECE` varchar(255) NOT NULL,
  `DME` varchar(255) NOT NULL,
  `CSE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `year`, `intake`, `DCE`, `DECE`, `DME`, `CSE`) VALUES
(7, '2017-18', '60+6EWS', '38', '42', '58', '12'),
(8, '2018-19', '60+6EWS', '47', '43', '60', '42'),
(9, '2019-20', '60+6EWS', '35', '43', '49', '30'),
(10, '2020-21', '60+6EWS', '61', '55', '47', '59'),
(11, '2021-22', '60+6EWS', '23', '58', '37', '67');

-- --------------------------------------------------------

--
-- Table structure for table `books_category`
--

CREATE TABLE `books_category` (
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_category`
--

INSERT INTO `books_category` (`category`) VALUES
('DCME'),
('DECE'),
('DME'),
('DCE'),
('GENERAL');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `branch_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_code`, `branch_img`) VALUES
(12, 'Civil Engineering', 'DCE', 'WhatsApp Image 2023-03-30 at 8.00.53 PM.jpeg'),
(13, 'Computer Science', 'CSE', 'WhatsApp Image 2023-03-30 at 8.00.52 PM.jpeg'),
(14, 'ELECTRICAL&COMMUNICATION ENGINEERING', 'DECE', 'WhatsApp Image 2023-03-30 at 8.00.54 PM.jpeg'),
(15, 'MECHANICAL ENGINEERING', 'DME', 'WhatsApp Image 2023-03-30 at 8.00.53 PM (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `completed_events`
--

CREATE TABLE `completed_events` (
  `id` int(11) NOT NULL,
  `Event_name` varchar(999) NOT NULL,
  `About_Event` varchar(999) NOT NULL,
  `Event_conducted_by` varchar(999) NOT NULL,
  `Event_conducted_date` date NOT NULL,
  `eve_imgs` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed_events`
--

INSERT INTO `completed_events` (`id`, `Event_name`, `About_Event`, `Event_conducted_by`, `Event_conducted_date`, `eve_imgs`) VALUES
(1, 'Image processing', ' Image processing is a field of study that involves analyzing, manipulating, and enhancing digital images using various mathematical algorithms and techniques. It encompasses a wide range of tasks such as image restoration, image compression, image enhancement, object detection and recognition, and image segmentation. Image processing has applications in various fields including medicine, astronomy, remote sensing, and computer vision. The goal of image processing is to extract meaningful information from digital images to aid in decision-making processes.', 'K.Janakamma', '2023-03-04', 'WhatsApp Image 2023-03-31 at 1.21.57 AM.jpeg'),
(2, 'Womens day', 'International Womens Day is celebrated on March 8th every year to recognize the social, economic, cultural, and political achievements of women around the world. It is a day to acknowledge the progress that has been made towards gender equality and to raise awareness about the ongoing struggles faced by women. The day also serves as a call to action to accelerate gender parity and to promote womens rights. The theme of International Womens Day changes every year, and various events and activities are organized globally to celebrate the day and to support womens empowerment.', 'K.Janakamma', '2023-03-09', 'WhatsApp Image 2023-03-31 at 1.30.44 AM.jpeg'),
(3, 'Youth festival', 'A youth festival is an event that is typically organized to celebrate and showcase the talent, creativity, and cultural diversity of young people. These festivals can take many forms, ranging from music, dance, and theater performances to art exhibitions, poetry slams, and sports competitions. Youth festivals provide young people with an opportunity to express themselves, to connect with peers who share similar interests, and to gain exposure to new ideas and experiences. These events can also serve as a platform for community building and social change, as they often involve workshops, seminars, and discussions on topics such as education, social justice, and environmental sustainability. Youth festivals are held in various countries and regions around the world, and they can be organized by schools, universities, NGOs, and other organizations', 'Harish', '2023-01-09', 'WhatsApp Image 2023-03-31 at 1.41.40 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `CSE_alumni`
--

CREATE TABLE `CSE_alumni` (
  `id` int(11) NOT NULL,
  `pin_num` varchar(255) NOT NULL,
  `alumni_name` varchar(255) NOT NULL,
  `alumni_quali` varchar(255) NOT NULL,
  `workor` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `batch` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CSE_alumni`
--

INSERT INTO `CSE_alumni` (`id`, `pin_num`, `alumni_name`, `alumni_quali`, `workor`, `Designation`, `mobile`, `email`, `photo`, `batch`) VALUES
(1, '16155-CM-004', 'S Natraj', '-', 'studying', '-', '9347945214', '-', '', '16 Batch'),
(2, '17155-CM-010', 'A Tulasi Rami Reddy', '-', 'Working', '-', '8121869989', '', '', '17 Batch');

-- --------------------------------------------------------

--
-- Table structure for table `CSE_dept`
--

CREATE TABLE `CSE_dept` (
  `heading` varchar(20) DEFAULT NULL,
  `rdata` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CSE_dept`
--

INSERT INTO `CSE_dept` (`heading`, `rdata`) VALUES
('aim', 'The aim of the Computer Science and Engineering (CSE) department is to provide students with a comprehensive education that prepares them to become innovative professionals in the field of computer science. We strive to equip students with the skills and knowledge needed to design and develop advanced computing systems, applications, and solutions, while promoting ethical and responsible computing practices'),
('mission', 'The mission of the Computer Science and Engineering (CSE) department is to provide students with a transformative education that prepares them to become innovative professionals in the field of computer science. We strive to create a dynamic learning environment that fosters creativity, critical thinking, and collaboration while promoting ethical and socially responsible computing practices. Our mission is to equip students with the knowledge, skills, and values needed to design and develop advanced computing systems and solutions that meet the evolving needs of society'),
('goal', 'The goal of the Computer Science and Engineering (CSE) department is to provide students with a comprehensive education that prepares them to become proficient in the fundamentals of computer science, while fostering a culture of creativity, critical thinking, and collaboration. We strive to equip students with the knowledge, skills, and values needed to design and develop advanced computing systems and applications that address complex technological challenges, and to prepare them for successful careers in the field.'),
('cur', '../images/Screenshot 2023-03-31 232157.png,../images/Screenshot 2023-03-31 232256.png,../images/Screenshot 2023-03-31 232405.png'),
('C-20 curriculum', '../pdf/C-20 COMPUTERS CURRICULAM.doc');

-- --------------------------------------------------------

--
-- Table structure for table `CSE_staff`
--

CREATE TABLE `CSE_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CSE_staff`
--

INSERT INTO `CSE_staff` (`id`, `faculty_name`, `faculty_post`, `faculty_quali`, `experience`, `Gender`, `DOB`, `faculty_img`, `faculty_details`) VALUES
(1, 'K V Nagabhusanam', 'HOD', 'no-details', '23 years', 'male', '2021-02-10', 'nagabhsanam sir.jpg', '<b>Mobile:</b>9246767076'),
(2, 'K.Suguna', 'Senior Lecturer', 'm.tech', '22 years', 'female', '2010-02-09', 'suguna madm.cse.jpg', '<b> mail:-</b>kasasuguna@gmail.com\r\n<b>mobile number:-</b>9866886051'),
(3, 'K.R.Ayyappa Prasad', 'L/CME', 'm.tech', '11YEARS', 'male', '2023-04-21', 'ayyapa.jpg', '<b> mail:-</b> ayyappa_prasad@yahoo.com\r\n<b>mobile number:-</b>9030675257'),
(4, 'K.Chandrakanth', 'L/CME', 'm.tech', '10 years', 'male', '2023-04-15', 'chndrakanth.jpg', '<b>mail:-</b>luckykck@gmail.com\r\n<b>mobile number:-</b>9491311693'),
(5, 'T.Bhavya', 'CL/CME', 'm.tech', '14 YEARS', 'female', '2023-04-02', 'BHAVYA MADAM.CSE.jpg', '<b>mail:-</b>t.bhavya018@gmail.com\r\n<b>mobile:-</b>7569718584'),
(6, 'M.Suvarthamma', 'CL/CME', 'm.tech', '12 years', 'female', '2023-04-08', 'suvarthamma madam.jpg', '<b>mail:-</b>suvartha.lec6@gmail.com\r\n<b>mobile :-</b>9603104041');

-- --------------------------------------------------------

--
-- Table structure for table `DCE`
--

CREATE TABLE `DCE` (
  `bookid` int(11) DEFAULT NULL,
  `book_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `author_name` varchar(30) DEFAULT NULL,
  `scheme` varchar(15) DEFAULT NULL,
  `book_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DCE_alumni`
--

CREATE TABLE `DCE_alumni` (
  `id` int(11) NOT NULL,
  `pin_num` varchar(255) NOT NULL,
  `alumni_name` varchar(255) NOT NULL,
  `alumni_quali` varchar(255) NOT NULL,
  `workor` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `batch` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DCE_alumni`
--

INSERT INTO `DCE_alumni` (`id`, `pin_num`, `alumni_name`, `alumni_quali`, `workor`, `Designation`, `mobile`, `email`, `photo`, `batch`) VALUES
(2, 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', '', 'nodata'),
(3, 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', '', 'nodata');

-- --------------------------------------------------------

--
-- Table structure for table `DCE_dept`
--

CREATE TABLE `DCE_dept` (
  `heading` varchar(20) DEFAULT NULL,
  `rdata` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DCE_dept`
--

INSERT INTO `DCE_dept` (`heading`, `rdata`) VALUES
('aim', 'The aim of the Civil Engineering department is to provide students with a high-quality education that prepares them to design, build, and maintain safe and sustainable infrastructure for communities, while fostering a culture of continuous learning and ethical engineering practices.'),
('mission', 'The mission of the Civil Engineering department is to provide a rigorous and engaging educational experience that prepares students to become competent and innovative professionals in the field of civil engineering. We are committed to promoting sustainable and resilient infrastructure development that meets the needs of communities and improves quality of life. Our mission is to cultivate a culture of research and scholarship that contributes to the advancement of knowledge and the development of new technologies, while fostering a commitment to ethical and socially responsible engineering practices'),
('goal', 'The goal of the Civil Engineering department is to provide students with a comprehensive education that prepares them to become proficient in the fundamentals of civil engineering, while fostering a culture of creativity, critical thinking, and collaboration. We strive to equip students with the knowledge, skills, and values needed to address complex engineering challenges and to prepare them for successful careers in the field'),
('cur', '../images/WhatsApp Image 2023-03-31 at 11.15.07 PM (1).jpeg,../images/WhatsApp Image 2023-03-31 at 11.15.07 PM.jpeg,../images/WhatsApp Image 2023-03-31 at 11.15.08 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `DCE_staff`
--

CREATE TABLE `DCE_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DCE_staff`
--

INSERT INTO `DCE_staff` (`id`, `faculty_name`, `faculty_post`, `faculty_quali`, `experience`, `Gender`, `DOB`, `faculty_img`, `faculty_details`) VALUES
(2, 'K M Velayudha Chari', 'HOD', '.', '24year', 'male', '2023-04-01', '', '<b>Mobile:</b>9441295878'),
(3, 'D.Manjula', 'L/C', 'm.tech', '9 years', 'female', '2023-04-14', 'manjula madam.c', '<b>mail:-</b>d.manjulareddy@gmail.com\r\n<b>mobile:-</b>7382264474'),
(4, 'M.Kanaka', 'CL/C', 'm.tech', '10 years', 'female', '2023-03-30', 'kanaka madam.jpg', '<b>mail:-</b> no data\r\n<b>mobile:-</b>no data'),
(5, 'N.Sagar', 'L/CE', 'M.Sc', '12 years', 'male', '2023-07-28', '', ''),
(6, 'C.Venkatesh', 'L/CE', 'M.Sc', '12 years', 'male', '2023-07-27', '', ''),
(7, 'B.Chandrababu', 'L/CE', 'M.Sc', '12 years', 'male', '2023-07-21', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `DCME`
--

CREATE TABLE `DCME` (
  `bookid` int(11) DEFAULT NULL,
  `book_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `author_name` varchar(30) DEFAULT NULL,
  `scheme` varchar(15) DEFAULT NULL,
  `book_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DCME`
--

INSERT INTO `DCME` (`bookid`, `book_name`, `publisher_name`, `author_name`, `scheme`, `book_img`) VALUES
(1, 'Basics of Computer Engineering', 'VGS', 'KV Nagabhushanam', 'C-20', '../images/bce.jpeg'),
(2, 'Programming in C', 'VGS', 'KV Nagabhushanam', 'C-20', '../images/PROGRAMMING IN C.jpeg'),
(3, 'Digital Electronics', 'Falcon', 'J.V.Suresh Babu', 'C-20', '../images/de.jpeg'),
(4, 'Operating System', 'Falcon', 'Sripal', 'C-20', '../images/os.jpeg'),
(5, 'Data Structure through C', 'Falcon', 'N.Nagendra reddy-M.Sangeetha', 'C-20', '../images/ds.jpeg'),
(6, 'DBMS', 'Falcon', 'A.Madhavi-M.Sangeetha', 'C-20', '../images/WhatsApp Image 2023-06-27 at 5.33.40 PM.jpeg'),
(7, 'IME', 'Falcon', 'S.Balajee-S.Divya-S.Dinesh', 'C-20', '../images/ime.jpeg'),
(8, 'Java Programming ', 'Falcon', 'M.Jansi Rani', 'C-20', '../images/java.jpeg'),
(9, 'Software Engineering', 'Falcon', 'CH.Shanthi Swarupa', 'C-20', '../images/se.jpeg'),
(10, 'Python Programming ', 'Falcon', 'CH.Shanthi Swarupa', 'C-20', '../images/pythion.jpeg'),
(11, 'Internet of Things ', 'Falcon', 'CH.Shanthi Swarupa', 'C-20', '../images/iot.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `DECE`
--

CREATE TABLE `DECE` (
  `bookid` int(11) DEFAULT NULL,
  `book_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `author_name` varchar(30) DEFAULT NULL,
  `scheme` varchar(15) DEFAULT NULL,
  `book_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DECE`
--

INSERT INTO `DECE` (`bookid`, `book_name`, `publisher_name`, `author_name`, `scheme`, `book_img`) VALUES
(1, 'ECPS', 'Falcon', 'J.V.Suresh Babu-C.Lalitha', 'C-20', '../images/ecps.jpeg'),
(2, 'EEE', 'N.Dhanunjaya', 'N.Dhanunjaya', 'C-20', '../images/eee.jpeg'),
(3, 'Electronic Circuits-I', 'Radiant', 'B.Murali Krishna', 'C-20', '../images/ec1.jpeg'),
(4, 'Digital Electronics', 'M.G.B', 'C.Neeraja-N.Dhanunjaya', 'C-20', '../images/de1.jpeg'),
(5, 'Network Analysis', 'Falcon', 'K.Obulesu', 'C-20', '../images/na.jpeg'),
(6, 'EMCG', 'Falcon', 'G.Nageswara Rao', 'C-20', '../images/emcg.jpeg'),
(7, 'Electronic Circuits-Il', 'Falcon', 'G.Nageswara Rao', 'C-20', '../images/ec2.jpeg'),
(8, 'MicroProcessors', 'Falcon', 'S.Mahaboob Shareef', 'C-20', '../images/mp.jpeg'),
(9, 'MSCS', 'Falcon', 'G.Nageswara Rao', 'C-20', '../images/mscs.jpeg'),
(10, 'Programming in C and Matlab', 'Falcon', 'B.Sindhu-G.Brahmani Chowdary', 'C-20', '../images/cin mat lab.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `DECE_alumni`
--

CREATE TABLE `DECE_alumni` (
  `id` int(11) NOT NULL,
  `pin_num` varchar(255) NOT NULL,
  `alumni_name` varchar(255) NOT NULL,
  `alumni_quali` varchar(255) NOT NULL,
  `workor` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `batch` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DECE_alumni`
--

INSERT INTO `DECE_alumni` (`id`, `pin_num`, `alumni_name`, `alumni_quali`, `workor`, `Designation`, `mobile`, `email`, `photo`, `batch`) VALUES
(1, 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', '', 'nodata'),
(2, 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', '', 'nodata');

-- --------------------------------------------------------

--
-- Table structure for table `DECE_dept`
--

CREATE TABLE `DECE_dept` (
  `heading` varchar(20) DEFAULT NULL,
  `rdata` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DECE_dept`
--

INSERT INTO `DECE_dept` (`heading`, `rdata`) VALUES
('aim', 'To provide students with a high-quality education that equips them with the knowledge, skills, and values needed to design and develop innovative electronic and communication systems'),
('mission', 'To prepare students to become competent and innovative professionals in the field of electronics and communication engineering, while promoting research and scholarship that contributes to the advancement of knowledge and the development of new technologies'),
('goal', 'To equip students with the knowledge, skills, and values needed to address complex engineering challenges and to prepare them for successful careers in electronics and communication engineering and related fields'),
('cur', '../images/Screenshot 2023-03-31 233716.png,../images/Screenshot 2023-03-31 233739.png,../images/Screenshot 2023-03-31 233810.png,../images/Screenshot 2023-03-31 234007.png,../images/Screenshot 2023-03-31 234213.png');

-- --------------------------------------------------------

--
-- Table structure for table `DECE_staff`
--

CREATE TABLE `DECE_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DME`
--

CREATE TABLE `DME` (
  `bookid` int(11) DEFAULT NULL,
  `book_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `author_name` varchar(30) DEFAULT NULL,
  `scheme` varchar(15) DEFAULT NULL,
  `book_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DME_alumni`
--

CREATE TABLE `DME_alumni` (
  `id` int(11) NOT NULL,
  `pin_num` varchar(255) NOT NULL,
  `alumni_name` varchar(255) NOT NULL,
  `alumni_quali` varchar(255) NOT NULL,
  `workor` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(999) NOT NULL,
  `batch` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DME_alumni`
--

INSERT INTO `DME_alumni` (`id`, `pin_num`, `alumni_name`, `alumni_quali`, `workor`, `Designation`, `mobile`, `email`, `photo`, `batch`) VALUES
(1, 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', '', 'nodata'),
(2, 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', 'nodata', '', 'nodata');

-- --------------------------------------------------------

--
-- Table structure for table `DME_dept`
--

CREATE TABLE `DME_dept` (
  `heading` varchar(20) DEFAULT NULL,
  `rdata` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DME_dept`
--

INSERT INTO `DME_dept` (`heading`, `rdata`) VALUES
('aim', 'To provide students with a comprehensive education that prepares them to become competent and innovative professionals in the field of mechanical engineering'),
('mission', 'To provide students with a transformative educational experience that prepares them to be leaders in the field of mechanical engineering'),
('goal', 'To equip students with the knowledge, skills, and values needed to address complex engineering challenges and to prepare them for successful careers in mechanical engineering and related fields'),
('cur', '../images/Screenshot 2023-03-31 234523.png,../images/Screenshot 2023-03-31 234533.png,../images/Screenshot 2023-03-31 234548.png,../images/Screenshot 2023-03-31 234603.png,../images/Screenshot 2023-03-31 234626.png');

-- --------------------------------------------------------

--
-- Table structure for table `DME_staff`
--

CREATE TABLE `DME_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `DME_staff`
--

INSERT INTO `DME_staff` (`id`, `faculty_name`, `faculty_post`, `faculty_quali`, `experience`, `Gender`, `DOB`, `faculty_img`, `faculty_details`) VALUES
(1, 'A.C.Kishore Kumar', 'Head of Mecanical section', 'M.Sc', '23 years', 'male', '2023-07-19', '', ''),
(2, 'R.Jayachandra', 'SL/ME', 'M.Sc', '23 years', 'male', '2023-07-06', '', ''),
(4, 'P.Haritha', 'L/ME', 'M.Sc', '12 years', 'female', '2023-07-08', '', ''),
(5, 'T.T.Kesavaiah', 'L/ME', 'M.Sc', '12 years', 'male', '2023-07-13', '', ''),
(6, 'N.Srujana', 'SL/ME', 'M.Sc', '12 years', 'female', '2023-07-28', '', ''),
(7, 'D.Madhu Babu', 'L/ME', 'M.Sc', '12 years', 'male', '2023-07-13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure`
--

CREATE TABLE `fee_structure` (
  `sno` int(11) NOT NULL,
  `fee_description` varchar(500) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee_structure`
--

INSERT INTO `fee_structure` (`sno`, `fee_description`, `amount`) VALUES
(1, 'Tution Fee', '2000'),
(2, 'Course Work Fee', ' 300'),
(3, 'Games Fee', '100'),
(4, 'Association Fee', '100'),
(5, 'Laboratory and  Workshop Fee', '900'),
(6, 'Library Non-Refundable Fee', '400'),
(7, 'Admission Fee', '100'),
(9, 'Syllabus Book', ' 100'),
(10, 'Board Recognition fee', ' 250'),
(11, 'Alumni Fee (only at the time of admissions)', ' 100'),
(12, 'Service Fee per year', ' 300'),
(13, 'TECH Fest fee per year', '50');

-- --------------------------------------------------------

--
-- Table structure for table `GENERAL`
--

CREATE TABLE `GENERAL` (
  `bookid` int(11) DEFAULT NULL,
  `book_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `author_name` varchar(30) DEFAULT NULL,
  `scheme` varchar(15) DEFAULT NULL,
  `book_img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `General_department_staff`
--

CREATE TABLE `General_department_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `General_department_staff`
--

INSERT INTO `General_department_staff` (`id`, `faculty_name`, `faculty_post`, `faculty_quali`, `experience`, `Gender`, `DOB`, `faculty_img`, `faculty_details`) VALUES
(2, 'C Venkatesh', 'Lecturer', 'no-details', 'no-details', 'male', '2023-03-30', '', '<b>Mobile:</b>\r\n<b>Mail:</b>'),
(4, 'G.Srinu Babu', 'SL/Maths', 'M.Sc', '12 years', 'male', '2023-07-26', '', 'mobile:-9502078159\r\nmail:-srinubabu.nag@gamil.com'),
(5, 'M.Raghavendra', 'L/physics', 'M.Sc', '28 years', 'male', '2023-07-28', '', 'mobile:-98499662696\r\nmail:-raghav.madhavi@yahoo.com'),
(6, 'A.Jemimah', 'L/English', 'MA[English]', '01 year', 'female', '1997-06-01', '', 'mobile:-9912104698\r\nmail:-jemimah.arshapoga@gamil.com'),
(7, 'G.Jyothi Lakshmi', 'Librabrian', 'M.A , M.L.I.Sc', '23 years', 'female', '1990-10-17', '', 'mobile:-9573455404\r\nmail:-g.jyothilakshmi73@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `indexdata`
--

CREATE TABLE `indexdata` (
  `id` int(11) NOT NULL,
  `clg_name` varchar(255) NOT NULL,
  `clg_place` varchar(255) NOT NULL,
  `clg_logo` varchar(255) NOT NULL,
  `clg_img` varchar(255) NOT NULL,
  `about_clg` mediumtext NOT NULL,
  `pro_imgs` varchar(999) NOT NULL,
  `extra_imgs` varchar(999) NOT NULL,
  `vision_clg` mediumtext NOT NULL,
  `mission_clg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indexdata`
--

INSERT INTO `indexdata` (`id`, `clg_name`, `clg_place`, `clg_logo`, `clg_img`, `about_clg`, `pro_imgs`, `extra_imgs`, `vision_clg`, `mission_clg`) VALUES
(143, 'Goverment Polytechnic', 'Pillaripattu', 'collegelogo.jpeg', 'images/index_img/WhatsApp Image 2023-03-30 at 4.33.18 PM.jpeg,images/index_img/WhatsApp Image 2023-03-30 at 4.33.17 PM (1).jpeg,images/index_img/WhatsApp Image 2023-03-30 at 4.33.17 PM.jpeg', 'Government Polytechnic is a technical college located in Pillaripattu, near Puttur in the state of Andhra Pradesh, India. The college was established in 2008 with the aim of providing quality technical education to students in the region.\r\n\r\n\r\nAt Government Polytechnic, students benefit from experienced faculty, state-of-the-art facilities, and a supportive learning environment. The college also offers opportunities for hands-on learning through internships, industry visits, and practical training, enabling students to apply their knowledge in real-world settings.\r\n\r\nLocated in a beautiful and peaceful area, Government Polytechnic is an ideal place for students who seek a quality technical education in a serene environment. The college is committed to providing an inclusive and supportive learning community that empowers students to achieve their full potential and become leaders in their chosen fields', 'images/index_img/WhatsApp Image 2023-03-31 at 1.45.52 AM (1).jpeg,images/index_img/WhatsApp Image 2023-03-30 at 7.53.51 PM.jpeg,images/index_img/WhatsApp Image 2023-03-30 at 7.45.52 PM.jpeg', 'images/index_img/WhatsApp Image 2023-01-09 at 5.19.57 PM.jpeg,images/index_img/WhatsApp Image 2023-01-09 at 7.21.08 PM.jpeg,images/index_img/WhatsApp Image 2023-01-09 at 7.27.19 PM.jpeg', 'To be a leading institution of technical education that produces skilled and innovative professionals who contribute to the socio-economic development of the region and the nation.', 'To provide quality technical education that meets the needs of students and industries.');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `roomname` varchar(30) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`roomname`, `image`) VALUES
('library', '../images/WhatsApp Image 2023-03-31 at 11.57.05 AM.jpeg,../images/WhatsApp Image 2023-03-31 at 11.57.03 AM.jpeg'),
('Drawinghall', '../images/WhatsApp Image 2023-03-31 at 11.57.40 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `labsworkshop`
--

CREATE TABLE `labsworkshop` (
  `labname` varchar(30) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labsworkshop`
--

INSERT INTO `labsworkshop` (`labname`, `image`) VALUES
('CAD', '../images/WhatsApp Image 2023-03-31 at 1.47.58 AM.jpeg,../images/WhatsApp Image 2023-03-31 at 1.47.57 AM.jpeg'),
('Computer_Lab', '../images/WhatsApp Image 2023-03-31 at 8.51.30 AM (2).jpeg,../images/WhatsApp Image 2023-03-31 at 8.51.30 AM (1).jpeg,../images/WhatsApp Image 2023-03-31 at 8.51.30 AM.jpeg'),
('Civil_lab', '../images/WhatsApp Image 2023-03-31 at 11.41.51 AM.jpeg,../images/WhatsApp Image 2023-03-31 at 11.41.50 AM.jpeg,../images/WhatsApp Image 2023-03-31 at 11.41.50 AM (1).jpeg,../images/WhatsApp Image 2023-03-31 at 11.41.49 AM.jpeg,../images/WhatsApp Image 2023-03-31 at 11.41.48 AM.jpeg,../images/WhatsApp Image 2023-03-31 at 11.41.47 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Office_staff`
--

CREATE TABLE `Office_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Office_staff`
--

INSERT INTO `Office_staff` (`id`, `faculty_name`, `faculty_post`, `faculty_quali`, `experience`, `Gender`, `DOB`, `faculty_img`, `faculty_details`) VALUES
(3, 'S.V.Kumar', 'Principal', 'M.A.B.Ed', '12 years', 'male', '2023-07-13', '', ''),
(4, 'R.Hanumanth Rao', 'Administrative Officer', 'M.A.B.Ed', '15 years', 'male', '2023-07-14', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Other_staff`
--

CREATE TABLE `Other_staff` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_post` varchar(255) NOT NULL,
  `faculty_quali` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `faculty_img` varchar(255) NOT NULL,
  `faculty_details` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `pinno` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `recriutedyear` varchar(10) NOT NULL,
  `companylogo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`pinno`, `name`, `department`, `companyname`, `recriutedyear`, `companylogo`) VALUES
('20155-CM-046', 'A Tejasri', 'DCME', 'NS Instruments (sricity)', '2023', '../images/'),
('20155-CM-005', 'K Bhargavi', 'DCME', 'NS Instruments (sricity)', '2023', '../images/'),
('20155-CM-022', 'A Hemasri', 'DCME', 'NS Instruments (sricity)', '2023', '../images/'),
('20155-M-007', 'B.Dhanush', 'DME', 'BLUE JAY NUTS', '2023', '../images/'),
('20155-M-020', 'G.Venkatesh', 'DME', 'BLUE JAY NUTS', '2023', '../images/'),
('20155-M-008', 'B.Suneel', 'DME', 'BLUE JAY NUTS', '2023', '../images/'),
('20155-C-003', 'A.Manikanta', 'DCE', 'M/S ASIAN CONSTRUCTIONS', '2023', '../images/'),
('20155-C-011', 'P.Sarath', 'DCE', 'M/S ASIAN CONSTRUCTIONS', '2023', '../images/');

-- --------------------------------------------------------

--
-- Table structure for table `project_ideas`
--

CREATE TABLE `project_ideas` (
  `id` int(11) NOT NULL,
  `Student_name` varchar(999) NOT NULL,
  `Email` varchar(999) NOT NULL,
  `College_name` varchar(999) NOT NULL,
  `Pin_num` varchar(999) NOT NULL,
  `Project_title` varchar(999) NOT NULL,
  `Project_image` varchar(999) NOT NULL,
  `Project_description` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_ideas`
--

INSERT INTO `project_ideas` (`id`, `Student_name`, `Email`, `College_name`, `Pin_num`, `Project_title`, `Project_image`, `Project_description`) VALUES
(11, 'K.Vishnu vardhan,K.Ganesh', 'vishnuvardhan4741@gmail.com', 'Government Polytechnic, Pillaripattu ', '21155-CM-064', 'DARE TO PROTECT TANZANITE', 'IMG20230330194941-01.jpeg', 'this is a game made by K.Vishnu,K.Ganesh using Unity Engine 2021 edition and for scripting we use visual studio 2022 version \r\nthe concept of the game is protecting a rear stone from enemies and reaching the destination in time.'),
(12, 'MADHAN ', 'kmadhanreddy1@gmail.com', 'Pillaripattu', '21155-Cm-029', 'Online calculator ', 'calculator-business-report-18182725.jpg', 'An online calculator is a digital tool that performs arithmetic calculations on numbers, similar to a physical calculator. In this project, the goal is to design and build an online calculator that can be accessed through a web browser.\r\n\r\nThe online calculator will be built using web development technologies such as HTML, CSS, and JavaScript. It will have a user-friendly interface that allows users to input numbers and select operations to perform. The calculator will also have buttons for commonly used functions such as square root and percentage.\r\n\r\nThe calculations will be performed using JavaScript code, which will handle the mathematical logic of the calculator. The code will also handle error checking and provide appropriate feedback to the user if an invalid input is detected.\r\n\r\nThe online calculator will be hosted on a web server, and users will be able to access it through a web browser on their computer or mobile device. The calculator will be responsive, meaning that it will adjust to different screen sizes and device types.\r\n\r\nThe final product will be a functional online calculator that can be used for basic arithmetic operations. It will be accessible to anyone with an internet connection and a web browser, making it a useful tool for students, professionals, and anyone who needs to perform quick calculations on the go. The project will be a great learning experience for those interested in web development and programming, and it can be expanded upon to add more advanced features in the future.\r\n\r\n\r\n'),
(13, 'MADHAN ', 'kmadhanreddy1@gmail.com', 'Pillaripattu', '21155-Cm-029', 'Snake game', 'images (1).jpeg', 'Digital Calculator Project.\r\n\r\n\r\nkmadhanreddy1@gmail.com\r\nDigital calculator project discription \r\n\r\nA digital calculator is a device that performs arithmetic operations on numbers, such as addition, subtraction, multiplication, and division. In this digital calculator project, the goal is to design and build a basic calculator using electronic components and programming.\r\n\r\nThe hardware components required for the calculator include a microcontroller, a keypad for input, a display for output, and power supply. The microcontroller will be responsible for reading the input from the keypad, performing the calculations, and displaying the results on the display.\r\n\r\nThe software for the calculator will be written in a programming language such as C or C++, and will implement the basic arithmetic operations mentioned above. The software will also handle error checking and provide appropriate feedback to the user if an invalid input is detected.\r\n\r\nThe design of the calculator will be simple and user-friendly, with large buttons for each number and operation, and a clear display to show the results. The calculator will be powered by batteries or a wall adapter, depending on the needs of the user.\r\n\r\nThe final product will be a functional digital calculator that can be used for basic arithmetic operations. It will be a great learning experience for those interested in electronics and programming, and it can also be a useful tool for students and professionals who need to perform quick calculations.\r\n\r\n\r\n\r\n\r\nkmadhanreddy1@gmail.com\r\nOnline calculator project discription \r\n\r\nAn online calculator is a digital tool that performs arithmetic calculations on numbers, similar to a physical calculator. In this project, the goal is to design and build an online calculator that can be accessed through a web browser.\r\n\r\nThe online calculator will be built using web development technologies such as HTML, CSS, and JavaScript. It will have a user-friendly interface that allows users to input numbers and select operations to perform. The calculator will also have buttons for commonly used functions such as square root and percentage.\r\n\r\nThe calculations will be performed using JavaScript code, which will handle the mathematical logic of the calculator. The code will also handle error checking and provide appropriate feedback to the user if an invalid input is detected.\r\n\r\nThe online calculator will be hosted on a web server, and users will be able to access it through a web browser on their computer or mobile device. The calculator will be responsive, meaning that it will adjust to different screen sizes and device types.\r\n\r\nThe final product will be a functional online calculator that can be used for basic arithmetic operations. It will be accessible to anyone with an internet connection and a web browser, making it a useful tool for students, professionals, and anyone who needs to perform quick calculations on the go. The project will be a great learning experience for those interested in web development and programming, and it can be expanded upon to add more advanced features in the future.\r\n\r\n\r\n\r\n\r\nkmadhanreddy1@gmail.com\r\nSnake game description \r\n\r\nThe Snake game is a classic arcade game that originated in the late 1970s and early 1980s. In this game, the player controls a snake that moves around a game board, eating food while avoiding obstacles and its own tail. The goal of the game is to grow the snake as long as possible without running into anything.\r\n\r\nIn a modern implementation of the game, the player controls the snake using the arrow keys on their keyboard or by swiping on a touch screen device. The game board is typically a rectangular grid, with the snake starting in the middle and food randomly placed around the board. As the snake eats food, its body grows longer, making it more difficult to avoid obstacles.\r\n\r\nThe snake is controlled by a set of rules that determine how it moves around the board. The snake moves in a straight line until the player changes its direction, at which point it turns 90 degrees. If the snake runs into a wall or an obstacle, such as its own tail, the game is over.\r\n\r\nThe game also features a scoring system, with points awarded for eating food and growing the snake. As the game progresses, the snake moves faster, making it more difficult to avoid obstacles and continue growing.\r\n\r\nThe Snake game is a simple yet addictive game that has been popular for decades. It is often used as a way to introduce programming concepts, such as game development and algorithm design, to beginners.'),
(14, 'Vishnu', 'vishnu123@gmail.com', 'Pillaripattu', '21155-Cm-064', 'Student login ', 'images (2).jpeg', 'A student login page is a web page that provides access for students to an online learning platform or educational system. The login page typically requires a unique username and password that the student has been provided by the educational institution.\r\n\r\nThe student login page typically features a simple and easy-to-use design, with fields for the student to enter their login credentials. The page may also include links to password reset or account recovery options for students who have forgotten their login information.'),
(15, 'Jagadesh', 'jagadesh0@gmail.com', 'Pillaripattu', '21155-Ec-039', 'Led circuit ', 'images (3).jpeg', 'In electronics, an LED circuit or LED driver is an electrical circuit used to power a light-emitting diode. The circuit must provide sufficient current to light the LED at the required brightness, but must limit the current to prevent damaging the LED.');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pswd`) VALUES
(1, 'Harish', 'harishgb3805@gmail.com', 'harish');

-- --------------------------------------------------------

--
-- Table structure for table `upcomming_events`
--

CREATE TABLE `upcomming_events` (
  `id` int(11) NOT NULL,
  `Event_name` varchar(255) NOT NULL,
  `Event_conducting_on` date NOT NULL,
  `Event_conducting_by` varchar(255) NOT NULL,
  `Event_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcomming_events`
--

INSERT INTO `upcomming_events` (`id`, `Event_name`, `Event_conducting_on`, `Event_conducting_by`, `Event_details`) VALUES
(0, 'Farewell', '2023-04-14', 'Students', 'A college farewell event typically takes place on the last day of college for the outgoing batch of students. It can be held within the college campus . The event includes speeches from the outgoing batch of students, cultural performances, awards and recognition for outstanding students, refreshments, and photography to capture memories. Souvenirs may also be provided to students as a token of remembrance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed_events`
--
ALTER TABLE `completed_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CSE_alumni`
--
ALTER TABLE `CSE_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CSE_staff`
--
ALTER TABLE `CSE_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DCE_alumni`
--
ALTER TABLE `DCE_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DCE_staff`
--
ALTER TABLE `DCE_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DECE_alumni`
--
ALTER TABLE `DECE_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DECE_staff`
--
ALTER TABLE `DECE_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DME_alumni`
--
ALTER TABLE `DME_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `DME_staff`
--
ALTER TABLE `DME_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structure`
--
ALTER TABLE `fee_structure`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `General_department_staff`
--
ALTER TABLE `General_department_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indexdata`
--
ALTER TABLE `indexdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Office_staff`
--
ALTER TABLE `Office_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Other_staff`
--
ALTER TABLE `Other_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_ideas`
--
ALTER TABLE `project_ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomming_events`
--
ALTER TABLE `upcomming_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `completed_events`
--
ALTER TABLE `completed_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `CSE_alumni`
--
ALTER TABLE `CSE_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `CSE_staff`
--
ALTER TABLE `CSE_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `DCE_alumni`
--
ALTER TABLE `DCE_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `DCE_staff`
--
ALTER TABLE `DCE_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `DECE_alumni`
--
ALTER TABLE `DECE_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `DECE_staff`
--
ALTER TABLE `DECE_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DME_alumni`
--
ALTER TABLE `DME_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `DME_staff`
--
ALTER TABLE `DME_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fee_structure`
--
ALTER TABLE `fee_structure`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `General_department_staff`
--
ALTER TABLE `General_department_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `indexdata`
--
ALTER TABLE `indexdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `Office_staff`
--
ALTER TABLE `Office_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Other_staff`
--
ALTER TABLE `Other_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_ideas`
--
ALTER TABLE `project_ideas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
