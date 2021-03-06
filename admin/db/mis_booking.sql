-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `ho_va_ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `so_can_cuoc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `loai_hinh_DL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_thuc_thanh_toan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `id_tour`, `ho_va_ten`, `dia_chi`, `so_dien_thoai`, `so_can_cuoc`, `loai_hinh_DL`, `hinh_thuc_thanh_toan`, `gia`) VALUES
(1, 2, 'Trần Việt Hải', 'Kiến An, Hải Phòng', '585085965', '31201216', 'Du lịch sang trọng', '', 0),
(2, 3, 'Trần Thành Công', 'Xuân Trường, Nam Định', '123456789', '31002258', 'Du lịch nước ngoài', '', 0),
(3, 1, 'Lê Thị Hồng', 'Kim Bảng, Hà Nam', '961056152', '33082552', 'Du lịch tham quan', '', 0),
(4, 6, 'Trần Văn Long', 'Hương Canh, Vĩnh Phúc', '902024866', '31502868', 'Du lịch sang trọng', '', 0),
(5, 4, 'Nguyễn Hoàng Anh', 'Gia Viễn, Ninh Bình', '984648868', '35507919', 'Du lịch tham quan', '', 0),
(6, 5, 'Nguyễn Thanh Tùng', 'Trần Hưng Đạo, Thái Bình', '868797939', '18102333', 'Du lịch nước ngoài', '', 0),
(7, 4, 'Lê Thị Hồng', 'Hà Nam', '0918190064', '12312312312', 'Du lịch tham quan', 'Chuyển khoản', 0),
(8, 2, 'Lê Hồng', 'Nình Bình', '1231231', '1231231', 'Du lịch sang trọng', 'PayPal', 499),
(9, 5, 'Công trần', 'Nam Định', '0350331', '5684568', 'Du lịch nước ngoài', 'Chuyển khoản ngân hàng', 399),
(12, 5, 'Hải Mèo', 'Hải Phòng', '53434', 'cvxx234233', 'Du lịch nước ngoài', 'Chuyển khoản ngân hàng', 399),
(13, 5, 'Hải Mèo', 'Hải Phòng', '53434', 'cvxx234233', 'Du lịch nước ngoài', 'Chuyển khoản ngân hàng', 399);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phan_hoi`
--

