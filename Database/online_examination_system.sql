-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 01:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `correct` int(11) DEFAULT '0' COMMENT '0=false, 1=true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `content`, `correct`) VALUES
(1, 1, 'Noi dung cau tra loi', 1),
(2, 1, 'Noi dung cau tra loi', 0),
(3, 1, 'Noi dung cau tra loi', 0),
(4, 1, 'Noi dung cau tra loi', 0),
(5, 2, 'Noi dung cau tra loi', 1),
(6, 2, 'Noi dung cau tra loi', 0),
(7, 2, 'Noi dung cau tra loi', 0),
(8, 2, 'Noi dung cau tra loi', 0),
(14, 3, 'Noi dung cau tra loi', 0),
(15, 3, 'Noi dung cau tra loi', 0),
(16, 3, 'Noi dung cau tra loi', 0),
(17, 3, 'Noi dung cau tra loi', 1),
(18, 4, 'Noi dung cau tra loi', 0),
(19, 4, 'Noi dung cau tra loi', 0),
(20, 4, 'Noi dung cau tra loi', 0),
(21, 4, 'Noi dung cau tra loi', 1),
(22, 5, 'Noi dung cau tra loi', 0),
(23, 5, 'Noi dung cau tra loi', 0),
(24, 5, 'Noi dung cau tra loi', 0),
(25, 5, 'Noi dung cau tra loi', 1),
(26, 6, 'Noi dung cau tra loi', 0),
(27, 6, 'Noi dung cau tra loi', 0),
(28, 6, 'Noi dung cau tra loi', 0),
(29, 6, 'Noi dung cau tra loi', 1),
(30, 7, 'Noi dung cau tra loi', 0),
(31, 7, 'Noi dung cau tra loi', 0),
(32, 7, 'Noi dung cau tra loi', 0),
(33, 7, 'Noi dung cau tra loi', 1),
(34, 8, 'Noi dung cau tra loi', 0),
(35, 8, 'Noi dung cau tra loi', 0),
(36, 8, 'Noi dung cau tra loi', 0),
(37, 8, 'Noi dung cau tra loi', 1),
(38, 9, 'Noi dung cau tra loi', 0),
(39, 9, 'Noi dung cau tra loi', 0),
(40, 9, 'Noi dung cau tra loi', 0),
(41, 9, 'Noi dung cau tra loi', 1),
(42, 10, 'Noi dung cau tra loi', 0),
(43, 10, 'Noi dung cau tra loi', 0),
(44, 10, 'Noi dung cau tra loi', 0),
(45, 10, 'Noi dung cau tra loi', 1),
(46, 11, 'Noi dung cau tra loi', 0),
(47, 11, 'Noi dung cau tra loi', 0),
(48, 11, 'Noi dung cau tra loi', 0),
(49, 11, 'Noi dung cau tra loi', 1),
(50, 12, 'Noi dung cau tra loi', 0),
(51, 12, 'Noi dung cau tra loi', 0),
(52, 12, 'Noi dung cau tra loi', 0),
(53, 12, 'Noi dung cau tra loi', 1),
(54, 13, 'Noi dung cau tra loi', 0),
(55, 13, 'Noi dung cau tra loi', 0),
(56, 13, 'Noi dung cau tra loi', 0),
(57, 13, 'Noi dung cau tra loi', 1),
(58, 14, 'Noi dung cau tra loi', 0),
(59, 14, 'Noi dung cau tra loi', 0),
(60, 14, 'Noi dung cau tra loi', 0),
(61, 14, 'Noi dung cau tra loi', 1),
(62, 15, 'Noi dung cau tra loi', 0),
(63, 15, 'Noi dung cau tra loi', 0),
(64, 15, 'Noi dung cau tra loi', 0),
(65, 15, 'Noi dung cau tra loi', 1),
(66, 16, 'Noi dung cau tra loi', 0),
(67, 16, 'Noi dung cau tra loi', 0),
(68, 16, 'Noi dung cau tra loi', 0),
(69, 16, 'Noi dung cau tra loi', 1),
(70, 17, 'Noi dung cau tra loi', 0),
(71, 17, 'Noi dung cau tra loi', 0),
(72, 17, 'Noi dung cau tra loi', 0),
(73, 17, 'Noi dung cau tra loi', 1),
(74, 18, 'Noi dung cau tra loi', 0),
(75, 18, 'Noi dung cau tra loi', 0),
(76, 18, 'Noi dung cau tra loi', 0),
(77, 18, 'Noi dung cau tra loi', 1),
(78, 19, 'Noi dung cau tra loi', 0),
(79, 19, 'Noi dung cau tra loi', 0),
(80, 19, 'Noi dung cau tra loi', 0),
(81, 19, 'Noi dung cau tra loi', 1),
(82, 20, 'Noi dung cau tra loi', 0),
(83, 20, 'Noi dung cau tra loi', 0),
(84, 20, 'Noi dung cau tra loi', 0),
(85, 20, 'Noi dung cau tra loi', 1),
(86, 21, 'Noi dung cau tra loi', 0),
(87, 21, 'Noi dung cau tra loi', 0),
(88, 21, 'Noi dung cau tra loi', 0),
(89, 21, 'Noi dung cau tra loi', 1),
(90, 23, 'Noi dung cau tra loi', 0),
(91, 23, 'Noi dung cau tra loi', 0),
(92, 23, 'Noi dung cau tra loi', 0),
(93, 23, 'Noi dung cau tra loi', 1),
(94, 24, 'Noi dung cau tra loi', 0),
(95, 24, 'Noi dung cau tra loi', 0),
(96, 24, 'Noi dung cau tra loi', 0),
(97, 24, 'Noi dung cau tra loi', 1),
(98, 25, 'Noi dung cau tra loi', 0),
(99, 25, 'Noi dung cau tra loi', 0),
(100, 25, 'Noi dung cau tra loi', 0),
(101, 25, 'Noi dung cau tra loi', 1),
(102, 26, 'Noi dung cau tra loi', 0),
(103, 26, 'Noi dung cau tra loi', 0),
(104, 26, 'Noi dung cau tra loi', 0),
(105, 26, 'Noi dung cau tra loi', 1),
(106, 27, 'Noi dung cau tra loi', 0),
(107, 27, 'Noi dung cau tra loi', 0),
(108, 27, 'Noi dung cau tra loi', 0),
(109, 27, 'Noi dung cau tra loi', 1),
(110, 28, 'Noi dung cau tra loi', 0),
(111, 28, 'Noi dung cau tra loi', 0),
(112, 28, 'Noi dung cau tra loi', 0),
(113, 28, 'Noi dung cau tra loi', 1),
(114, 29, 'Noi dung cau tra loi', 0),
(115, 29, 'Noi dung cau tra loi', 0),
(116, 29, 'Noi dung cau tra loi', 0),
(117, 29, 'Noi dung cau tra loi', 1),
(118, 30, 'Noi dung cau tra loi', 0),
(119, 30, 'Noi dung cau tra loi', 0),
(120, 30, 'Noi dung cau tra loi', 0),
(121, 30, 'Noi dung cau tra loi', 1),
(122, 31, 'Noi dung cau tra loi', 0),
(123, 31, 'Noi dung cau tra loi', 0),
(124, 31, 'Noi dung cau tra loi', 0),
(125, 31, 'Noi dung cau tra loi', 1),
(126, 32, 'Noi dung cau tra loi', 0),
(127, 32, 'Noi dung cau tra loi', 0),
(128, 32, 'Noi dung cau tra loi', 0),
(129, 32, 'Noi dung cau tra loi', 1),
(130, 33, 'Noi dung cau tra loi', 0),
(131, 33, 'Noi dung cau tra loi', 0),
(132, 33, 'Noi dung cau tra loi', 0),
(133, 33, 'Noi dung cau tra loi', 1),
(134, 34, 'Noi dung cau tra loi', 0),
(135, 34, 'Noi dung cau tra loi', 0),
(136, 34, 'Noi dung cau tra loi', 0),
(137, 34, 'Noi dung cau tra loi', 1),
(138, 35, 'Noi dung cau tra loi', 0),
(139, 35, 'Noi dung cau tra loi', 0),
(140, 35, 'Noi dung cau tra loi', 0),
(141, 35, 'Noi dung cau tra loi', 1),
(142, 36, 'Noi dung cau tra loi', 0),
(143, 36, 'Noi dung cau tra loi', 0),
(144, 36, 'Noi dung cau tra loi', 0),
(145, 36, 'Noi dung cau tra loi', 1),
(146, 37, 'Noi dung cau tra loi', 0),
(147, 37, 'Noi dung cau tra loi', 0),
(148, 37, 'Noi dung cau tra loi', 0),
(149, 37, 'Noi dung cau tra loi', 1),
(150, 38, 'Noi dung cau tra loi', 0),
(151, 38, 'Noi dung cau tra loi', 0),
(152, 38, 'Noi dung cau tra loi', 0),
(153, 38, 'Noi dung cau tra loi', 1),
(154, 39, 'Noi dung cau tra loi', 0),
(155, 39, 'Noi dung cau tra loi', 0),
(156, 39, 'Noi dung cau tra loi', 0),
(157, 39, 'Noi dung cau tra loi', 1),
(158, 40, 'Noi dung cau tra loi', 0),
(159, 40, 'Noi dung cau tra loi', 0),
(160, 40, 'Noi dung cau tra loi', 0),
(162, 40, 'Noi dung cau tra loi', 1),
(163, 22, 'Noi dung cau tra loi', 0),
(164, 22, 'Noi dung cau tra loi', 0),
(165, 22, 'Noi dung cau tra loi', 0),
(166, 22, 'Noi dung cau tra loi', 1),
(167, 42, '2', 1),
(170, 42, '4', 0),
(171, 42, '15', 0),
(172, 42, '8', 0),
(175, 43, '2', 0),
(176, 43, '15', 0),
(177, 43, '4', 1),
(178, 43, '8', 0),
(179, 44, '10', 0),
(180, 44, '6', 1),
(181, 44, '3', 0),
(182, 44, '12', 0),
(183, 45, '8', 1),
(184, 45, '2', 0),
(185, 45, '4', 0),
(186, 45, '16', 0),
(187, 46, '10', 1),
(188, 46, '23', 0),
(189, 46, '25', 0),
(190, 46, '15', 0),
(191, 47, '12', 1),
(192, 47, '22', 0),
(193, 47, '20', 0),
(194, 47, '10', 0),
(195, 48, '14', 1),
(196, 48, '16', 0),
(197, 48, '12', 0),
(198, 48, '10', 0),
(199, 49, '16', 1),
(200, 49, '18', 0),
(201, 49, '14', 0),
(202, 49, '12', 0),
(203, 50, '18', 1),
(204, 50, '20', 0),
(205, 50, '22', 0),
(206, 50, '24', 0),
(207, 51, '20', 1),
(208, 51, '21', 0),
(209, 51, '22', 0),
(210, 51, '24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `exam_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` tinyint(4) DEFAULT NULL COMMENT 'minutes',
  `number_of_questions` tinyint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `subject_id`, `exam_name`, `duration`, `number_of_questions`) VALUES
