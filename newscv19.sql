-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 01:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newscv19`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) NOT NULL,
  `passwd` varchar(60) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `passwd`, `full_name`, `phone`, `address`) VALUES
('Linh1234', '14e1b600b1fd579f47433b88e8d85291', 'Nguyễn Thị Hồng Linh', '0123456789', 'Lĩnh Nam'),
('nhan241112000', '14e1b600b1fd579f47433b88e8d85291', 'Nguyễn Đăng Nhân', '0378690535', 'ktx pháp vân tòa A5');

-- --------------------------------------------------------

--
-- Table structure for table `listnews`
--

CREATE TABLE `listnews` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` varchar(300) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listnews`
--

INSERT INTO `listnews` (`id`, `name`, `content`, `image`, `title`) VALUES
('1', 'cdcd', 'Theo Bộ trưởng Bộ Y tế Nguyễn Thanh Long: Cả lý trí và tình cảm của người thầy thuốc đều thôi....', './Views/img/cd1.png', 'Bộ trưởng Bộ Y tế: Lý trí và tình cảm thôi thúc các thầy thuốc có mặt tại các điểm nóng dịch bệnh COVID-19...'),
('10', 'vdr', '', './Views/img/video4.jpg', 'Từ điểm nóng COVID- 19 số 8: Khi cuộc chiến COVID-19 kết thúc'),
('11', 'hd', 'SKĐS - Bộ Y tế đã ban hành Hướng dẫn tạm thời về chuyên môn y tế thực hiện Nghị quyết số 128/NQ-CP ngày 11/10/2021 ...', './Views/img/a.png', '[Infographic] – Hướng dẫn của Bộ Y tế về xét nghiệm COVID-19 để \'thích ứng an toàn, linh hoạt\'...'),
('12', 'hd', 'SKĐS - Một số phụ nữ lo lắng sau khi tiêm mũi 1 mới phát hiện mang thai thì có nên tiếp tục tiêm mũi 2 vaccine COVID-19 hay không,...', './Views/img/c.png', 'Có nên tiêm mũi 2 vaccine COVID-19 nếu phát hiện có thai?...'),
('13', 'hd', 'SKĐS - Viêm cơ tim sau tiêm vaccine phòng COVID-19 có đáng lo? Những bệnh nhân tim mạch cần lưu ý gì về kế hoạch tiêm vaccine COVID-19 mũi 1 và mũi 2?..', './Views/img/e.png', 'Viêm cơ tim sau tiêm vaccine COVID-19 có đáng ngại?...'),
('14', 'hddp', 'Sáng 18/10, tại cuộc họp trực tuyến Ban Chỉ đạo phòng, chống dịch Covid-19 tỉnh Đồng Nai với các huyện, thành phố trong tỉnh, đồng chí Nguyễn Hồng Lĩnh,...', './Views/img/b.png', 'Đồng Nai bắt buộc các cơ quan, doanh nghiệp quét mã QR...'),
('15', 'hddp', 'Sáng 18/10, học sinh THCS, THPT, Trung tâm Giáo dục thường xuyên, TT Dạy nghề và các TT Tin học, ngoại ngữ một số địa phương của thành phố Cam Ranh,...', './Views/img/d.png', 'Khánh Hòa: Thực hiện nghiêm phòng, chống dịch khi học sinh trở lại trường...'),
('16', 'hddp', 'Bệnh nhân mắc Covid-19 tử vong đầu tiên tại Lâm Đồng được xác định có tuổi thật là 83 và tiền sử nhiều bệnh nền, như đái tháo đường II, tăng huyết áp, liệt tứ chi nhiều năm...', './Views/img/3.png', 'Lâm Đồng có ca bệnh Covid-19 đầu tiên tử vong...'),
('17', 'thtg', 'WHO: Số ca mắc COVID-19 tại châu Phi \"trên thực tế cao hơn nhiều\"', './Views/img/t1.png', ''),
('18', 'thtg', 'Thế giới ngăn chặn nguy cơ làn sóng Covid-19 cuối năm ', './Views/img/t2.jpg', ''),
('19', 'thtg', 'Tỷ lệ tiêm ngừa Covid-19 cao, nhiều nước dần trở lại trạng thái bình thường', './Views/img/t3.jpg', ''),
('2', 'cdcd', 'Thủ tướng Chính phủ nêu rõ: \"Những kết quả đạt được mới là bước đầu, chặng đường sắp tới còn rất gian nan, nhưng chúng ta có cơ...', './Views/img/cd3.png', 'Thủ tướng: \"Chúng ta tự tin thực hiện thích ứng an toàn, linh hoạt, kiểm soát có hiệu quả dịch bệnh\"...'),
('20', 'tt', 'Hà Nội thêm 42 ca COVID-19 mới, 2 ổ dịch \"nóng\" nhất Thủ đô tăng lên 126 ca', './Views/img/image1.png', ''),
('21', 'tt', 'Mở cửa du lịch quốc tế linh hoạt nhưng phải an toàn', './Views/img/image3.png', ''),
('22', 'tt', 'Ngày 29/10, Hà Nội ghi nhận 47 ca Covid-19, trong đó 6 ca cộng đồng', './Views/img/image4.jpeg', ''),
('23', 'tt', 'Bộ Y tế tập huấn tiêm vaccine phòng COVID-19 cho đối tượng 12- 17 tuổi', './Views/img/image5.jpeg', ''),
('24', 'tt', 'Đầu tháng 11 sẽ thống nhất PC-Covid là ứng dụng quét mã QR duy nhất', './Views/img/image6.jpg', ''),
('25', 'tt', 'Hành khách đi máy bay chỉ cần khai báo y tế điện tử', './Views/img/image7.jpeg', ''),
('26', 'tt', 'Hơn 813 nghìn người mắc Covid-19 được công bố khỏi bệnh', './Views/img/image8', ''),
('3', 'cdcd', 'Bộ trưởng Bộ Y tế Nguyễn Thanh Long cho biết trong đợt dịch COVID-19 thứ 4, nhiều biện pháp ...', './Views/img/cd2.png', 'Bộ trưởng Bộ Y tế: Nhiều biện pháp chuyên môn chưa có tiền lệ được áp dụng trong cuộc chiến chống COVID-19 thứ 4...'),
('30', 'tt', '2 ổ dịch phức tạp nhất Hà Nội đã có hơn 110 ca dương tính', './Views/img/image2', ''),
('4', 'btcv', 'SKĐS - Đến nay Việt Nam có 867.221 ca mắc COVID-19, trong đó 792.980 người đã...', './Views/img/bt1.png', 'Sáng 19/10: Gần 793.000 bệnh nhân COVID-19 đã khỏi; khám chữa bệnh BHYT \'thích ứng an toàn, linh hoạt\' thế nào?...'),
('5', 'btcv', 'SKĐS - Bản tin dịch COVID-19 ngày 18/10 của Bộ Y tế cho biết có 3.168 ca mắc COVID-19 tại 45 tỉnh, thành phố, trong đó TP HCM....', './Views/img/bt2.png', 'Ngày 18/10: Có 3.168 ca mắc COVID-19 tại TP HCM, Sóc Trăng và 43 tỉnh, thành khác...'),
('6', 'btcv', 'Chiều 18/10: Đã tiêm trên 64,1 triệu liều vaccine phòng COVID-19; nhiều tỉnh thêm các F0 trở về từ vùng dịch...', './Views/img/bt3.png', 'SKĐS - Theo thông tin trên Cổng tiêm chủng quốc gia đến 12h ngày 18/10, cả nước đã  ...'),
('7', 'vdr', '', './Views/img/video1.jpeg ', 'Những điểm mới hướng dẫn về thực hiện xét nghiệm để thích ứng an toàn, linh hoạt, kiểm soát hiệu quả dịch COVID-19'),
('8', 'vdr', '', './Views/img/video2.jpg', 'Bộ Y tế hướng dẫn phân loại và phạm vi đánh giá cấp độ dịch'),
('9', 'vdr', '', './Views/img/video3.jpg ', 'Từ điểm nóng COVID-19 số 9: Vượt gian khó níu giữ sự sống cho bệnh nhân');

-- --------------------------------------------------------

--
-- Table structure for table `solieu`
--

CREATE TABLE `solieu` (
  `socanhiem` varchar(20) NOT NULL,
  `khoi` varchar(20) NOT NULL,
  `tuvong` varchar(20) NOT NULL,
  `socatang` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solieu`
--

INSERT INTO `solieu` (`socanhiem`, `khoi`, `tuvong`, `socatang`, `id`) VALUES
('1.143.967', '911.310', '24.118', '39.123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `listnews`
--
ALTER TABLE `listnews`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
