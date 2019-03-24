-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 04:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_doancoso`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aloalo123`
--

CREATE TABLE IF NOT EXISTS `tb_aloalo123` (
  `Ma_aloalo123` int(11) NOT NULL DEFAULT '0',
  `Logo` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh_nen` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Lien_he` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aloalo123`
--

INSERT INTO `tb_aloalo123` (`Ma_aloalo123`, `Logo`, `Hinh_nen`, `Lien_he`) VALUES
(123, '../User/images/Logo/Logo5.png', '../User/images/home/bien2.jpg', '<p>AloAlo 123</p>\r\n\r\n<p>675/7A, Điện Bi&ecirc;n Phủ, Phường 25</p>\r\n\r\n<p>Quận B&igrave;nh Thạnh, TP.Hồ Ch&iacute; Minh</p>\r\n\r\n<p>Điện thoại: 0972 342 976</p>\r\n\r\n<p>Email: nguyencattien.qb@gmail.com</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chucnang`
--

CREATE TABLE IF NOT EXISTS `tb_chucnang` (
`Ma_chuc_nang` int(11) NOT NULL,
  `Ten_chuc_nang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_chucnang`
--

INSERT INTO `tb_chucnang` (`Ma_chuc_nang`, `Ten_chuc_nang`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE IF NOT EXISTS `tb_danhmuc` (
`Ma_danh_muc` int(11) NOT NULL,
  `Ten_danh_muc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`Ma_danh_muc`, `Ten_danh_muc`) VALUES
(1, 'Việc làm - Tuyển sinh'),
(2, 'Bất động sản'),
(3, 'Phòng trọ'),
(4, 'Nhà cửa - Đất đai'),
(5, 'Ô tô - Xe máy'),
(6, 'Thời trang - Làm đẹp'),
(7, 'Máy tính - Điện thoại'),
(9, 'Key'),
(11, 'Túi xách');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinhthuc`
--

CREATE TABLE IF NOT EXISTS `tb_hinhthuc` (
`Ma_hinh_thuc` int(11) NOT NULL,
  `Ten_hinh_thuc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hinhthuc`
--

INSERT INTO `tb_hinhthuc` (`Ma_hinh_thuc`, `Ten_hinh_thuc`) VALUES
(1, 'Mua'),
(2, 'Bán');

-- --------------------------------------------------------

--
-- Table structure for table `tb_khuvuc`
--

CREATE TABLE IF NOT EXISTS `tb_khuvuc` (
`Ma_khu_vuc` int(11) NOT NULL,
  `Ten_khu_vuc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_khuvuc`
--

INSERT INTO `tb_khuvuc` (`Ma_khu_vuc`, `Ten_khu_vuc`) VALUES
(1, 'TP.Hồ Chí Minh'),
(2, 'Hà Nội'),
(3, 'Hải Phòng'),
(4, 'Quảng Bình'),
(5, 'Đà Nẵng'),
(6, 'Khách Hòa'),
(7, 'Cà Mau'),
(9, 'Đồng Nai'),
(10, 'Đồng Tháp'),
(11, 'Long An'),
(12, 'Quảng Ninh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_quangcao`
--

CREATE TABLE IF NOT EXISTS `tb_quangcao` (
  `Ma_quang_cao` int(11) NOT NULL,
  `Hinh_quang_cao` varchar(500) NOT NULL,
  `Link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_quangcao`
--

INSERT INTO `tb_quangcao` (`Ma_quang_cao`, `Hinh_quang_cao`, `Link`) VALUES
(1, '../User/images/quangcao/world-cup-2018-1527679121003455864155.jpg', 'http://vietnamnet.vn/vn/the-thao/world-cup/'),
(2, '../User/images/quangcao/quang-cao-facebook-ads(1).jpg', 'https://www.facebook.com/nguyencattien1997'),
(3, '../User/images/quangcao/Sau-Rieng-Key-Visual-FA-724x1024.jpg', 'https://vinamilk.com.vn/sua-chua-vinamilk/vi/bi-quyet-ngon-khoe-tu-thien-nhien/?gclid=Cj0KCQjwu_jYBRD8ARIsAC3EGCKDxZcLucdSlb8B9i_seh7wZVFi_i2rxiCuR7AnC59DyaSEGSynKUoaAiJmEALw_wcB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_taikhoan`
--

CREATE TABLE IF NOT EXISTS `tb_taikhoan` (
`Ma_tai_khoan` int(11) NOT NULL,
  `Ten_tai_khoan` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Mat_khau` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ho_ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `So_dien_thoai` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_chuc_nang` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`Ma_tai_khoan`, `Ten_tai_khoan`, `Mat_khau`, `Ho_ten`, `So_dien_thoai`, `Dia_chi`, `Ma_chuc_nang`) VALUES
(2, 'tien97', '1', 'Nguyễn Văn A', '01689466651', 'Thành phố Hồ chí Minh', 2),
(4, 'blue', '8284', 'Nguyễn Phạm Xuân Đài', '0972342976', 'Bình Định', 2),
(12, 'deepweb', '123', 'Nguyễn Cát Tiên', '0972342976', 'Quảng Bình', 2),
(13, 'abc321', 'abc321', 'abc321', '0122222222', 'dagjsjdhjshda', 2),
(14, 'admin', '2', 'Nguyễn Cát Tiên', '0972342976', 'Quảng Bình', 1),
(15, 'admin1', '1', 'Nguyễn Cát Tiên', '0972342976', 'Bình Định', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tintuc`
--

CREATE TABLE IF NOT EXISTS `tb_tintuc` (
`Ma_tin_tuc` int(11) NOT NULL,
  `Tieu_de` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_danh_muc` int(11) NOT NULL,
  `Ma_khu_vuc` int(11) NOT NULL,
  `Mo_ta` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Dia_chi` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phe_duyet` int(11) NOT NULL,
  `Gia_ca` float NOT NULL,
  `Ngay_dang` datetime NOT NULL,
  `Nguon` int(11) NOT NULL,
  `Ma_hinh_thuc` int(11) NOT NULL,
  `Luot_xem` int(11) NOT NULL,
  `Anh_dai_dien` varchar(500) NOT NULL,
  `Anh1` varchar(500) NOT NULL,
  `Anh2` varchar(500) NOT NULL,
  `Anh3` varchar(500) NOT NULL,
  `Anh4` varchar(500) NOT NULL,
  `Anh5` varchar(500) NOT NULL,
  `Anh6` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tintuc`
--

INSERT INTO `tb_tintuc` (`Ma_tin_tuc`, `Tieu_de`, `Ma_danh_muc`, `Ma_khu_vuc`, `Mo_ta`, `Dia_chi`, `Phe_duyet`, `Gia_ca`, `Ngay_dang`, `Nguon`, `Ma_hinh_thuc`, `Luot_xem`, `Anh_dai_dien`, `Anh1`, `Anh2`, `Anh3`, `Anh4`, `Anh5`, `Anh6`) VALUES
(21, 'Căn hộ cao cấp The Eastern', 4, 9, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Long thành', 1, 300000000, '2018-06-11 00:00:00', 2, 2, 2, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(23, 'Bunka House 791 - Ký túc xá gần Lotte Mart Quận 7', 3, 2, '- Phòng rộng 25-30m2, không gian sinh hoạt cực kỳ thoải mái.\r\n- Phòng được lót sàn gỗ cao cấp.\r\n- Mỗi phòng đều được trang bị máy lạnh inverter 1.5HP.\r\n- Giường kích thước 1m, các ký túc xá khác thường dùng giường 80cm.\r\n- Chăn drap gối nệm cao cấp.\r\n- Toilet riêng trong phòng.\r\n- Mỗi người được cung cấp một tủ quần áo lớn bằng gỗ.', 'Quận 9', 1, 22000000000, '2018-05-04 00:00:00', 2, 2, 1, 'images/home/nhatro.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg'),
(25, 'Bunka House 791 - Ký túc xá gần Lotte Mart Quận 7', 3, 7, '- Phòng rộng 25-30m2, không gian sinh hoạt cực kỳ thoải mái.\r\n- Phòng được lót sàn gỗ cao cấp.\r\n- Mỗi phòng đều được trang bị máy lạnh inverter 1.5HP.\r\n- Giường kích thước 1m, các ký túc xá khác thường dùng giường 80cm.\r\n- Chăn drap gối nệm cao cấp.\r\n- Toilet riêng trong phòng.\r\n- Mỗi người được cung cấp một tủ quần áo lớn bằng gỗ.', 'Bình thạnh', 1, 0, '2018-05-05 00:00:00', 2, 1, 2, 'images/home/nhatro.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg', 'images/home/nhatro1.jpg'),
(26, 'Căn hộ cao cấp The Eastern', 4, 10, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Quận 10', 1, 0, '2018-05-02 00:00:00', 2, 1, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(27, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Trảng bom', 1, 3000000, '2018-05-15 00:00:00', 2, 2, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(29, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Long khánh', 0, 3000000, '2018-05-15 00:00:00', 2, 2, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(30, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Tân mỹ', 1, 3000000, '2018-05-15 00:00:00', 2, 2, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(31, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Quận 7', 0, 3000000, '2018-05-15 00:00:00', 2, 2, 2, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(32, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Quận 1', 0, 3000000, '2018-05-15 00:00:00', 2, 2, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(33, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Long khánh, Đồng nai', 0, 3000000, '2018-05-15 00:00:00', 2, 2, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(35, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Bầu cát', 0, 3000000, '2018-05-15 00:00:00', 2, 2, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(37, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', '29, D2, Điện biên phủ, Bình Thạnh', 0, 3000000, '2018-05-15 00:00:00', 2, 2, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(39, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Suối tiên', 1, 3000000, '2018-05-15 00:00:00', 2, 2, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(41, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Hồ cốc', 1, 3000000, '2018-05-15 00:00:00', 2, 2, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(42, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Quận Bình Tân', 1, 3000000, '2018-05-15 00:00:00', 2, 2, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(45, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Quận 5', 1, 3000000, '2018-05-15 00:00:00', 2, 1, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(46, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Long Thành', 1, 3000000, '2018-05-15 00:00:00', 2, 1, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(47, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Quận 1', 1, 3000000, '2018-05-15 00:00:00', 2, 1, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(48, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Cầu ánh sao', 1, 3000000, '2018-05-14 00:00:00', 2, 1, 0, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(52, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', '', 1, 3000000, '2018-05-15 00:00:00', 2, 1, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(57, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', '', 1, 3000000, '2018-05-13 00:00:00', 2, 1, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(59, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', '', 1, 3000000, '2018-05-15 00:00:00', 2, 1, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(60, 'Căn hộ cao cấp The Eastern', 4, 4, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', '', 1, 3000000, '2018-05-15 00:00:00', 2, 1, 1, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(68, 'Honda Winner 150 màu đen nhám', 5, 4, 'Mẫu xe côn tay Honda RS150R 2019 vừa có thêm phiên bản màu mới tại Malaysia, có chút khác biệt về đèn xi-nhan so với các phiên bản sản xuất tại thị trường khác. Tại Indonesia, chiếc xe có tên là Supra GTR 150, giống hệt với Honda Winner 150 tại thị trường Việt Nam.', 'Tân Mỹ', 1, 1000000, '2018-05-28 00:00:00', 2, 2, 1, 'images/home/xemay.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png'),
(70, 'Honda Winner 150 màu đen nhám', 5, 1, 'Mẫu xe côn tay Honda RS150R 2019 vừa có thêm phiên bản màu mới tại Malaysia, có chút khác biệt về đèn xi-nhan so với các phiên bản sản xuất tại thị trường khác. Tại Indonesia, chiếc xe có tên là Supra GTR 150, giống hệt với Honda Winner 150 tại thị trường Việt Nam.', 'Bình Thạnh', 0, 20000000, '2018-05-30 00:00:00', 13, 2, 7, 'images/home/xemay.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png'),
(71, 'Honda Winner 150 màu đen nhám', 5, 9, 'Mẫu xe côn tay Honda RS150R 2019 vừa có thêm phiên bản màu mới tại Malaysia, có chút khác biệt về đèn xi-nhan so với các phiên bản sản xuất tại thị trường khác. Tại Indonesia, chiếc xe có tên là Supra GTR 150, giống hệt với Honda Winner 150 tại thị trường Việt Nam.', 'Trảng Bom', 0, 1000000000, '2018-05-30 00:00:00', 13, 2, 2, 'images/home/xemay.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png'),
(72, 'Tuyển nhân viên kinh doanh bất động sản', 1, 1, 'Mô tả công việc - Tư vấn giới thiệu sản phẩm cho khách hàng quan tâm dự án do công ty triển khai. - Tìm kiếm, khai thác và chăm sóc khách hàng tiềm năng. - Đàm phán, thương lượng và chốt hợp đồng với khách hàng. - Tư vấn khách hàng về các sản phẩm, dự án của công ty. - Hướng dẫn khách hàng tham quan các dự án.', 'Bình Thạnh', 1, 1000000, '2018-05-31 00:00:00', 13, 2, 10, 'images/home/vl.png', 'images/home/vl1.png', 'images/home/vl1.png', 'images/home/vl1.png', 'images/home/vl1.png', 'images/home/vl1.png', 'images/home/vl1.png'),
(73, 'Chanel Bleu De Chanel Eau De Parfum', 6, 1, 'Nhãn hiệu: Chanel ID: 3145891073706 Loại: Nước hoa nam Nồng độ: Eau de parfum Nhóm hương: Hương gỗ,Hương gỗ thơm, Xuất xứ: Pháp Độ lưu hương: 7 đến 10 giờ Phong cách: Nam tính, sang trọng, thành đạt', 'Bình thạnh', 1, 1000000, '2018-06-01 00:00:00', 2, 1, 12, 'images/home/nh.png', 'images/home/nh1.png', 'imimages/home/nh1.png', 'images/home/nh1.png', 'images/home/nh1.png', 'images/home/nh1.png', 'images/home/nh1.png'),
(74, 'Căn hộ cao cấp The Eastern', 4, 2, 'Tọa lạc tại mặt tiền đường Liên Phường, phường Phú Hữu, quận 9, Tp.HCM, nơi cơ sở hạ tầng giao thông vận tải, cơ sở hạ tầng xã hội và đô thị phát triển nhanh chóng. The Eastern nằm kế cận các khu biệt thự cao cấp đã được thực hiện như Riviera Cove, Garland, Eden Villas, Villa Park ...', 'Hà Nội, Hoàn Kiếm, Hà Nội, Việt Nam', 1, 1000000, '2018-06-10 08:24:41', 2, 1, 7, 'images/home/nhadat.jpg', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png', 'images/home/nhadat1.png'),
(75, 'Grand World – Tầm vóc của tổ hợp nghỉ dưỡng đẳng cấp thế giới', 2, 2, 'Nếu như các quần thể nghỉ dưỡng cao cấp như Venetian hay Bellagio nằm tại Macau, thành phố du lịch thu hút hơn 35 triệu lượt khách tham quan, mua sắm, và Las Vegas, địa điểm đón tiếp hơn 42 triệu du khách trong năm 2018 vừa qua, thì Tổ hợp Grand World cũng sở hữu vị trí đắc địa khi tọa lạc tại một trong những hòn đảo hấp dẫn nhất Đông Nam Á, đảo Phú Quốc.', 'Hà Nội, Hoàn Kiếm, Hà Nội, Việt Nam', 1, 20000000, '2018-06-10 10:34:08', 2, 1, 5, 'images/home/ds.png', 'images/home/ds1.png', 'images/home/ds1.png', 'images/home/ds1.png', 'images/home/ds1.png', 'images/home/ds1.png', 'images/home/ds1.png'),
(76, 'Honda Winner 150 màu đen nhám', 5, 7, 'Mẫu xe côn tay Honda RS150R 2019 vừa có thêm phiên bản màu mới tại Malaysia, có chút khác biệt về đèn xi-nhan so với các phiên bản sản xuất tại thị trường khác. Tại Indonesia, chiếc xe có tên là Supra GTR 150, giống hệt với Honda Winner 150 tại thị trường Việt Nam.', 'Cà Mau, Việt Nam', 1, 1000000, '2018-06-10 23:04:30', 2, 1, 6, 'images/home/xemay.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png', 'images/home/xemay1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aloalo123`
--
ALTER TABLE `tb_aloalo123`
 ADD PRIMARY KEY (`Ma_aloalo123`);

--
-- Indexes for table `tb_chucnang`
--
ALTER TABLE `tb_chucnang`
 ADD PRIMARY KEY (`Ma_chuc_nang`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
 ADD PRIMARY KEY (`Ma_danh_muc`);

--
-- Indexes for table `tb_hinhthuc`
--
ALTER TABLE `tb_hinhthuc`
 ADD PRIMARY KEY (`Ma_hinh_thuc`);

--
-- Indexes for table `tb_khuvuc`
--
ALTER TABLE `tb_khuvuc`
 ADD PRIMARY KEY (`Ma_khu_vuc`);

--
-- Indexes for table `tb_quangcao`
--
ALTER TABLE `tb_quangcao`
 ADD PRIMARY KEY (`Ma_quang_cao`);

--
-- Indexes for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
 ADD PRIMARY KEY (`Ma_tai_khoan`), ADD KEY `Ma_chuc_nang` (`Ma_chuc_nang`);

--
-- Indexes for table `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
 ADD PRIMARY KEY (`Ma_tin_tuc`), ADD KEY `Ma_danh_muc` (`Ma_danh_muc`), ADD KEY `Ma_khu_vuc` (`Ma_khu_vuc`), ADD KEY `Nguon` (`Nguon`), ADD KEY `Hinh_thuc` (`Ma_hinh_thuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chucnang`
--
ALTER TABLE `tb_chucnang`
MODIFY `Ma_chuc_nang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
MODIFY `Ma_danh_muc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_hinhthuc`
--
ALTER TABLE `tb_hinhthuc`
MODIFY `Ma_hinh_thuc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_khuvuc`
--
ALTER TABLE `tb_khuvuc`
MODIFY `Ma_khu_vuc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
MODIFY `Ma_tai_khoan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
MODIFY `Ma_tin_tuc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
ADD CONSTRAINT `tb_taikhoan_ibfk_1` FOREIGN KEY (`Ma_chuc_nang`) REFERENCES `tb_chucnang` (`Ma_chuc_nang`);

--
-- Constraints for table `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
ADD CONSTRAINT `tb_tintuc_ibfk_3` FOREIGN KEY (`Ma_khu_vuc`) REFERENCES `tb_khuvuc` (`Ma_khu_vuc`),
ADD CONSTRAINT `tb_tintuc_ibfk_4` FOREIGN KEY (`Ma_hinh_thuc`) REFERENCES `tb_hinhthuc` (`Ma_hinh_thuc`),
ADD CONSTRAINT `tb_tintuc_ibfk_5` FOREIGN KEY (`Nguon`) REFERENCES `tb_taikhoan` (`Ma_tai_khoan`),
ADD CONSTRAINT `tb_tintuc_ibfk_6` FOREIGN KEY (`Ma_danh_muc`) REFERENCES `tb_danhmuc` (`Ma_danh_muc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