(1, 1, 'Đề thi minh họa môn Toán THPTQG của BGD năm 2019', 90, 50),
(2, 1, '30 câu trắc nghiệm liên quan đến nhị thức Newton', 45, 30),
(3, 5, 'Đề thi tham khảo THPT QG 2019 môn Sinh học có đáp án', 50, 40),
(4, 1, 'Bảng cửu chương 2', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `exam_info`
--

CREATE TABLE `exam_info` (
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_info`
--

INSERT INTO `exam_info` (`exam_id`, `question_id`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(3, 40),
(4, 42),
(4, 43),
(4, 44),
(4, 45),
(4, 46),
(4, 47),
(4, 48),
(4, 49),
(4, 50),
(4, 51);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `level_of_difficult` int(11) DEFAULT '1' COMMENT '1=easy, 2=normal,3=hard',
  `solution` text COLLATE utf8mb4_unicode_ci,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `content`, `level_of_difficult`, `solution`, `created`, `modified`) VALUES
(1, 'Có thể sử dụng hóa chất nào sau đây để phát hiện quá trình hô hấp ở thực vật thải ra khí CO2? ', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(2, 'Động vật nào trao đổi khí với môi trường thông qua hệ thống ống khí?', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(3, 'Axit amin là đơn phân cấu tạo nên phân tử nào sau đây? ', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(4, 'Phân tử nào sau đây trực tiếp làm khuôn cho quá trình dịch mã? ', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(5, 'Một phân tử ADN ở vi khuẩn có 10% số nuclêôtit loại A. Theo lí thuyết, tỉ lệ nuclêôtit loại G của phân tử này là bao nhiêu?\r\n', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(6, 'Theo lí thuyết, cơ thể có kiểu gen aaBB giảm phân tạo ra loại giao tử aB chiếm tỉ lệ ', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(7, 'Cơ thể có kiểu gen nào đồng hợp tử về tất cả các cặp gen đang xét? ', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(8, 'Theo lí thuyết, phép lai nào sau đây cho đời con có 1 loại kiểu gen? \r\n\r\n', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(9, 'Theo lí thuyết, phép lai nào cho đời con có kiểu gen phân li theo tỉ lệ 1 : 1 ? \r\n\r\n', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(10, 'Cho biết alen D quy định hoa đỏ trội hoàn toàn so với alen d quy định hoa trắng. Theo lí thuyết, phép lai giữa các cây có kiểu gen nào sau đây tạo ra đời con có 2 loại kiểu hình? \r\n\r\n', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(11, 'Một quần thể thực vật giao phấn đang ở trạng thái cân bằng di truyền, xét 1 gen có hai alen là A và a, trong đó tần số alen A là 0,4. Theo lí thuyết, tần số kiểu gen aa của quần thể là \r\n\r\n', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(12, 'Từ một cây hoa quý hiếm, bằng cách áp dụng kĩ thuật nào sau đây có thể nhanh chóng tạo ra nhiều cây có kiểu gen giống nhau và giống với cây hoa ban đầu? \r\n\r\n', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(13, 'Theo thuyết tiến hóa hiện đại, nhân tố tiến hóa nào sau đây chỉ làm thay đổi tần số kiểu gen mà không làm thay đổi tần số alen của quần thể? ', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(14, 'Trong lịch sử phát triển của sinh giới qua các đại địa chất, cây có mạch và động vật lên cạn ở đại nào sau đây? ', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(15, 'Trong một quần xã sinh vật hồ nước, nếu hai loài cá có ổ sinh thái trùng nhau thì giữa chúng thường xảy ra mối quan hệ \r\n\r\n', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(16, 'Cho chuỗi thức ăn: Lúa → Châu chấu → Nhái → Rắn → Diều hâu. Trong chuỗi thức ăn này, sinh vật tiêu thụ bậc 2 là \r\n\r\n', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(17, 'Khi nói về ảnh hưởng của các nhân tố môi trường đến quá trình quang hợp ở thực vật, phát biểu nào sau đây sai? \r\n\r\n', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(18, 'Khi nói về hoạt động của hệ tuần hoàn ở thú, phát biểu nào sau đây sai? \r\n\r\n', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(19, 'Dạng đột biến nào sau đây làm tăng số lượng alen của 1 gen trong tế bào nhưng không làm xuất hiện alen mới? \r\n\r\n', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(20, 'Khi nói về đột biến gen, phát biểu nào sau đây sai? \r\n\r\n', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(21, 'Một loài thực vật, cho 2 cây (P) đều dị hợp tử về 2 cặp gen cùng nằm trên 1 cặp NST giao phấn với nhau, thu được F1. Cho biết các gen liên kết hoàn toàn. Theo lí thuyết, F1 có tối đa bao nhiêu loại kiểu gen? \r\n\r\n', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(22, 'Khi nói về CLTN theo thuyết tiến hóa hiện đại, phát biểu nào sau đây đúng? \r\n\r\n', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(23, 'Khi nói về kích thước quần thể sinh vật, phát biểu nào sau đây đúng?', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(24, 'Khi nói về hệ sinh thái trên cạn, phát biểu nào sau đây đúng?', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(25, 'Khi nói về đột biến lặp đoạn NST, phát biểu nào sau đây sai?', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(26, 'Trong quá trình giảm phân ở cơ thể có kiểu gen AaBb, có một số tế bào xảy ra sự không phân li của tất cả các cặp NST ở giảm phân I, giảm phân II diễn ra bình thường, tạo ra các giao tử đột biến. Nếu giao tử đột biến này kết hợp với giao tử Ab thì tạo thành hợp tử có kiểu gen nào sau đây?', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(27, 'Ở đậu Hà Lan, alen A quy định hoa đỏ trội hoàn toàn so với alen a quy định hoa trắng. Trong thí nghiệm thực hành lai giống, một nhóm học sinh đã lấy tất cả các hạt phấn của 1 cây đậu hoa đỏ thụ phấn cho 1 cây đậu hoa đỏ khác. Theo lí thuyết, dự đoán nào sau đây sai?', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(28, 'Một loài thực vật, cho cây thân cao, lá nguyên giao phấn với cây thân thấp, lá xẻ (P), thu được F1 gồm toàn cây thân cao, lá nguyên. Lai phân tích cây F1, thu được Fa có kiểu hình phân li theo tỉ lệ: 1 cây thân cao, lá nguyên : 1 cây thân cao, lá xẻ : 1 cây thân thấp, lá nguyên : 1 cây thân thấp, lá xẻ. Cho biết mỗi gen quy định 1 tính trạng. Theo lí thuyết, phát biểu nào sau đây đúng?', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(29, 'Khi nói về quá trình hình thành loài mới bằng con đường cách li địa lí, phát biểu nào sau đây đúng?', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(30, 'Khi nói về các đặc trưng cơ bản của quần thể sinh vật, phát biểu nào sau đây đúng?', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(31, 'Giả sử một lưới thức ăn được mô tả như sau: Thỏ, chuột, châu chấu và chim sẻ đều ăn thực vật; châu chấu là thức ăn của chim sẻ; cáo ăn thỏ và chim sẻ; cú mèo ăn chuột. Phát biểu nào sau đây đúng về lưới thức ăn này?', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(32, 'Khi nói về thành phần hữu sinh trong hệ sinh thái, phát biểu nào sau đây đúng?', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(33, 'Ba tế bào sinh tinh của cơ thể có kiểu gen Aa(BD/bd)giảm phân bình thường, trong đó có 1 tế bào xảy ra hoán vị giữa alen D và alen d. Theo lí thuyết, kết thúc giảm phân có thể tạo ra', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(34, 'Một loài thực vật có bộ NST 2n = 24. Giả sử có 1 thể đột biến của loài này chỉ bị đột biến mất đoạn nhỏ không chứa tâm động ở 1 NST thuộc cặp số 5. Cho biết không phát sinh đột biến mới, thể đột biến này giảm phân bình thường và không xảy ra trao đổi chéo. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng về thể đột biến này?', 2, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(35, 'Một loài thực vật, cho cây thân cao, hoa đỏ (P) tự thụ phấn, thu được F1 có 4 loại kiểu hình trong đó có 1% số cây thân thấp, hoa trắng. Biết rằng mỗi gen quy định 1 tính trạng. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. F1 có tối đa 9 loại kiểu gen.\r\n<br>\r\nII. F1 có 32% số cây đồng hợp tử về 1 cặp gen.\r\n<br>\r\nIII. F1 có 24% số cây thân cao, hoa trắng.\r\n<br>\r\nIV. Kiểu gen của P có thể là AB/ab.\r\n  ', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(36, 'Ở ruồi giấm, alen A quy định thân xám trội hoàn toàn so với alen a quy định thân đen; alen B quy định cánh dài trội hoàn toàn so với alen b quy định cánh cụt; alen D quy định mắt đỏ trội hoàn toàn so với alen d quy định mắt trắng. Phép lai P:  , thu được F1 có 5,125% số cá thể có kiểu hình lặn về 3 tính trạng. Theo lí thuyết, số cá thể cái dị hợp tử về 1 trong 3 cặp gen ở F1 chiếm tỉ lệ', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(37, 'Một loài thực vật, cho cây hoa đỏ (P) tự thụ phấn, thu được F1 gồm 56,25% cây hoa đỏ; 18,75% cây hoa hồng; 18,75% cây hoa vàng; 6,25% cây hoa trắng. Lai phân tích cây hoa đỏ dị hợp tử về 2 cặp gen ở F1, thu được Fa. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. F1 có 6 loại kiểu gen quy định kiểu hình hoa đỏ.\r\n<br>\r\nII. Các cây hoa đỏ F1 giảm phân đều cho 4 loại giao tử với tỉ lệ bằng nhau.\r\n<br>\r\nIII. Fa có số cây hoa vàng chiếm 25%.\r\n<br>\r\nIV. Fa có số cây hoa đỏ chiếm tỉ lệ lớn nhất.', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(38, 'Một loài thực vật, tính trạng chiều cao thân do 2 cặp gen A, a và B, b phân li độc lập cùng quy định: kiểu gen có cả 2 loại alen trội A và B quy định thân cao, các kiểu gen còn lại đều quy định thân thấp. Alen D quy định hoa vàng trội hoàn toàn so với alen d quy định hoa trắng. Cho cây dị hợp tử về 3 cặp gen (P) tự thụ phấn, thu được F1 có kiểu hình phân li theo tỉ lệ 6 cây thân cao, hoa vàng : 6 cây thân thấp, hoa vàng : 3 cây thân cao, hoa trắng : 1 cây thân thấp, hoa trắng. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. Kiểu gen của cây P có thể là .\r\n<br>\r\nII. F1 có 1/4 số cây thân cao, hoa vàng dị hợp tử về 3 cặp gen.\r\n<br>\r\nIII. F1 có tối đa 7 loại kiểu gen.\r\n<br>\r\nIV. F1 có 3 loại kiểu gen quy định cây thân thấp, hoa vàng. ', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(39, 'Một quần thể thực vật tự thụ phấn, alen A quy định hoa đỏ trội hoàn toàn so với alen a quy định hoa trắng. Thế hệ xuất phát (P) có 20% số cây hoa trắng. Ở F3, số cây hoa trắng chiếm 25%. Cho rằng quần thể không chịu tác động của các nhân tố tiến hóa khác. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. Tần số kiểu gen ở thế hệ P là 24/35 AA : 4/35 Aa : 7/35 aa.\r\n<br>\r\nII. Tần số alen A ở thế hệ P là 9/35.\r\n<br>\r\nIII. Tỉ lệ kiểu hình ở F1 là 27 cây hoa đỏ : 8 cây hoa trắng.\r\n<br>\r\nIV. Hiệu số giữa tỉ lệ cây hoa đỏ có kiểu gen đồng hợp tử với tỉ lệ cây hoa trắng giảm dần qua các thế hệ.', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(40, 'Một loài động vật, xét 3 gen cùng nằm trên 1 nhiễm sắc thể thường theo thứ tự là gen 1 – gen 2- gen 3. Cho biết mỗi gen quy định một tính trạng, mỗi gen đều có 2 alen, các alen trội là trội hoàn toàn và không xảy ra đột biến. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. Cho các cá thể được mang kiểu hình trội về 2 trong 3 tình trạng lai với các cá thể mang kiểu hình lặn về 2 trong 3 tính trạng thì trong loài có tối đa 90 phép lai.\r\n<br>\r\nII. Loài này có tối đa 6 loại kiểu gen đồng hợp tử về cả 3 cặp gen.\r\n<br>\r\nIII. Cho các cá thể đực mang kiểu hình trội về 3 tính trạng, dị hợp tử về 2 cặp gen lai với cá thể cái mang kiểu hình lặn về 1 trong 3 tính trạng, có thể thu được đời con có 1 loại kiểu hình.\r\n<br>\r\nIV. Cho cá thể được mang kiểu hình trội về 1 trong 3 tính trạng lai với cá thể cái mang kiểu hình trội về 1 trong 3 tính trạng, có thể thu được đời con có kiểu hình phân li theo tỉ lệ 2 : 2 : 1 : 1. ', 3, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(41, 'noi dung cau hoi', 1, NULL, '2018-12-24 14:27:21', '2018-12-24 14:27:32'),
(42, '2*1=?', 1, NULL, '2018-12-26 12:49:24', '2018-12-26 12:49:24'),
(43, '2*2=?', 1, NULL, '2018-12-26 12:49:24', '2018-12-26 12:49:24'),
(44, '2*3=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(45, '2*4=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(46, '2*5=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(47, '2*6=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(48, '2*7=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(49, '2*8=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(50, '2*9=?', 1, NULL, '2018-12-26 12:49:25', '2018-12-26 12:49:25'),
(51, '2*10=?', 1, 'Theo bảng cửu chương II thì 2*10 = 20', '2018-12-26 12:49:25', '2018-12-26 19:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `completion_time` datetime NOT NULL,
  `point` float DEFAULT NULL,
  `number_done_question` int(11) NOT NULL COMMENT 'số câu đã làm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`user_id`, `exam_id`, `completion_time`, `point`, `number_done_question`) VALUES
(3, 4, '2018-12-26 19:33:14', 10, 10),
(3, 4, '2018-12-26 19:33:27', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `title`) VALUES
(1, 'Math'),
(2, 'English'),
(3, 'Physical'),
(4, 'Chemistry'),
(5, 'Biological'),
(6, 'Geography'),
(7, 'History'),
(8, 'Informatics'),
(9, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Change me',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0=pending,1=ok',
  `access_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `status`, `access_code`, `level`) VALUES
(3, 'Phạm Thanh Tùng', 'gicungduoc2809@gmail.com', '$2y$12$619626d8a317ff9f4b304uvkd/TiMCXw60dya.ykc.yNxh4bfO2v2', 1, '619626d8a317ff9f4b3043d14cfac436', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer` (`question_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `exam_info`
--
ALTER TABLE `exam_info`
  ADD PRIMARY KEY (`exam_id`,`question_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`user_id`,`exam_id`,`completion_time`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);

--
-- Constraints for table `exam_info`
--
ALTER TABLE `exam_info`
  ADD CONSTRAINT `exam_info_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`),
  ADD CONSTRAINT `exam_info_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`exam_id`) REFERENCES `exam` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
