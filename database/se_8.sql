-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_8`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `approve_id` int(10) NOT NULL,
  `approve_date` date NOT NULL,
  `approve_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`approve_id`, `approve_date`, `approve_reason`) VALUES
(1, '2022-03-05', ''),
(2, '2022-03-01', ''),
(134, '0000-00-00', 'ไม่สมควร'),
(304, '0000-00-00', 'ไม่สมควร'),
(320, '0000-00-00', 'ไม่สมควร'),
(337, '0000-00-00', 'ไม่สมควร'),
(483, '0000-00-00', 'ไม่สมควร'),
(640, '0000-00-00', 'ไม่สมควร'),
(666, '0000-00-00', 'ไม่สมควร'),
(705, '0000-00-00', 'ไม่สมควร'),
(787, '0000-00-00', 'ไม่สมควร'),
(826, '0000-00-00', 'ไม่สมควร'),
(842, '0000-00-00', 'ไม่สมควร');

-- --------------------------------------------------------

--
-- Table structure for table `detail_company`
--

CREATE TABLE `detail_company` (
  `dc_id` int(3) NOT NULL,
  `dc_name` varchar(50) NOT NULL,
  `dc_position` varchar(100) DEFAULT NULL,
  `dc_department` varchar(100) DEFAULT NULL,
  `dc_num` varchar(20) DEFAULT NULL,
  `dc_skills` varchar(100) DEFAULT NULL,
  `dc_nature` varchar(100) DEFAULT NULL,
  `dc_pay` varchar(100) NOT NULL,
  `dc_room` varchar(50) NOT NULL,
  `dc_benefit` varchar(100) DEFAULT NULL,
  `dc_select` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_company`
--

INSERT INTO `detail_company` (`dc_id`, `dc_name`, `dc_position`, `dc_department`, `dc_num`, `dc_skills`, `dc_nature`, `dc_pay`, `dc_room`, `dc_benefit`, `dc_select`) VALUES
(1, 'Drone Academy Thailand ', 'Computer Programmer, Flying Robot, Internet of Things, AI Flying Robot\n', NULL, '5', 'ไม่จำเป็นต้องรู้มาก่อนมาศึกษาภายหลังได้ Python, C/C++, PHP, Golang', 'Internet of Thing, Hardware, Electronic, Flying Robot, Drone , RaspberryPi, Nvidia Jetson TX\r\n', 'มี', 'มีโดยไม่เสีย ค่าใช้จ่าย', 'Bonus Project, ออกรายการ TV (มีรายการมาถ่ายทำบ่อย),ไปต่างประเทศ (จัดการทีมนักแข่งโดรน)\r\n', 'ต้องการคัดเลือกเอง'),
(2, 'บริษัท แวนเนส พลัส คอนซัลติ้ง จำกัด', 'Web Application and Mobile Application, Developer Trainee\n', 'ฝ่ายบุคคล และ เทคโนโลยี สารสนเทศ\r\n', '-', 'เขียนโปรแกรมทั้ง web หรือ mobile(optional) ได้ความรู้ความสามารถด้านdatabase development เป็นหลัก รวม', 'พัฒนา application สำหรับหน่วยงาน โดยเริ่มต้นจากการออกแบบระบบ พัฒนาฐานข้อมูลเขียน application และทำกา', '150 บาท/ วัน ', 'ไม่มี', 'ค่าเดินทางกรณีปฏิบัติงานนอกสถานที่', 'ต้องการคัดเลือกเอง'),
(3, 'ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และ คอมพิวเตอร์แห่งชาต', 'ผู้ช่วยปฏิบัติงานวิจัย', 'ทีมวิจัยเทคโนโลยีแมชชีนวิชั่น ', '6', 'Computer Programing, Image Processing, Machine Learning', 'พัฒนาโปรแกรมคอมพิวเตอร์และทดสอบ ', '150 บาท/วัน', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(4, 'ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และ คอมพิวเตอร์แห่งชาต', 'ผู้ช่วยวิจัย', 'ทีมวิจัยการประมวลผลและเข้าใจภาพ (IPU) กลุ่มวิจัยปัญญาประดิษฐ์(AINRG)', '2', 'การติดตั้งโปรแกรมชุด CNN ต่างๆ (มีเครื่องNotebook)\r\n', '- กำกับข้อมูลโรคข้าว\r\n- ทดสอบ Model Deep Learning\r\n', '150 บาท/วัน', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(5, 'บริษัท Chai - Aek Development System co. ltd', 'นักพัฒนาระบบ, นักวิเคราะห์ระบบ, นักทดสอบระบบ\r\n', 'นักพัฒนาระบบ, นักวิเคราะห์ระบบ, นักทดสอบระบบ', '4', 'การติดต่อสื่อสารในองค์กรสำคัญสุด, พื้นฐานการพัฒนาระบบ, ภาษาคอมฯ ที่ใช้พัฒานระบบเช่น php java อย่างน้', 'นักพัฒนาระบบ, นักวิเคราะห์ระบบ, นักทดสอบระบบ (รายละเอียดจะส่งเพิ่มเติมภายหลัง)', '-', 'ไม่มี', 'ค่าตอบแทนอาจมีในบางช่วงจังหวะตามงานที่ได้รับมอบหมาย', 'ต้องการคัดเลือกเอง'),
(6, ' International Computing And Networking Co.,Ltd', '์Network Engineering /Programmer', 'IT', '2', 'สามารถเขียน Program Visual,ASP,Net. มีความรู้เรื่องการติดตั้ง witch,router,firewall,IDS ect.\r\n', 'Support team ในเรื่องการเขียน program อื่นๆ ที่ได้รับมอบหมาย\r\n', '-', 'ไม่มี', 'ไม่มี', 'ให้มหาวิทยาลัย คัดเลือกให้'),
(7, 'กรมโยธาธิการและผังเมือง', 'Programmer/พัฒนาระบบฯ ', 'ิวิชาการและปฏิบัติการเทคโนโลยีสารสนเทศ\r\n', '2', 'เขียนโปรแกรมภาษา PHP/JAVA/VB', 'เขียนโปรแกรมระบบงานที่ได้รับมอบหมาย ', 'ไม่มี ', 'ไม่มี', NULL, 'ให้มหาวิทยาลัย คัดเลือกให้'),
(8, 'บริษัท Hyper Solution Co.,Ltd ', 'programmer / network', NULL, '3', 'network / เขียนโปรแกรมได้ ', 'ช่วยเหลือหัวหน้างานในการแก้ไขปัญหา', 'ไม่มี ', 'ไม่มี', NULL, 'ให้มหาวิทยาลัย คัดเลือกให้'),
(9, 'บริษัท โกไฟว์ จำกัด', 'Developer, System Analyst', 'สารสนเทศและพัฒนาระบบ', '6', 'ทักษะการใช้คอมพิวเตอร์ภาษาC,C#,JAVA,HTML และอื่นๆ\r\n', 'เขียนโปรแกรม ศึกษางานตามโปรเจคที่ได้รับมอบหมาย\r\n', 'ในกรณีฝึก 4 เดือนเท่านั้น 350บาท/วัน\r\n', 'มีโดยไม่เสีย ค่าใช้จ่าย', 'รถรับส่ง ตามเส้นทางที่กำหนดของทางบริษัท\r\n', 'ต้องการคัดเลือกเอง'),
(10, 'บริษัท คิว คิว (ประเทศไทย) จำกัด', 'Programmer', 'Programmer', '3', 'การCodingภาษาต่างๆ ความสนใจในการพัฒนาโปรแกรม', 'coding/.net application/.net API ฯลฯ ', '-', 'ไม่มี', 'อาหารกลางวัน การเบิกค่าเดินทาง(กรณีมีการเดินทาง)\r\n', 'ต้องการคัดเลือกเอง'),
(11, 'บริษัท จีโอทาเลนท์ จำกัด', 'Programmer', 'Web Application Department\r\n', '1', 'พื้นฐานความรู้ด้านการเขียนเวปแอพพลิเคชั่น เช่น HTML CSS ฯลฯ\r\n', 'เรียนรู้การทำงานของโปรแกรมเมอร์และฝึกเขียนโปรแกรม', '', 'ไม่มี', 'มีขนม เครื่องดื่มให้หากมีการอบรมนักศึกษาฝึกงานอาจได้\r\n', 'ต้องการคัดเลือกเอง'),
(12, 'บริษัท ทีโอทีจำกัด (มหาชน)', NULL, 'ศูนย์วิศวกรรมบริการ ', '1', 'ระบบ Network', 'ติดตั้งสาย LAN, CONFIG ROUTER, CONFIG WIFI, ระบบ Network, งาน Solution', 'ไม่มี ', 'ไม่มี ', NULL, 'ให้มหาวิทยาลัย คัดเลือกให้'),
(13, 'บริษัท ทีโอทีเอาท์ซอร์สซิ่ง เซอร์วิส จำกัด', 'นักคอมพิวเตอร์ ', 'ส่วนอำนวนการและบริหารงานบุคคล\r\n', '2', 'การจัดการDatabase,PHP,C ', 'เขียนเว็บสมัครงาน,พัฒนาเว็บแอพของบริษัท', 'ไม่มี ', 'ไม่มี ', NULL, 'ให้มหาวิทยาลัย คัดเลือกให้'),
(14, 'บริษัท เทรคอน (เว็บไซต์) จำกัด ', 'นักพัฒนำโปรแกรม | นักออกแบบระบบ\r\n', NULL, '3', 'PHP / MS SQL or My SQL ', 'พัฒนาโปรแกรมหรือออกแบบระบบ การวิเคราะห์ระบบและการจัดทำเอกสารวิเคราะห์หรือออกแบบระบบ\r\n', '', 'ไม่มี', 'การฝึกอบรมตามหลักสูตรที่นิสิตต้องการตามความเหมาะสม โดยบริษัทออก\r\n', 'ให้มหาวิทยาลัย คัดเลือกให้'),
(15, 'บริษัท ไทยซอฟท์แวร์เอ็นเตอร์ไพรส์ จำกัด', 'Programmer', 'Software Development ', '6', 'Mobile Development', 'ปรับปรุงหรือพัฒนา Mobile App บน iOS หรือ Android', '', 'ไม่มี', NULL, 'ให้มหาวิทยาลัย คัดเลือกให้'),
(16, 'บริษัท บิท โซลูชั่น จำกัด ', 'Network Engineer ', 'Engineer', '3', 'Network', 'ช่วยงานฝ่าย Engineer ', 'ค่าเบี้ยเลี้ยงในกรณีออกต่ำงจังหวัด\r\n', 'ไม่มี', 'ค่าเดินทางระหว่างออฟฟิตไปที่หน้างาน\r\n', 'ต้องการคัดเลือกเอง'),
(17, 'บริษัท มอสกี้คอร์ปอเรชั่น จำกัด', 'Smart Farm, Programmer, Mobile Application', NULL, '5', 'ทักษะการเขียนโปรแกรม', 'เขียนโปรแกรมตามโปรเจคที่ได้รับมอบหมาย ', 'มี ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(18, 'บริษัท กสิกร บิซิเนส-เทคโนโลยีกรุ๊ป เซเครเทเรียต จ', 'Data Engineer', NULL, '2', NULL, NULL, 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(19, 'บริษัท บางกอก แอสเซท อินเตอร์ กรุ๊ป จำกัด', 'นักศึกษาฝึกงานฝ่าย IT', NULL, '2', NULL, NULL, '205 บาท/วัน ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(20, 'บริษัท ไอแอนด์ไอ กรุ๊ป จำกัด (มหาชน) สำนักงานใหญ่', 'QA (Software Tester) ', 'SFDC/Consulting (QA) ', '1', 'Computer engineering, knowledge software skill\r\n', 'Test case, Software tester and other assign by supervisor\r\n', '300 บาท/วัน ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(21, ' บริษัท จัสมิน อินเตอร์เนชั่นแนล จำกัด (มหาชน)', 'Front-End Developer ', NULL, '4', NULL, NULL, 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(22, 'บริษัท อินเทลเล็คท์เน็ตเวิร์ค เว็บ จำกัด', 'Full Stack Developer ', NULL, '2', NULL, NULL, 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(23, 'บริษัท ลีดเดอร์แพลนเนท จำกัด', 'Power Platform Officer ', NULL, '3', NULL, NULL, '13,000/เดือน', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(24, 'บริษัท เอ็ม ดีซอฟต์ จำกัด', 'ผู้ช่วยโปรแกรมเมอร์ ', NULL, '1', 'ทักษะการเขียนโปรแกรม', NULL, '200 บาท/วัน ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(25, 'บริษัท ซินเน็ค (ประเทศไทย) จำกัด (มหาชน)', 'Programmer, Engineer/Presale, Product Manger/Product Sale\r\n', 'Technical Services/IT/Logistics\r\n', '6', 'มีความรู้และทักษะในงานด้านต่างๆ ที่เหมาะสมกับตำแหน่งที่ปฏิบัติงาน, มีความกระตือรือร้น\r\n', 'นักศึกษาฝึกงานประจำฝ่ายต่างๆ', 'มีตามนโยบายบริษัท ', 'ไม่มี', 'อาหารเช้าฟรี, ฟิตเนส ', 'ต้องการคัดเลือกเอง'),
(26, 'ธนาคารอาคารสงเคราะห์ ', 'พนักงานคอมพิวเตอร์', 'ฝ่ายปฏิบัติการเทคโนโลยีสารสนเทศ\r\n', '1', 'ความรู้ทางด้านเทคโนโลยีสารสนเทศ', 'ด้านเทคโนโลยีสารสนเทศ', '100 บาท/วัน ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(27, 'บริษัท โทรคมนาคมแห่งชาติจำกัด (มหาชน)', 'วิศวกรรมคอมพิวเตอร์/อิเล็กทรอนิกส์และ IT', 'ขึ้นอยู่กับบริษัทฯ จัดสรร ', '5', 'โปรแกรม ซอฟต์แวร์และด้าน IT network', 'แล้วแต่ผู้ควบคุมฝึกงานจะมอบหมายให้ ', 'มี', 'ไม่มี', 'แล้วแต่หน่วยงานที่นิสิตไปฝึกจะจัดสรรให้\r\n', 'ต้องการคัดเลือกเอง'),
(28, 'บริษัท อินทิเกรชัน มีชัวร์เม้นท์โซลูชัน จำกัด', 'Web Develop', 'Services', '1', 'Web programming, Database ', 'Testing Web ', '200 บาท/วัน', 'ไม่มี ', 'อาหารกลำงวัน ', 'ต้องการคัดเลือกเอง'),
(29, 'บริษัท แมงโก้เทคโนโลยีจำกัด', 'โปรแกรมเมอร์Support', 'IT', NULL, NULL, 'อัพเดจระบบของบริษัท ', 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(30, 'บริษัท เดอเบล จำกัด ', 'IT Support', 'ฝ่ายเทคโนโลยีสารสนเทศแผนกพัฒนาและบริการสารสนเทศ\r\n', '1', 'Installing and configuring computer hardware and application', 'Installing and configuring computer hardware and application (Macbook & Windows PC/Laptop , Tablet ,', '150 บาท/วัน ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(31, 'บริษัท เมืองทองอุตสาหกรรมอาลูมีเนียม จำกัด', 'วิศวกรรมคอมพิวเตอร์ ', 'เทคโนโลยีสารสนเทศ ( IT )', '2', 'มีความรู้ด้านระบบ Hardware&Softwareและการขียนโปรแกรม', 'ผู้ช่วยวิศวกร', '150 บาท/วัน ', 'ไม่มี', 'รถรับ-ส่ง (ตามเส้นทางบริษัทฯกำหนด), ข้าวเปล่า (ฟรี) เช้าเที่ยง\r\n', 'ให้มหาวิทยาลัยคัดเลือกให้'),
(32, 'บริษัท อสมท จำกัด (มหาชน) ', NULL, 'เทคโนโลยีสารสนเทศ', '5', 'เขียนโปรแกรม ฮาร์ดแวร์network', 'Programming it support ', '', 'ไม่มี', NULL, 'ให้มหาวิทยาลัยคัดเลือกให้'),
(33, 'บริษัท อินโนเวทีฟ ซอฟต์แวร์ คอนซัลติ้ง จำกัด', '1. Software Engineer\r\n2.Software Analyst\r\n', 'IT', '5', 'Java ', 'บริษัทจะมีโครงงานจำลองให้นิสิตได้ฝึกเขียนโปรแกรมและออกแบบระบบตามความสามารถของนิสิตแต่ละคน\r\n', '330บาท/วัน', 'ไม่มี', 'น้ำดื่ม ', 'ให้มหาวิทยาลัยคัดเลือกให้'),
(34, 'ฝ่ายระบบโครงสร้างพื้นฐานการไฟฟ้านครหลวง', 'วิศวกรคอมพิวเตอร์/ วิศวกรสื่อสาร / นักประมวลผลข้อมูล\r\n', 'กองระบบเครือข่าย / กองระบบควบคุมอัตโนมัติ', '2', 'คอมพิวเตอร์/ สารสนเทศ ', 'ระบบเครือข่าย / อุปกรณ์คอมพิวเตอร์/ ระบบความปลอดภัยและสื่ออิเล็กทรอนิกส์', '', 'ไม่มี ', NULL, 'ให้มหาวิทยาลัยคัดเลือกให้'),
(35, 'Leaderplanet Co., Ltd.', 'ผู้พัฒนาระบบ (Programmer), ผู้ออกแบบระบบ (System Analyst)', 'Computer Engineer ', '3', 'พื้นฐานภาษาในการพัฒนา .Net, C# ', 'พัฒนาระบบงานร่วมกับพนักงานประจำของบริษัทโดยใช้Technology ของ Microsoft, K2 workflow, AZURE, Logic AP', '13,000 บาท/เดือน มี Notebook, ค่ารักษาพยาบาล\r\n', 'ไม่มี', 'มีค่าเดินทางถ้ากรณีต้องออกปฏิงานพบปะลูกค้า\r\n', 'ต้องการคัดเลือกเอง'),
(36, 'บมจ.ทรูคอร์ปอเรชั่น (สำนักงาน ภาคตะวันออก)', 'วิศวกรไฟฟ้า ,สื่อสำร', 'สื่อสาร ไฟฟ้า', '2', NULL, 'ปฏิบัติการโครงข่าย', 'ไม่มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(37, 'Advanced Information Technology PCL', 'Network Engineer ', 'CUSTOMER SERVICES ', '3', 'ความรู้ในเชิง CCNA เบื้องต้น (พื้นฐานrouting and switching cisco / OSI 7Layer)\r\n', 'ศึกษาความรู้และโครงสร้างด้าน Network ที่เกี่ยวข้องกับแผนก / เข้าหน้างานเพื่อช่วยติดตั้งหรือบำรุงรักษ', '300/วันที่ปฏิบัติ ', 'ไม่มี', 'ค่าแท็กซี่กรณีเดินทางไปหน้างานด้วยตัวเอง\r\n', 'ต้องการคัดเลือกเอง'),
(38, 'บริษัท Hyper Solution Co.,Ltd', 'programmer / network', NULL, '3', 'network / เขียนโปรแกรมได้ ', 'ช่วยเหลือหัวหน้างานในการแก้ไขปัญหา', 'ไม่มี ', 'ไม่มี ', NULL, 'ให้มหาวิทยาลัยคัดเลือกให้'),
(39, 'สำนักงานบริการลูกค้า กสท เกาะสมุย', 'ตำแหน่งวศิวกรงานด้านสื่อ สารข้อมูลและดิจิตอล ระบบ Network Layer1-7 ด้าน Network และโครงข่าย/งานด้านก', 'ผู้จัดการสำนักงาน บริการลูกค้า กสท เกาะสมุย (ผสค.เกาะสมุย)', '2', 'งานด้านระบบคอมพิวเตอร์/ งานพิ้นฐานความรู้ด้าน Network และโครงข่าย /งานด้านการเขึยนโปรแกรม\r\n', 'วิศวกรงานด้านสือสารข้อมูลและดิจิตอล ระบบNetwork Layer1-7 ด้าน Network และ โครงข่าย / งานด้านการเขึยน', 'ไม่มี', 'ไม่มี', 'ไม่มี', 'ต้องการคัดเลือกเอง'),
(40, 'บริษัท บางกอกเว็บ โซลูชั่น', 'Programmer', 'Marketing', '1', 'ภาษาคอมพิวเตอร์เบื้องต้น ', 'เขียนเว็บและงานที่ได้รับมอบหมายในแต่ละโปรเจ็ค ', 'ไม่มี ', 'ไม่มี', 'ไม่มี ', 'ต้องการคัดเลือกเอง'),
(41, 'บริษัท ศูนย์วิจัยทางการแพทย์อาชีวเวชศาสตร์ไทย จำกั', 'Programmer ', 'แผนกเทคโนโลยีสารสนเทศ ', '2', 'ความใฝ่รู้และการรองรับแรงกดดันในสถานการณ์ต่างๆ\r\n', 'การพัฒนาระบบให้แก่องค์กรณ์ ', 'ไม่มี', 'ไม่มี', 'ไม่มี', 'ให้มหาวิทยาลัยคัดเลือกให้'),
(42, 'บริษัท 911 เอ็ดดูเคชั่น (ประเทศไทย) จำกัด', 'App developer ', NULL, '1', 'พื้นฐาน ', 'พัฒนาโปรแกรม', 'ไม่มี ', 'ไม่มี ', 'ไม่มี ', 'ต้องการคัดเลือกเอง'),
(43, 'บริษัทฮ้อปคาร์จำกัด', 'นักศึกษาฝึกงานฝ่ายเทคโนโลยี ', 'Technology ', '1', 'c#. NET framework', 'เขียนโปรแกรม mobile application โดยใช้ flutter, เขียนโปรแกรม c#. NET framework', 'ไม่มี ', 'ไม่มี', 'ไม่มี ', 'ต้องการคัดเลือกเอง'),
(44, 'บริษัทซันร้อยแปดจำกัด', 'วิศวกร', 'วิจัยและพัฒนาเทคโนโลยีสารสนเทศ\r\n', '2', 'ระบบคอนโทรล โปรแกรมเมอร์อิเล็กทรอนิกส', 'ออกแบบ PCB เขียนโปรแกรม controller ', '163 บาท/วัน ', 'มีโดยไม่เสียาค่าใช้จ่าย', 'มีที่พักให้ ', 'ให้มหาวิทยาลัยคัดเลือกให้'),
(45, 'บจก.บิสซิเนสอะไลฟ์', 'Full Stack Developer ', 'Product Development ', '4', 'English, Programming, Google Dialog Flow, PHP Codeigniter, PostgreSQL, Bit Bucket\r\n', 'Research New Technology and Implement to Company Product\r\n', 'ถ้าสามารถทำงานได้และผลงานเป็นที่น่าพอใจบริษัทมีค่าตอบแทนให้150 บาท/วัน', 'ไม่มี', 'ไม่มี', 'ต้องการคัดเลือกเอง');

-- --------------------------------------------------------

--
-- Table structure for table `detail_cooperative`
--

CREATE TABLE `detail_cooperative` (
  `c_id` int(3) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_position` varchar(100) DEFAULT NULL,
  `c_department` varchar(100) DEFAULT NULL,
  `c_num` varchar(20) DEFAULT NULL,
  `c_skills` varchar(100) DEFAULT NULL,
  `c_nature` varchar(100) DEFAULT NULL,
  `c_pay` varchar(100) DEFAULT NULL,
  `c_room` varchar(50) DEFAULT NULL,
  `c_benefit` varchar(100) DEFAULT NULL,
  `c_select` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_cooperative`
--

INSERT INTO `detail_cooperative` (`c_id`, `c_name`, `c_position`, `c_department`, `c_num`, `c_skills`, `c_nature`, `c_pay`, `c_room`, `c_benefit`, `c_select`) VALUES
(1, 'ธนาคารเกียรตินาคิน จำกัด (มหาชน)', 'Programmer Analyst, Server Management', NULL, '6', '1. มีความรู้Object Oriented Programming\r\n2. สามารถเขียนโปรแกรมด้วยภาษา JAVA , C#.NET', '- งาน Programmer : ร่วมพัฒนา/เขียนโปรแกรมระบบงานของธนาคาร\r\n- งาน Server Management : ร่วมปรับปรุงงาน', 'ค่าตอบแทนประกอบด้วย รายวันและเงินรางวัลพิเศษ(สิ้นสุดโครงกำร)\r\n', 'ไม่มี', 'ไม่มี', 'ต้องการคัดเลือกเอง'),
(2, 'บริษัท แวนเนส พลัส คอนซัลติ้ง จำกัด', 'Web Application and Mobile Application, Developer Trainee', 'ฝ่ายบุคคล และ เทคโนโลยี สารสนเทศ', '2', 'เขียนโปรแกรมทั้ง web หรือ mobile(optional) ได้ความรู้ความสามารถด้านdatabase development เป็นหลักรวมถ', 'พัฒนา application สำหรับหน่วยงาน โดยเริ่มต้นจากการออกแบบระบบ พัฒนาฐานข้อมูลเขียน application และทำกา', '150 บาท/ วัน ', 'ไม่มี ', 'ค่าเดินทางกรณีปฏิบัติงานนอกสถานที่\r\n', '-'),
(3, 'บจก ดับเบิล เอ็ม เทคโนโลยีแมเนจเม้นท์\r\n', 'IOT,Mobile App,Web Application developer\r\n', NULL, '5', 'PHPskill , Java, Database,network', '1.พัฒนาโครงงานที่รองรับแผนงานบริษัทโดยใช้เครื่องมือที่กำหนดโดยบริษัทฯ\r\n2.เสนอโครงการที่สอดคล้องกับนโ', '400 บาท/วัน ในเดือนแรก เดือนที่ 2 พิจารณาจากผลงาน\r\n', 'ไม่มี', NULL, 'ให้มหาวิทยาลัยคัดเลือกให้'),
(4, 'บริษัท โกไฟว์จำกัด ', 'Developer, System Analyst', 'สารสนเทศและพัฒนาระบบ', '2', 'ทักษะการใช้คอมพิวเตอร์ภาษา C,C#,JAVA,HTML และอื่นๆ', 'เขียนโปรแกรม ศึกษางานตามโปรเจคที่ได้รับมอบหมาย\r\n', 'ในกรณีฝึก 4 เดือนเท่านั้น 200บาท/วัน\r\n', 'ไม่มี ', 'รถรับส่งตามเส้นทางที่กำหนดของทางบริษัท\r\n', '-'),
(5, 'บริษัท ซ.ีเอส.ไอ. (ประเทศไทย) จำกัด ', 'System Programmer', NULL, NULL, 'Programming Skill (.Net, JAVA) , MS SQL Stored Procedure\r\n', 'Programming Skill (.Net, JAVA) , MS SQL Stored Procedure\r\n', 'สหกิจ 10,000 บาท/เดือน\r\nฝึกงาน 200 บาท /วน', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(6, 'บริษัท ซีเกท เทคโนโลยี(ประเทศไทย) จำกัด\r\n', 'AME Intern ', 'AME ', NULL, 'พื้นฐานด้านโปรแกรมคอมพิวเตอร์', NULL, '400 บาท/วัน ', 'ไม่มี ', 'รถรับส่งระหว่างโรงงาน ', 'ต้องการคัดเลือกเอง '),
(7, 'บริษัท ดีทีซีอินเตอร์เน็ทเวิร์คกิ้ง จำกัด\r\n', 'System/Network Engineer', 'Services ', '-', 'Network และการออกแบบทางวิศวกรรม ', NULL, '150 บาท/วัน ', 'ไม่มี', 'ค่าล่วงเวลา ', 'ต้องการคัดเลือกเอง'),
(8, 'บริษัท เมโทรเมิร์ซ จำกัด ', 'Software Engineer', NULL, '2', 'React, NodeJs,HTML5 ,CSS3', 'พัฒนาและเขียนโปรแกรมในแต่ละ Project ที่ได้รับมอบหมาย', 'ขึ้นอยู่กับผลงาน', 'ไม่มี ', '-', '-'),
(9, 'บริษัท เมืองทองอุตสาหกรรมอาลูมีเนียม จำกัด\r\n', 'วิศวกรรมคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ ( IT )', '2', 'มีความรู้ด้านระบบ Hardware&Softwareและการขียนโปรแกรม\r\n', 'ผู้ช่วยวิศวกร ', '150 บาท/วัน', 'ไม่มี', 'รถรับ-ส่ง (ตามเส้นทางบริษัทฯกำหนด), ข้าวเปล่า (ฟรี) เช้าเที่ยง', '-'),
(10, 'บริษัท อินโนเวทีฟ ซอฟต์แวร์คอนซัลติ้ง จำกัด\r\n', '1. Software Engineer\r\n2.Software Analyst\r\n', 'IT', '5', 'Java', 'บริษัทจะมีโครงงานจำลองให้นิสิตได้ฝึกเขียนโปรแกรมและออกแบบระบบตามความสามารถของนิสิตแต่ละคน', '330บาท/วัน ', 'ไม่มี ', 'น้ำดื่ม ', '-'),
(11, 'บริษัท เอสซีจีซิเมนต์ผลิตภันฑ์ก่อสร้าง จำกัด / IT office\r\n', 'Programmer ', NULL, NULL, 'เกรด 2.7ขึ้น ', 'เกรด 2.7ขึ้น ', '500บาท/วัน ', NULL, NULL, 'ต้องการคัดเลือกเอง'),
(12, ' บริษัท ฮาตาริไวร์เลส ', 'Programmer', NULL, '2', 'Net. Framework,C#,ASP.Net', 'Programming', '300', 'ไม่มี ', NULL, 'ให้มหาวิทยาลัยคัดเลือกให้'),
(13, 'โรงไฟฟ้าวังน้อย ', 'เจ้าหน้าที่คอมพิวเตอร์ ', NULL, NULL, 'นักศึกษาด้านคอมพิวเตอร์', 'นักศึกษาด้านคอมพิวเตอร์', '200 บาท/วัน', 'ไม่มี', 'ไม่มี', 'ต้องการคัดเลือกเอง'),
(14, 'บริษัท ซันฟู้ด อินเตอร์เนชั่นเเนล จำกัด', 'ธุรกิจไก่ครบวงจร', 'IT', '2', 'มีความขยัน รับผิดชอบ ', 'ปรับปรุงระบบ แก้ไขปัญหาที่พบเจอ', '350บาท/วัน ', 'ีโดยต้องเสีย ค่าใช้จ่าย', NULL, 'ต้องการคัดเลือกเอง '),
(15, 'ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ(NECTEC)', 'ผู้ช่วยปฏิบัติงานวิจัย', 'ทีมวิจัยเทคโนโลยีแมชชีนวิชั่น ', '6', 'Computer Programing, Image Processing, Machine Learning\r\n', 'พัฒนาโปรแกรมคอมพิวเตอร์และทดสอบ ', '150 บาท/วัน ', 'ไม่มี ', NULL, 'ต้องการคัดเลือกเอง'),
(16, 'Leaderplanet Co., Ltd.', 'ผู้พัฒนาระบบ (Programmer), ผู้ออกแบบระบบ (System Analyst)', 'Computer Engineer ', '3', 'พื้นฐานภาษาในการพัฒนา .Net, C#', 'พัฒนาระบบงานร่วมกับพนักงานประจำของ\r\nบริษัทโดยใช้Technology ของ Microsoft, K2 workflow, AZURE, Logic ', '13,000 บาท/เดือน มี Notebook, ค่ารักษาพยาบาล\r\n', 'ไม่มี ', 'มีค่าเดินทางถ้ากรณีต้องออกปฏิงานพบปะลูกค้า', '-'),
(17, 'Advanced Information\r\nTechnology PCL\r\n', 'Network Engineer ', 'CUSTOMER SERVICES ', '3', 'ความรู้ในเชิง CCNA เบื้องต้น (พื้นฐานrouting  and switching cisco / OSI 7Layer)', 'ศึกษาความรู้และโครงสร้างด้าน Network ที่เกี่ยวข้องกับแผนก / เข้าหน้างานเพื่อช่วยติดตั้งหรือบำรุงรักษ', '300/วันที่ปฏิบัติ ', 'ไม่มี', 'ค่าแท็กซี่กรณีเดินทางไปหน้างานด้วยตัวเอง\r\n', 'ต้องการคัดเลือกเอง'),
(18, ' ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ(NECTEC)', 'ผู้ช่วยวิจัย', 'ทีมวิจัยการประมวลผลและเข้าใจภาพ (IPU) กลุ่มวิจัยปัญญาประดิษฐ์(AINRG)\r\n', '2', 'การติดตั้งโปรแกรมชุด CNN ต่างๆ (มีเครื่องNotebook)\r\n', '- กำกับข้อมูลโรคข้าว\r\n- ทดสอบ Model Deep Learning\r\n', '150 บาท/วัน ', 'ไม่มี ', 'ไม่มี', 'ต้องการคัดเลือกเอง '),
(19, 'บริษัท Chai - Aek Development System co. ltd\r\n', 'นักพัฒนาระบบ, นักวิเคราะห์ระบบ, นักทดสอบระบบ\r\n', 'นักพัฒนาระบบ, นักวิเคราะห์ระบบ, นักทดสอบระบบ\r\n', '4', 'การติดต่อสื่อสารในองค์กรสำคัญสุด, พื้นฐานการพัฒนาระบบ, ภาษาคอมฯ ที่ใช้พัฒนาระบบเช่น php java อย่างน้', 'นักพัฒนาระบบ, นักวิเคราะห์ระบบ, นักทดสอบระบบ (รายละเอียดจะส่งเพิ่มเติมภายหลัง)', NULL, 'ไม่มี', 'ค่าตอบแทนอาจมีในบางช่วงจังหวะตามงานที่ได้รับมอบหมาย\r\n', 'ต้องการคัดเลือกเอง'),
(20, 'บริษัท ไอยราฟันส์ จำกัด ', 'Full Stack Developer', 'Product Development ', '2', 'Fullstack development technology', 'Software development for hardware\r\nconfiguration\r\n', '500 บาท/วัน', 'ไม่มี ', 'ไม่มี ', 'ต้องการคัดเลือกเอง '),
(21, 'บริษัท ซันร้อยแปด จำกัด ', 'วิศวกร ', 'วิจัยและพัฒนาเทคโนโลยีสารสนเทศ', '2', 'ระบบคอนโทรล โปรแกรมเมอร์อิเล็กทรอนิกส์ ', 'ออกแบบ PCB เขียนโปรแกรม controller', '163 บาท/วัน ', 'มีโดยไม่เสีย ค่าใช้จ่าย', 'มีที่พักให้ ', 'ให้มหาวิทยาลัยคัดเลือกให้'),
(22, 'บจก.บิสซิเนสอะไลฟ์ ', 'Full Stack Developer ', 'Product Development ', '4', ' English, Programming, Google Dialog Flow, PHP Codeigniter, PostgreSQL, Bit Bucket\r\n', 'Research New Technology and Implement to Company Product\r\n', 'ถ้าทำงานได้และผลงานเป็นที่น่าพอใจ บริษัทมีค่าตอบแทนให้150 บาท/วัน', 'ไม่มี ', 'ไม่มี ', 'ต้องการคัดเลือกเอง '),
(23, 'บริษัท กสิกร บิซิเนส-เทคโนโลยีกรุ๊ปเซเครเทเรียต จำกัด\r\n', 'Data Engineer ', NULL, '2', NULL, NULL, 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(24, 'บริษัท บางกอก แอสเซท อินเตอร์กรุ๊ป จำกัด\r\n', 'นักศึกษาฝึกงานฝ่าย IT', NULL, '2', NULL, NULL, '205 บาท/วัน ', 'ไม่มี ', NULL, 'ต้องการคัดเลือกเอง '),
(25, 'บริษัท ไอแอนด์ไอ กรุ๊ป จำกัด (มหาชน) สำนักงานใหญ่\r\n', 'QA (Software Tester)', 'SFDC/Consulting (QA)', '1', 'Computer engineering, knowledge software skill\r\n', 'Test case, Software tester and other assign by supervisor\r\n', '300 บาท/วัน ', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(26, 'บริษัท จัสมิน อินเตอร์เนชั่นแนล จำกัด (มหาชน)', 'Front-End Developer ', NULL, '4', NULL, NULL, 'มี', 'ไม่มี ', NULL, 'ต้องการคัดเลือกเอง '),
(27, 'บริษัท อินเทลเล็คท์เน็ตเวิร์ค เว็บ จำกัด\r\n', 'Full Stack Developer', NULL, '2', NULL, NULL, 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(28, 'บริษัท ลีดเดอร์แพลนเนท จำกัด ', 'Power Platform Officer ', NULL, '3', NULL, NULL, '13,000/เดือน ', 'ไม่มี ', NULL, 'ต้องการคัดเลือกเอง '),
(29, 'บริษัท เอ็ม ดีซอฟต์จำกัด ', 'ผู้ช่วยโปรแกรมเมอร์', NULL, '1', 'ทักษะกำรเขียนโปรแกรม ', NULL, '200 บาท/วัน', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(30, 'ธนาคารอาคารสงเคราะห์ ', 'พนักงานคอมพิวเตอร์ ', 'ฝ่ายปฏิบัติการเทคโนโลยีสารสนเทศ', '1', 'ความรู้ทางด้านเทคโนโลยีสารสนเทศ', 'ด้านเทคโนโลยีสารสนเทศ ', '100 บาท/วัน ', 'ไม่มี ', NULL, 'ต้องการคัดเลือกเอง '),
(31, 'บริษัท โทรคมนาคมแห่งชาติจำกัด (มหาชน)\r\n', 'วิศวกรรมคอมพิวเตอร์/อิเล็กทรอนิกส์และ IT', 'ขึ้นอยู่กับบริษัทฯ จัดสรร ', '5', 'โปรแกรม ซอฟต์แวร์และด้าน IT network', 'แล้วแต่ผู้ควบคุมฝึกงานจะมอบหมายให้ ', 'มี', 'ไม่มี', 'แล้วแต่หน่วยงานที่นิสิตไปฝึกจะจัดสรรให้\r\n', 'ต้องการคัดเลือกเอง'),
(32, 'บริษัท อินทิเกรชัน มีชัวร์เม้นท์โซลูชัน จำกัด', 'Web Develop ', 'Services', '1', 'Web programming, Database', 'Testing Web', '200 บาท/วัน', 'ไม่มี ', 'อาหารกลางวัน', 'ต้องการคัดเลือกเอง '),
(33, 'บริษัท แมงโก้เทคโนโลยีจำกัด ', 'โปรแกรมเมอร์Support', 'IT', NULL, NULL, 'อัพเดตระบบของบริษัท ', 'มี', 'ไม่มี', NULL, 'ต้องการคัดเลือกเอง'),
(34, 'บริษัท เดอเบล จำกัด ', 'IT Support ', 'ฝ่ายเทคโนโลยีสารสนเทศแผนกพัฒนาและบริการ\r\n', '1', 'Installing and configuring computer hardware and application\r\n', 'Installing and configuring computer\r\nhardware and application (Macbook & ', '150 บาท/วัน', 'ไม่มี ', NULL, 'ต้องการคัดเลือกเอง ');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(10) NOT NULL,
  `fileupload` varchar(50) NOT NULL,
  `dateupload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file_id`, `fileupload`, `dateupload`) VALUES
(1, 'annouce_880646177.jpg', '2022-03-20 18:18:50'),
(2, 'annouce_930504106.jpg', '2022-03-20 18:23:08'),
(3, 'annouce_1239952550.jpg', '2022-03-20 18:24:04'),
(4, 'annouce_233629271.jpg', '2022-03-20 18:31:33'),
(5, 'annouce_1718549909.jpg', '2022-03-20 18:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `name_title`
--

CREATE TABLE `name_title` (
  `name_id` varchar(5) NOT NULL,
  `name_title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `name_title`
--

INSERT INTO `name_title` (`name_id`, `name_title`) VALUES
('01', 'นางสาว'),
('02', 'นาง'),
('03', 'นาย');

-- --------------------------------------------------------

--
-- Table structure for table `petition`
--

CREATE TABLE `petition` (
  `petition_id` int(10) NOT NULL,
  `date_p` date NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `academicY_p` varchar(4) NOT NULL,
  `FB_p` varchar(50) NOT NULL,
  `phone_p` varchar(10) NOT NULL,
  `position_p` varchar(60) NOT NULL,
  `approverName_p` varchar(20) NOT NULL,
  `approverSname_p` varchar(20) NOT NULL,
  `approverP_p` varchar(30) NOT NULL,
  `dc_id` int(3) DEFAULT NULL,
  `c_id` int(3) DEFAULT NULL,
  `comName_p` varchar(60) DEFAULT NULL,
  `compNo_p` varchar(10) NOT NULL,
  `compRoad_p` varchar(40) NOT NULL,
  `compSubdist_p` varchar(40) NOT NULL,
  `compDistrict_p` varchar(40) NOT NULL,
  `compProvince_p` varchar(40) NOT NULL,
  `compPost_p` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_nopad_ci NOT NULL,
  `hrName_p` varchar(50) NOT NULL,
  `hrSname_p` varchar(50) NOT NULL,
  `hrPhone_p` varchar(10) NOT NULL,
  `hrMail_p` varchar(50) NOT NULL,
  `salary_p` varchar(20) NOT NULL,
  `room_p` varchar(10) NOT NULL,
  `type_p` varchar(10) NOT NULL,
  `start_p` date NOT NULL,
  `finish_p` date NOT NULL,
  `status_id` varchar(5) NOT NULL,
  `file_p` varchar(20) NOT NULL,
  `approve_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petition`
--

INSERT INTO `petition` (`petition_id`, `date_p`, `user_id`, `academicY_p`, `FB_p`, `phone_p`, `position_p`, `approverName_p`, `approverSname_p`, `approverP_p`, `dc_id`, `c_id`, `comName_p`, `compNo_p`, `compRoad_p`, `compSubdist_p`, `compDistrict_p`, `compProvince_p`, `compPost_p`, `hrName_p`, `hrSname_p`, `hrPhone_p`, `hrMail_p`, `salary_p`, `room_p`, `type_p`, `start_p`, `finish_p`, `status_id`, `file_p`, `approve_id`) VALUES
(31, '2022-03-21', 'b6220503325', '2564', 'Tangmo Mananchaya', '0957759470', 'Network Engineer', 'สุรเชษ', 'ปั้นคำวงศ์', ',Network Engineer', 16, NULL, NULL, '67/29', 'รัชดา', 'ห้วยขวาง', 'สามเสนนอก', 'กรุงเทพมหานคร', '10310', 'สมพงษ์', 'จิตรพิริยะ', '0632910428', 'somp.jp@bitsolution.com', '-', 'Dont Have', 'dc', '2022-04-18', '2022-06-10', '03', 'application form_213', 705),
(32, '2022-03-24', 'b6220503309', '2564', 'milky milk', '0957759470', 'programmer', 'มานะ', 'มานี', 'developer', NULL, NULL, 'solution', '323', 'วิภาวดีรังสิต', 'หลักสี่', 'หลักสี่', 'กรุงเทพ', '10210', 'บุษกร', 'ผลาทร', '0817636381', 'bus.k@outlook.com', '800', 'Dont Have', 'c', '2022-11-28', '2023-04-07', '01', 'application form_859', NULL),
(33, '2022-03-25', 'b6220502086', '2564', 'natnare', '0819446381', 'programmer', 'มานะ', 'มานี', ',programmer', NULL, 10, NULL, '323', 'เจริญกรุง', 'เจริญกรุง', 'เจริญกรุง', 'กรุงเทพมหานคร', '10310', 'สุดที่รัก', 'รักที่สุด', '0817636381', 'somp.jp@inf.com', '1000', 'Dont Have', 'c', '2022-11-14', '2023-04-07', '01', 'application form_641', NULL),
(34, '2022-03-25', 'b6220502086', '2564', 'milky milk', '0819446381', 'programmer', 'มานะ', 'มานี', ',programmer', 42, NULL, NULL, '323', 'เจริญกรุง', 'เจริญกรุง', 'เจริญกรุง', 'กรุงเทพมหานคร', '10210', 'สุดที่รัก', 'รักที่สุด', '0817636381', 'kcof@hotmail.com', '800', 'Dont Have', 'dc', '2022-04-18', '2022-05-28', '02', 'application form_417', NULL),
(35, '2022-03-24', 'b6220501111', '2564', 'Pijirat', '0912234672', 'programmer', 'แบร์', 'นูลี่', 'programmer', 15, NULL, NULL, '459', 'ศรีนครินทร์', 'สำโรงเหนือ', 'เมืองสมุทรปราการ', 'สมุทรปราการ', '10270', 'มาริญา', 'มโนบาล', '0982348761', 'marriy.m@outlook.com', '250', 'Dont Have', 'dc', '2022-04-18', '2022-06-10', '03', 'application form_417', 787),
(36, '2022-03-22', 'b6220501212', '2564', 'kampan', '0879823456', 'programmer', 'พันแท้', 'นรสิงศ์', 'programmer', NULL, NULL, 'CODIUM', '865', 'พระราม1', 'วังใหม่', 'ปทุมวัน', 'กรุงเทพมหานคร', '10330', 'อรวรรณ', 'อันดี', '0837629421', 'orwan.o@outlook.com', '200', 'Dont Have', 'c', '2022-11-28', '2023-04-07', '01', 'application form_417', NULL),
(37, '2022-03-24', 'b6220502345', '2564', 'jitwirapat', '0879823456', 'programmer', 'ยงยุศ', 'ศรัยน์ภพ', 'programmer', NULL, NULL, 'CODIUM', '865', 'พระราม1', 'วังใหม่', 'ปทุมวัน', 'กรุงเทพมหานคร', '10330', 'ปทุมวัน', 'บัวบาน', '0837629421', 'patum.b@outlook.com', '300', 'Have', 'dc', '2022-04-18', '2022-06-10', '01', 'application form_417', NULL),
(38, '2022-03-25', 'b6220502060', '2564', 'milky milk', '0819446381', 'programmer', 'มานะ', 'มานี', ',programmer', 1, NULL, NULL, '323', 'เจริญกรุง', 'เจริญกรุง', 'เจริญกรุง', 'กรุงเทพมหานคร', '10210', 'สุดที่รัก', 'รักที่สุด', '0817636381', 'kcof@hotmail.com', '800', 'Dont Have', 'dc', '2022-03-25', '2022-04-09', '01', 'application form_511', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` varchar(5) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
('01', 'รอการอนุมัติ'),
('02', 'อนุมัติ'),
('03', 'ไม่อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(11) NOT NULL,
  `name_id` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_surname` varchar(50) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name_id`, `user_name`, `user_surname`, `user_phone`, `user_email`, `user_password`) VALUES
('a5520501234', '01', 'นิตยา', 'ห้วยหงษ์ทอง', '02', 'aj@hmail.com', 'aj'),
('b6220501111', '01', 'ศรีสวัส', 'จรันทรัพย์', '0816523456', 'saj.ph@outlook.com', '6220501111'),
('b6220501212', '03', 'คำพาน', 'รำเพย', '0918765243', 'kp.rp@outlook.com', '6220501212'),
('b6220502060', '01', 'กัญญาณัฐ', 'ตั้งเจริญ', '0998721999', 'k@ku.th', '6220502060'),
('b6220502086', '01', 'ณัฐนรี', 'คำเด่นเหล็ก', '0881669998', 'n@ku.th', '6220502086'),
('b6220502345', '03', 'จิตรวิรภัทร', 'ลี', '0834569872', 'lee.jitwi@outlook.com', '6220502345'),
('b6220503309', '01', 'พจรินทร์', 'ประเสริฐศรี', '0881669191', 'p@ku.th', '6220503309'),
('b6220503325', '01', 'มนัญชยา', 'ไวทยากุล', '0998721768', 'm@ku.th', '6220503325');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`approve_id`);

--
-- Indexes for table `detail_company`
--
ALTER TABLE `detail_company`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `detail_cooperative`
--
ALTER TABLE `detail_cooperative`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `name_title`
--
ALTER TABLE `name_title`
  ADD PRIMARY KEY (`name_id`);

--
-- Indexes for table `petition`
--
ALTER TABLE `petition`
  ADD PRIMARY KEY (`petition_id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `statusp` (`status_id`),
  ADD KEY `companyid` (`dc_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `app` (`approve_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `namett` (`name_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `approve_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=843;

--
-- AUTO_INCREMENT for table `detail_company`
--
ALTER TABLE `detail_company`
  MODIFY `dc_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `detail_cooperative`
--
ALTER TABLE `detail_cooperative`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petition`
--
ALTER TABLE `petition`
  MODIFY `petition_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petition`
--
ALTER TABLE `petition`
  ADD CONSTRAINT `app` FOREIGN KEY (`approve_id`) REFERENCES `approve` (`approve_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `companyid` FOREIGN KEY (`dc_id`) REFERENCES `detail_company` (`dc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cooperid` FOREIGN KEY (`c_id`) REFERENCES `detail_cooperative` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `statusp` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `namett` FOREIGN KEY (`name_id`) REFERENCES `name_title` (`name_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
