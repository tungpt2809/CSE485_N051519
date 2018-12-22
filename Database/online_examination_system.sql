-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 04:11 PM
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
  `question_id` int(11) NOT NULL,
  `A` text COLLATE utf8mb4_unicode_ci,
  `B` text COLLATE utf8mb4_unicode_ci,
  `C` text COLLATE utf8mb4_unicode_ci,
  `D` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`question_id`, `A`, `B`, `C`, `D`) VALUES
(1, 'Dung dịch NaCl.', 'Dung dịch Ca(OH)2.', 'Dung dịch KCl.', 'Dung dịch H2SO4.'),
(2, 'Châu chấu.', 'Sư tử.', 'Chuột.', 'Ếch đồng.'),
(3, 'ADN.       C. D. ', 'mARN.', 'tARN.', 'Prôtêin.'),
(4, 'ADN.', 'mARN.', 'tARN.', 'rARN.'),
(5, '10%.', '30%.', '20%.', '40%.'),
(6, '50%.', '15%.', '25%.', '100%.'),
(7, 'aabbdd.', 'AabbDD.', 'aaBbDD.', 'aaBBDd.'),
(8, 'AA × Aa.  B.         C. D. ', 'AA× aa.', 'Aa × Aa.', 'Aa× AA.'),
(9, 'AA × AA.', 'Aa× aa.', 'Aa ×  Aa.', 'AA × aa.'),
(10, 'Dd ×  Dd.', 'DD × dd.', 'dd× dd.', 'DD ×  DD.'),
(11, '0,36.', '0,16.', '0,40.', '0,48.'),
(12, 'Nuôi cấy hạt phấn.', 'Nuôi cấy mô.', 'Nuôi cấy noãn chưa được thụ tinh.', 'Lai hữu tính.'),
(13, 'Giao phối không ngẫu nhiên.', 'Đột biến.', 'Chọn lọc tự nhiên.', 'Các yếu tố ngẫu nhiên.'),
(14, 'Đại Nguyên sinh.', 'Đại Tân sinh.', 'Đại Cổ sinh.', 'Đại Trung sinh.'),
(15, 'cộng sinh.', 'cạnh tranh.', 'sinh vật này ăn sinh vật khác.', 'kí sinh.'),
(16, 'lúa.', 'châu chấu.', 'nhái.', 'rắn.'),
(17, 'Cường độ quang hợp luôn tỉ lệ thuận với cường độ ánh sáng.', 'Quang hợp bị giảm mạnh và có thể bị ngừng trệ khi cây bị thiếu nước.', 'Nhiệt độ ảnh hưởng đến quang hợp thông qua ảnh hưởng đến các phản ứng enzim trong quang hợp.', 'CO2 ảnh hưởng đến quang hợp vì CO2 là nguyên liệu của pha tối.'),
(18, 'Tim co dãn tự động theo chu kì là nhờ hệ dẫn truyền tim. ', 'Khi tâm thất trái co, máu từ tâm thất trái được đẩy vào động mạch phổi.', 'Khi tâm nhĩ co, máu được đẩy từ tâm nhĩ xuống tâm thất.', 'Loài có khối lượng cơ thể lớn thì có số nhịp tim/phút ít hơn loài có khối lượng cơ thể nhỏ.'),
(19, 'Đột biến gen.', 'Đột biến tự đa bội.', 'Đột biến đảo đoạn NST.', 'Đột biến chuyển đoạn trong 1 NST.\r\n'),
(20, 'Đột biến thay thế 1 cặp nuclêôtit có thể không làm thay đổi tỉ lệ (A + T)/(G + X) của gen.', 'Đột biến điểm có thể không gây hại cho thể đột biến.', 'Đột biến gen có thể làm thay đổi số lượng liên kết hiđrô của gen.', 'Những cơ thể mang alen đột biến đều là thể đột biến.'),
(21, '3', '5', '4', '7'),
(22, 'CLTN là nhân tố định hướng quá trình tiến hóa. ', 'CLTN tác động trực tiếp lên kiểu gen làm biến đổi tần số alen của quần thể.', 'CLTN chỉ diễn ra khi môi trường sống thay đổi.', 'CLTN tạo ra kiểu gen mới quy định kiểu hình thích nghi với môi trường.'),
(23, 'Kích thước quần thể luôn giống nhau giữa các quần thể cùng loài. B. C.   D. .', 'Kích thước quần thể chỉ phụ thuộc vào mức độ sinh sản và mức độ tử vong của quần thể.', 'Nếu kích thước quần thể vượt quá mức tối đa thì mức độ cạnh tranh giữa các cá thể sẽ tăng cao.', 'Nếu kích thước quần thể xuống dưới mức tối thiểu, mức độ sinh sản của quần thể sẽ tăng lên.'),
(24, 'Thực vật đóng vai trò chủ yếu trong việc truyền năng lượng từ môi trường vô sinh vào quần xã sinh vật.', 'Sự thất thoát năng lượng qua mỗi bậc dinh dưỡng trong hệ sinh thái là không đáng kể.', 'Vật chất và năng lượng đều được trao đổi theo vòng tuần hoàn kín.', 'Vi khuẩn là nhóm sinh vật duy nhất có khả năng phân giải các chất hữu cơ thành các chất vô cơ.'),
(25, 'Đột biến lặp đoạn làm tăng số lượng gen trên 1 NST.', 'Đột biến lặp đoạn luôn có lợi cho thể đột biến.', 'Đột biến lặp đoạn có thể làm cho 2 alen của 1 gen cùng nằm trên 1 NST.', 'Đột biến lặp đoạn có thể dẫn đến lặp gen, tạo điều kiện cho đột biến gen, tạo ra các gen mới.'),
(26, 'AAaBbb.', 'AaaBBb.', 'AAaBBb', 'AaaBbb.'),
(27, 'Đời con có thể có 1 loại kiểu gen và 1 loại kiểu hình.', 'Đời con có thể có 2 loại kiểu gen và 1 loại kiểu hình.', 'Đời con có thể có 3 loại kiểu gen và 2 loại kiểu hình.', 'Đời con có thể có 2 loại kiểu gen và 2 loại kiểu hình.'),
(28, 'Cây thân thấp, lá nguyên ở Fa giảm phân bình thường tạo ra 4 loại giao tử.', 'Cho cây F1 tự thụ phấn, thu được F2 có 1/3 số cây thân cao, lá xẻ.', 'Cây thân cao, lá xẻ ở Fa đồng hợp tử về 2 cặp gen.', 'Cây thân cao, lá nguyên ở Fa và cây thân cao, lá nguyên ở F1 có kiểu gen giống nhau.'),
(29, 'Quá trình này chỉ xảy ra ở động vật mà không xảy ra ở thực vật.', 'Cách li địa lí là nguyên nhân trực tiếp gây ra những biến đổi tương ứng trên cơ thể sinh vật.', 'Vốn gen của quần thể có thể bị thay đổi nhanh hơn nếu có tác động của các yếu tố ngẫu nhiên.', 'Quá trình này thường xảy ra một cách chậm chạp, không có sự tác động của CLTN.'),
(30, 'Kích thước của quần thể không phụ thuộc vào điều kiện môi trường.', 'Sự phân bố cá thể có ảnh hưởng tới khả năng khai thác nguồn sống trong môi trường.', 'Mật độ cá thể của mỗi quần thể luôn ổn định, không thay đổi theo mùa, theo năm.', 'Khi kích thước quần thể đạt mức tối đa thì tốc độ tăng trưởng của quần thể là lớn nhất.'),
(31, 'Cáo và cú mèo có ổ sinh thái về dinh dưỡng khác nhau.', 'Có 5 loài cùng thuộc bậc dinh dưỡng cấp 2.', 'Chuỗi thức ăn dài nhất gồm có 5 mắt xích.', 'Cú mèo là sinh vật tiêu thụ bậc 3.'),
(32, 'Tất cả nấm đều là sinh vật phân giải.', 'Sinh vật tiêu thụ bậc 3 luôn có sinh khối lớn hơn sinh vật tiêu thụ bậc 2.', 'Tất cả các loài động vật ăn thịt thuộc cùng một bậc dinh dưỡng.', 'Vi sinh vật tự dưỡng được xếp vào nhóm sinh vật sản xuất.'),
(33, 'Tối đa 8 loại giao tử.', 'Loại giao tử mang 3 alen trội chiếm tỉ lệ 1/8.', '6 loại giao tử với tỉ lệ bằng nhau.', '4 loại giao tử với tỉ lệ 5 : 5 : 1 : 1.'),
(34, '1', '3', '4', '2'),
(35, '1', '2', '3', '4'),
(36, '28,25%.', '10,25%.', '25,00%.', '14,75%.'),
(37, '1', '2', '3', '4'),
(38, '2', '4', '3', '1'),
(39, '1', '2', '3', '4'),
(40, '1', '2', '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `correct_answer`
--

CREATE TABLE `correct_answer` (
  `question_id` int(11) NOT NULL,
  `correct` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `correct_answer`
--

INSERT INTO `correct_answer` (`question_id`, `correct`) VALUES
(1, 'B'),
(2, 'A'),
(3, 'D'),
(4, 'B'),
(5, 'D'),
(6, 'D'),
(7, 'A'),
(8, 'B'),
(9, 'B'),
(10, 'A'),
(11, 'A'),
(12, 'B'),
(13, 'A'),
(14, 'C'),
(15, 'B'),
(16, 'C'),
(17, 'A'),
(18, 'B'),
(19, 'B'),
(20, 'A'),
(21, 'C'),
(22, 'A'),
(23, 'C'),
(24, 'A'),
(25, 'B'),
(26, 'A'),
(27, 'D'),
(28, 'D'),
(29, 'C'),
(30, 'B'),
(31, 'A'),
(32, 'D'),
(33, 'D'),
(34, 'D'),
(35, 'B'),
(36, 'D'),
(37, 'A'),
(38, 'D'),
(39, 'B'),
(40, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `exam_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` tinyint(4) DEFAULT NULL,
  `number_of_questions` tinyint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `subject_id`, `exam_name`, `duration`, `number_of_questions`) VALUES
(1, 1, 'Đề thi minh họa môn Toán THPTQG của BGD năm 2019', 90, 50),
(2, 1, '30 câu trắc nghiệm liên quan đến nhị thức Newton', 45, 30),
(3, 5, 'Đề thi tham khảo THPT QG 2019 môn Sinh học có đáp án', 50, 40);

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
(3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `level_of_difficult` int(11) DEFAULT '1' COMMENT '1=easy, 2=normal,3=hard',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `content`, `level_of_difficult`, `created`, `modified`) VALUES
(1, 'Có thể sử dụng hóa chất nào sau đây để phát hiện quá trình hô hấp ở thực vật thải ra khí CO2? ', 1, NULL, NULL),
(2, 'Động vật nào trao đổi khí với môi trường thông qua hệ thống ống khí?', 1, NULL, NULL),
(3, 'Axit amin là đơn phân cấu tạo nên phân tử nào sau đây? ', 1, NULL, NULL),
(4, 'Phân tử nào sau đây trực tiếp làm khuôn cho quá trình dịch mã? ', 1, NULL, NULL),
(5, 'Một phân tử ADN ở vi khuẩn có 10% số nuclêôtit loại A. Theo lí thuyết, tỉ lệ nuclêôtit loại G của phân tử này là bao nhiêu?\r\n', 2, NULL, NULL),
(6, 'Theo lí thuyết, cơ thể có kiểu gen aaBB giảm phân tạo ra loại giao tử aB chiếm tỉ lệ ', 1, NULL, NULL),
(7, 'Cơ thể có kiểu gen nào đồng hợp tử về tất cả các cặp gen đang xét? ', 1, NULL, NULL),
(8, 'Theo lí thuyết, phép lai nào sau đây cho đời con có 1 loại kiểu gen? \r\n\r\n', 2, NULL, NULL),
(9, 'Theo lí thuyết, phép lai nào cho đời con có kiểu gen phân li theo tỉ lệ 1 : 1 ? \r\n\r\n', 2, NULL, NULL),
(10, 'Cho biết alen D quy định hoa đỏ trội hoàn toàn so với alen d quy định hoa trắng. Theo lí thuyết, phép lai giữa các cây có kiểu gen nào sau đây tạo ra đời con có 2 loại kiểu hình? \r\n\r\n', 3, NULL, NULL),
(11, 'Một quần thể thực vật giao phấn đang ở trạng thái cân bằng di truyền, xét 1 gen có hai alen là A và a, trong đó tần số alen A là 0,4. Theo lí thuyết, tần số kiểu gen aa của quần thể là \r\n\r\n', 3, NULL, NULL),
(12, 'Từ một cây hoa quý hiếm, bằng cách áp dụng kĩ thuật nào sau đây có thể nhanh chóng tạo ra nhiều cây có kiểu gen giống nhau và giống với cây hoa ban đầu? \r\n\r\n', 3, NULL, NULL),
(13, 'Theo thuyết tiến hóa hiện đại, nhân tố tiến hóa nào sau đây chỉ làm thay đổi tần số kiểu gen mà không làm thay đổi tần số alen của quần thể? ', 2, NULL, NULL),
(14, 'Trong lịch sử phát triển của sinh giới qua các đại địa chất, cây có mạch và động vật lên cạn ở đại nào sau đây? ', 1, NULL, NULL),
(15, 'Trong một quần xã sinh vật hồ nước, nếu hai loài cá có ổ sinh thái trùng nhau thì giữa chúng thường xảy ra mối quan hệ \r\n\r\n', 1, NULL, NULL),
(16, 'Cho chuỗi thức ăn: Lúa → Châu chấu → Nhái → Rắn → Diều hâu. Trong chuỗi thức ăn này, sinh vật tiêu thụ bậc 2 là \r\n\r\n', 1, NULL, NULL),
(17, 'Khi nói về ảnh hưởng của các nhân tố môi trường đến quá trình quang hợp ở thực vật, phát biểu nào sau đây sai? \r\n\r\n', 2, NULL, NULL),
(18, 'Khi nói về hoạt động của hệ tuần hoàn ở thú, phát biểu nào sau đây sai? \r\n\r\n', 2, NULL, NULL),
(19, 'Dạng đột biến nào sau đây làm tăng số lượng alen của 1 gen trong tế bào nhưng không làm xuất hiện alen mới? \r\n\r\n', 2, NULL, NULL),
(20, 'Khi nói về đột biến gen, phát biểu nào sau đây sai? \r\n\r\n', 3, NULL, NULL),
(21, 'Một loài thực vật, cho 2 cây (P) đều dị hợp tử về 2 cặp gen cùng nằm trên 1 cặp NST giao phấn với nhau, thu được F1. Cho biết các gen liên kết hoàn toàn. Theo lí thuyết, F1 có tối đa bao nhiêu loại kiểu gen? \r\n\r\n', 3, NULL, NULL),
(22, 'Khi nói về CLTN theo thuyết tiến hóa hiện đại, phát biểu nào sau đây đúng? \r\n\r\n', 1, NULL, NULL),
(23, 'Khi nói về kích thước quần thể sinh vật, phát biểu nào sau đây đúng?', 1, NULL, NULL),
(24, 'Khi nói về hệ sinh thái trên cạn, phát biểu nào sau đây đúng?', 1, NULL, NULL),
(25, 'Khi nói về đột biến lặp đoạn NST, phát biểu nào sau đây sai?', 1, NULL, NULL),
(26, 'Trong quá trình giảm phân ở cơ thể có kiểu gen AaBb, có một số tế bào xảy ra sự không phân li của tất cả các cặp NST ở giảm phân I, giảm phân II diễn ra bình thường, tạo ra các giao tử đột biến. Nếu giao tử đột biến này kết hợp với giao tử Ab thì tạo thành hợp tử có kiểu gen nào sau đây?', 3, NULL, NULL),
(27, 'Ở đậu Hà Lan, alen A quy định hoa đỏ trội hoàn toàn so với alen a quy định hoa trắng. Trong thí nghiệm thực hành lai giống, một nhóm học sinh đã lấy tất cả các hạt phấn của 1 cây đậu hoa đỏ thụ phấn cho 1 cây đậu hoa đỏ khác. Theo lí thuyết, dự đoán nào sau đây sai?', 3, NULL, NULL),
(28, 'Một loài thực vật, cho cây thân cao, lá nguyên giao phấn với cây thân thấp, lá xẻ (P), thu được F1 gồm toàn cây thân cao, lá nguyên. Lai phân tích cây F1, thu được Fa có kiểu hình phân li theo tỉ lệ: 1 cây thân cao, lá nguyên : 1 cây thân cao, lá xẻ : 1 cây thân thấp, lá nguyên : 1 cây thân thấp, lá xẻ. Cho biết mỗi gen quy định 1 tính trạng. Theo lí thuyết, phát biểu nào sau đây đúng?', 3, NULL, NULL),
(29, 'Khi nói về quá trình hình thành loài mới bằng con đường cách li địa lí, phát biểu nào sau đây đúng?', 2, NULL, NULL),
(30, 'Khi nói về các đặc trưng cơ bản của quần thể sinh vật, phát biểu nào sau đây đúng?', 2, NULL, NULL),
(31, 'Giả sử một lưới thức ăn được mô tả như sau: Thỏ, chuột, châu chấu và chim sẻ đều ăn thực vật; châu chấu là thức ăn của chim sẻ; cáo ăn thỏ và chim sẻ; cú mèo ăn chuột. Phát biểu nào sau đây đúng về lưới thức ăn này?', 2, NULL, NULL),
(32, 'Khi nói về thành phần hữu sinh trong hệ sinh thái, phát biểu nào sau đây đúng?', 1, NULL, NULL),
(33, 'Ba tế bào sinh tinh của cơ thể có kiểu gen Aa(BD/bd)giảm phân bình thường, trong đó có 1 tế bào xảy ra hoán vị giữa alen D và alen d. Theo lí thuyết, kết thúc giảm phân có thể tạo ra', 3, NULL, NULL),
(34, 'Một loài thực vật có bộ NST 2n = 24. Giả sử có 1 thể đột biến của loài này chỉ bị đột biến mất đoạn nhỏ không chứa tâm động ở 1 NST thuộc cặp số 5. Cho biết không phát sinh đột biến mới, thể đột biến này giảm phân bình thường và không xảy ra trao đổi chéo. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng về thể đột biến này?', 2, NULL, NULL),
(35, 'Một loài thực vật, cho cây thân cao, hoa đỏ (P) tự thụ phấn, thu được F1 có 4 loại kiểu hình trong đó có 1% số cây thân thấp, hoa trắng. Biết rằng mỗi gen quy định 1 tính trạng. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. F1 có tối đa 9 loại kiểu gen.\r\n<br>\r\nII. F1 có 32% số cây đồng hợp tử về 1 cặp gen.\r\n<br>\r\nIII. F1 có 24% số cây thân cao, hoa trắng.\r\n<br>\r\nIV. Kiểu gen của P có thể là AB/ab.\r\n  ', 3, NULL, NULL),
(36, 'Ở ruồi giấm, alen A quy định thân xám trội hoàn toàn so với alen a quy định thân đen; alen B quy định cánh dài trội hoàn toàn so với alen b quy định cánh cụt; alen D quy định mắt đỏ trội hoàn toàn so với alen d quy định mắt trắng. Phép lai P:  , thu được F1 có 5,125% số cá thể có kiểu hình lặn về 3 tính trạng. Theo lí thuyết, số cá thể cái dị hợp tử về 1 trong 3 cặp gen ở F1 chiếm tỉ lệ', 3, NULL, NULL),
(37, 'Một loài thực vật, cho cây hoa đỏ (P) tự thụ phấn, thu được F1 gồm 56,25% cây hoa đỏ; 18,75% cây hoa hồng; 18,75% cây hoa vàng; 6,25% cây hoa trắng. Lai phân tích cây hoa đỏ dị hợp tử về 2 cặp gen ở F1, thu được Fa. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. F1 có 6 loại kiểu gen quy định kiểu hình hoa đỏ.\r\n<br>\r\nII. Các cây hoa đỏ F1 giảm phân đều cho 4 loại giao tử với tỉ lệ bằng nhau.\r\n<br>\r\nIII. Fa có số cây hoa vàng chiếm 25%.\r\n<br>\r\nIV. Fa có số cây hoa đỏ chiếm tỉ lệ lớn nhất.', 3, NULL, NULL),
(38, 'Một loài thực vật, tính trạng chiều cao thân do 2 cặp gen A, a và B, b phân li độc lập cùng quy định: kiểu gen có cả 2 loại alen trội A và B quy định thân cao, các kiểu gen còn lại đều quy định thân thấp. Alen D quy định hoa vàng trội hoàn toàn so với alen d quy định hoa trắng. Cho cây dị hợp tử về 3 cặp gen (P) tự thụ phấn, thu được F1 có kiểu hình phân li theo tỉ lệ 6 cây thân cao, hoa vàng : 6 cây thân thấp, hoa vàng : 3 cây thân cao, hoa trắng : 1 cây thân thấp, hoa trắng. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. Kiểu gen của cây P có thể là .\r\n<br>\r\nII. F1 có 1/4 số cây thân cao, hoa vàng dị hợp tử về 3 cặp gen.\r\n<br>\r\nIII. F1 có tối đa 7 loại kiểu gen.\r\n<br>\r\nIV. F1 có 3 loại kiểu gen quy định cây thân thấp, hoa vàng. ', 3, NULL, NULL),
(39, 'Một quần thể thực vật tự thụ phấn, alen A quy định hoa đỏ trội hoàn toàn so với alen a quy định hoa trắng. Thế hệ xuất phát (P) có 20% số cây hoa trắng. Ở F3, số cây hoa trắng chiếm 25%. Cho rằng quần thể không chịu tác động của các nhân tố tiến hóa khác. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. Tần số kiểu gen ở thế hệ P là 24/35 AA : 4/35 Aa : 7/35 aa.\r\n<br>\r\nII. Tần số alen A ở thế hệ P là 9/35.\r\n<br>\r\nIII. Tỉ lệ kiểu hình ở F1 là 27 cây hoa đỏ : 8 cây hoa trắng.\r\n<br>\r\nIV. Hiệu số giữa tỉ lệ cây hoa đỏ có kiểu gen đồng hợp tử với tỉ lệ cây hoa trắng giảm dần qua các thế hệ.', 3, NULL, NULL),
(40, 'Một loài động vật, xét 3 gen cùng nằm trên 1 nhiễm sắc thể thường theo thứ tự là gen 1 – gen 2- gen 3. Cho biết mỗi gen quy định một tính trạng, mỗi gen đều có 2 alen, các alen trội là trội hoàn toàn và không xảy ra đột biến. Theo lí thuyết, có bao nhiêu phát biểu sau đây đúng?\r\n<br>\r\nI. Cho các cá thể được mang kiểu hình trội về 2 trong 3 tình trạng lai với các cá thể mang kiểu hình lặn về 2 trong 3 tính trạng thì trong loài có tối đa 90 phép lai.\r\n<br>\r\nII. Loài này có tối đa 6 loại kiểu gen đồng hợp tử về cả 3 cặp gen.\r\n<br>\r\nIII. Cho các cá thể đực mang kiểu hình trội về 3 tính trạng, dị hợp tử về 2 cặp gen lai với cá thể cái mang kiểu hình lặn về 1 trong 3 tính trạng, có thể thu được đời con có 1 loại kiểu hình.\r\n<br>\r\nIV. Cho cá thể được mang kiểu hình trội về 1 trong 3 tính trạng lai với cá thể cái mang kiểu hình trội về 1 trong 3 tính trạng, có thể thu được đời con có kiểu hình phân li theo tỉ lệ 2 : 2 : 1 : 1. ', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `test_date` datetime NOT NULL,
  `point` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0=pending,1=ok',
  `access_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`, `access_code`, `level`) VALUES
(1, 'admin', '$2y$10$U9m14U.WzheuSLkD28VUtuniVvurpG9cZTeEs3IOHRs9.FgMxXNWK', 1, '0cc175b9c0f1b6a831c399e269772661', 'Admin'),
(2, 'test1@gmail.com', '$2y$10$nwpmyKNrmNB42uEDmLHs..Oia/W4m5s/R8Qbzm4iYFOm7UDcr7upi', 1, '0cc175b9c0f1b6a831c399e269772661', 'Customer'),
(3, 'gicungduoc2809@gmail.com', '$2y$12$619626d8a317ff9f4b304uvkd/TiMCXw60dya.ykc.yNxh4bfO2v2', 1, '619626d8a317ff9f4b3043d14cfac436', 'Customer'),
(5, 'tungpt62@gmail.com', '$2y$12$AiyEFQHu4V/587bK.CLMk.JFEtVUpVf9JN.JGzbbqgETHF2mK5stS', 0, '9fe34ad961ee93820145b63c2afc4a71', 'Customer'),
(6, 'a@aaaa.com', '$2y$10$CaUctECxTYZ19cDcG9SgUeJmwGiFc5AZ/bI2G.6zG92H2uNuq9kv.', 0, '0cc175b9c0f1b6a831c399e269772661', 'Customer'),
(7, 's@aaa', '$2y$10$/TSe6/oEv7vceCJ.zvbCdeu5h0SOamvvwnbLGFUfnjElDxBsHL4fO', 0, '03c7c0ace395d80182db07ae2c30f034', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `correct_answer`
--
ALTER TABLE `correct_answer`
  ADD PRIMARY KEY (`question_id`,`correct`);

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
  ADD PRIMARY KEY (`user_id`,`exam_id`,`test_date`),
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
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `correct_answer`
--
ALTER TABLE `correct_answer`
  ADD CONSTRAINT `correct_answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

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