CREATE TABLE `tbl_phan_hoi` (
  `id_phan_hoi` int(11) NOT NULL,
  `ho_va_ten` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_phan_hoi`
--

INSERT INTO `tbl_phan_hoi` (`id_phan_hoi`, `ho_va_ten`, `email`, `noi_dung`) VALUES
(1, 'Trần Thành', '0', 'Tuy chưa được hài lòng , nhưng ok'),
(2, 'Lê Hồng', 'hongne@gmail.com', 'Hay quá');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour`
--

CREATE TABLE `tbl_tour` (
  `id_tour` int(11) NOT NULL,
  `loai_hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diem_den` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `khoang_thoi_gian` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `anh_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_thieu_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu_1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu_2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu_3` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu_4` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu_5` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tour`
--

INSERT INTO `tbl_tour` (`id_tour`, `loai_hinh`, `diem_den`, `khoang_thoi_gian`, `anh_1`, `anh_2`, `gioi_thieu_tour`, `dich_vu_1`, `dich_vu_2`, `dich_vu_3`, `dich_vu_4`, `dich_vu_5`, `gia`, `link`) VALUES
(1, 'Du lịch tham quan', 'Rừng quốc gia Ba Vì', '1 ngày', '	\r\nbv1.jpg', '	\r\nbv2.jpg', 'Vườn quốc gia Ba Vì là một trong những khu rừng nguyên sinh có cảnh quan đẹp nằm ở núi Tản Viên, thuộc địa phận huyện Ba Vì, Hà Tây (nay là Hà Nội). Với bầu không khí trong lành của tự nhiên cùng hệ động, thực vật phong phú, với con dốc phẳng lì có nhiều cua tay áo nằm trong không gian yên ắng của núi rừng, vườn quốc gia Ba Vì là địa điểm dừng chân lý tưởng của du khách mỗi dịp cuối tuần. Đối với các bạn trẻ đam mê đi phượt mà muốn tự mình đi thì có thể tham khảo bài viết kinh nghiệm đi du lịch Vườn Quốc gia Ba Vì bằng xe máy của Khát Vọng Việt.\r\nNếu du khách đến với rừng quốc gia ba vì vào khoảng thời gian cuối tháng 10, đầu tháng 11 lúc mà miền Bắc bắt đầu bước vào những ngày đầu đông thì du khách còn được chiêm ngưỡng cảnh đẹp với sắc hoa vàng rực rỡ của loại hoa Dã Quỳ.\r\nNgoài được hòa mình vào thiên nhiên thì Rừng quốc gia Ba Vì cũng là chốn linh thiêng. Bởi theo tương truyền thì Núi Ba Vì là nơi hóa thân của Đức Thánh Tản Viên ( Sơn Tinh) vị thánh đương đầu tứ bất tử trong tâm thức của Việt Nam. Để tưởng nhớ công ơn của đức thánh Tản Viên. Thì nhân dân đã lập đền thờ ngài trên đỉnh núi Tản viên. Được nhận dân gọi là Đề Thượng.\r\nNgoài ra trên đỉnh ngọn núi Vua. Du khách còn đến với Đền thờ Bác Hồ. Nơi thờ cúng để tưởng nhớ người con ưu tú của dân tộc Việt Nam. Ngôi đền nằm giữa một không gian huyền ảo, lẫn trong mây trăng bồng bềnh và tiếng chim rừng lảnh lót hòa mình vào với thiên nhiên núi rừng hùng vĩ. MIS Booking giới thiệu đến bạn lịch trình tour đi Ba Vì 1 ngày.', 'Giường đôi', 'Free WIFI', 'Hỗ trợ đưa đón', 'Bữa ăn tại khách sạn', 'Khứ hồi', 239, 'https://www.youtube.com/watch?v=b5apHzIybjE'),
(2, 'Du lịch sang trọng', 'Fusion Resort Phu Quoc', '4 ngày 3 đêm', '	\r\npq1.jpg', 'pq2.jpg', 'Fusion Resort Phu Quoc là khu nghỉ dưỡng 5 sao, nằm trên hòn đảo hoang sơ với màu nước xanh trong vắt như pha lê và trải dài trên bãi biển cát trắng mịn màng. Từ đây, Quý khách sẽ chỉ mất một khoảng cách ngắn đến Vườn quốc gia Phú Quốc, nơi Quý khách có thể khám phá rừng ngập mặn, thác nước, các khu vực có rừng và núi đá.\r\nFusion Resort Phu Quoc cũng cung cấp các tiện ích cao cấp như dịch vụ massage, xông hơi, lớp học yoga, phòng tập gym, nhà hàng phục vụ các món ăn đặc trưng của địa phương và quốc tế, khu vui chơi dành cho trẻ em,… Cùng với đội ngũ nhân viên được đào tạo chuyên nghiệp, Fusion Resort Phu Quoc sẽ mang đến cho Quý khách một kỳ nghỉ trọn vẹn nhất.\r\n', 'Giường đôi', 'Free WIFI', 'Hỗ trợ đưa đón', 'Bữa ăn tại khách sạn', 'Khứ hồi', 499, 'https://www.youtube.com/watch?v=__5mr_Xtb30'),
(3, 'Du lịch nước ngoài', 'Bangkok', '5 ngày 4 đêm', '	\r\ntl1.jpg', '	\r\ntl2.jpg', 'Thủ đô Bangkok là thành phố lớn và đông dân nhất tại đất nước Thái Lan, nơi đây cũng là trung tâm của các hoạt động chính trị, thương mại, công nghiệp và văn hóa trong các thành phố châu Á.\r\nBangkok là một trong những thành phố đem lại nhiều ngạc nhiên nhất thế giới. Tại đây có sự kết hợp hài hòa khéo léo và thú vị giữa truyền thống và hiện đại. Ngoài ra, thủ đô Bangkok còn cực kì nổi tiếng bởi những khu vui chơi, các thiên đường mua sắm giá rẻ, cũng như sự đang dạng, phong phú của nền ẩm thực độc đáo,...\r\nCác điểm thu hút du khách nơi đây bao gồm những ngôi chùa Phật giáo, cung điện hoàng gia nguy nga, tráng lệ cùng với sông nước \"Venice của phương Đông\" hữu tình, vô tận.', 'Giường đôi', 'Free WIFI', 'Hỗ trợ đưa đón', 'Bữa ăn tại khách sạn', 'Khứ hồi', 372, 'https://www.youtube.com/watch?v=F6O4SgE-dRA'),
(4, 'Du lịch tham quan', 'Hội An', '4 ngày 3 đêm', '	\r\nha1.jpg', 'ha2.jpg', 'Hội An là một thành phố thuộc tỉnh Quảng Nam có nhiều khu phố cổ được xây từ thế kỷ 16 và vẫn còn tồn tại gần như nguyên vẹn đến nay. Trong các tài liệu cổ của phương Tây, Hội An được gọi Faifo. Phố cổ Hội An được công nhận là một di sản thế giới UNESCO từ năm 1999. Đây là địa điểm thu hút được rất nhiều khách Du Lịch Đà Nẵng – Hội An.\r\nLà một kiểu cảng thị truyền thống Đông Nam Á duy nhất ở Việt Nam, hiếm có trên thế giới, Hội An giữ được gần như nguyên vẹn hơn một nghìn di tích kiến trúc như phố xá, nhà cửa, hội quán, đình, chùa, miếu, nhà thờ tộc, giếng cổ, mộ cổ… Đến đây du khách du lịch Hà Nội Đà Nẵng sẽ có dịp chiêm ngưỡng các kiến trúc vừa có sắc thái nghệ thuật truyền thống của Việt Nam, vừa thể hiện sự giao lưu hội nhập văn hoá với các nước phương Đông và phương Tây.\r\nNgoài những giá trị văn hóa qua kiến trúc đa dạng, Hội An còn lưu giữ được nhiều hoạt động văn hóa phi vật thể với các lễ hội văn hóa đang được bảo tồn và phát huy cùng các làng nghề thủ công truyền thống, các món ẩm thực… làm cho Hội An ngày càng trở thành điểm đến hấp dẫn của du khách thập phương', 'Giường đôi', 'Free WIFI', 'Hỗ trợ đưa đón', 'Bữa ăn tại khách sạn', 'Khứ hồi', 220, 'https://www.youtube.com/watch?v=fNOfkNc9AJE'),
(5, 'Du lịch nước ngoài', 'Singapore', '4 ngày 3 đêm', '	\r\nsg1.jpg', 'sg2.jpg', 'Khi nhắc đến Singapore, người ta liên tưởng ngay đến hình ảnh một đất nước xinh đẹp, với bầu không khí trong lành, gắn liền với cái tên “Đảo Quốc Sư Tử” và là “Thành Phố xanh sạch nhất hành tinh”.\r\nDu lịch Singapore là điểm đến hàng đầu của Châu Á thu hút rất đông du khách đến để tham quan, trải nghiệm.\r\nSingapore sở hữu nền văn hóa đa sắc tộc, biết dung hòa và phát triển những nét văn hóa đặc trưng của nhiều dân tộc lại với nhau. Nên nơi đây có các lễ hội và tết truyền thống của nhiều quốc gia như Mã Lai, Ấn Độ, Trung Quốc và các nước phương Tây...Singapore nổi tiếng là “thiên đường mua sắm”và “con Rồng của Châu Á”, tại đây có hệ thống đường bộ chất lượng bậc nhất thế giới, hệ thống đường thủy tấp nập và hàng không ngày càng mở rộng với quy mô lớn.\r\nẨm thực của Singapore vô cùng phong phú và đa dạng, với nhiều bản sắc văn hóa khác nhau. Nó có sự giao thoa tinh túy giữa ẩm thực phương Đông và phương Tây.\r\nDu khách đến du lịch Singapore, không chỉ được vui chơi ăn uống mà còn được thỏa sức mua sắm với tất cả các mặt hàng chất lượng, được bày bán tại các trung tâm lớn, những khu chợ mang nét văn hóa đặc trưng của người dân nơi đây như trung tâm Vivo City, Khu Bugis, Khu Isetan,...', 'Giường đôi', 'Free WIFI', 'Hỗ trợ đưa đón', 'Bữa ăn tại khách sạn', 'Khứ hồi', 399, 'https://www.youtube.com/watch?v=Psr4HZmWHnQ'),
(6, 'Du lịch sang trọng', 'Hạ Long', '3 ngày 2 đêm', '	\r\nhl1.jpg', 'hl2.jpg', 'Du thuyền L’Azalée Cruise cung cấp trải nghiệm một đêm thoải mái trên vịnh. Tàu sẽ đi qua những dãy núi đá vôi và hang động. Điểm nổi bật của hành trình là Làng Ngọc Trai. Đây là nơi bạn sẽ được tìm hiểu về cách người dân cấy và khai thác ngọc trai.\r\nDu khách cũng sẽ có cơ hội khám phá hang Sửng Sốt trong vòng một giờ đồng hồ. Ngoài ra du khách có thể chèo thuyền kayak qua khu vực đảo Đầu Trâu.\r\nHàng không Hải Âu cung cấp một gói tour kết hợp giữa chuyến bay một chiều Hà Nội – Hạ Long cùng thủy phi cơ hiện đại với một hành trình 2 ngày 1 đêm trên du thuyền L’Azalée. Hầu hết các tour du lịch đều bao gồm phương tiện di chuyển Hà Nội – Hạ Long.\r\nTour sẽ cung cấp xe hơi hoặc xe buýt cao cấp. Nhờ vậy du khách có thể tìm hiểu thêm về cuộc sống thường ngày của miền quê Việt Nam.\r\nBằng cách lựa chọn một chuyến bay cùng thủy phi cơ cũng cho phép bạn ngắm nhìn vẻ đẹp Đông Nam Á cũng như vịnh Hạ Long từ trên cao. Đây là một lựa chọn nhanh chóng, hấp dẫn để đến vịnh cũng như quay trở lại Hà Nội.\r\nCho dù bạn bắt đầu hay kết thúc kỳ nghỉ của mình bằng máy bay, đây chắc chắn là một trải nghiệm sang trọng và đẳng cấp.', 'Giường đôi', 'Free WIFI', 'Hỗ trợ đưa đón', 'Bữa ăn tại khách sạn', 'Khứ hồi', 439, 'https://www.youtube.com/watch?v=RF_vArzyHHQ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `fk_tour` (`id_tour`);

--
-- Indexes for table `tbl_phan_hoi`
--
ALTER TABLE `tbl_phan_hoi`
  ADD PRIMARY KEY (`id_phan_hoi`);

--
-- Indexes for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_phan_hoi`
--
ALTER TABLE `tbl_phan_hoi`
  MODIFY `id_phan_hoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tour`
--
ALTER TABLE `tbl_tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `fk_tour` FOREIGN KEY (`id_tour`) REFERENCES `tbl_tour` (`id_tour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
