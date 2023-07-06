-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 02:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan1`
--

INSERT INTO `binhluan1` (`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES
(1, 3, 7, '2020-08-14', '  gghnn'),
(2, 4, 7, '2020-08-14', '  nhẹ và đẹp'),
(3, 3, 5, '2020-08-14', 'lịch sự, nhã nhặn'),
(4, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(5, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(6, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(7, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(8, 3, 5, '2020-08-14', '  dfgdfsg'),
(9, 3, 5, '2020-08-14', '  dfgdfsg'),
(10, 3, 5, '2020-08-14', '  dfgdfsg'),
(11, 3, 5, '2020-08-14', '  dfgdfsg'),
(12, 3, 5, '2020-08-14', '  dfgdfsg'),
(13, 3, 5, '2020-08-14', '  hello'),
(14, 3, 5, '2020-08-14', '  hello'),
(15, 3, 5, '2020-08-14', '  hello');

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon1`
--

CREATE TABLE `cthoadon1` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cthoadon1`
--

INSERT INTO `cthoadon1` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(7, 3, 2, 'Màu Hồng', 35, 1090000, 0),
(9, 3, 2, ' Màu Hồng', 35, 1090000, 0),
(9, 12, 2, 'Màu Be ', 0, 1150000, 0),
(10, 9, 2, 'Màu Kem ', 38, 1490000, 0),
(10, 15, 1, 'Màu Xám Nhạt ', 37, 545000, 0),
(11, 9, 2, 'Màu Kem ', 38, 1490000, 0),
(11, 15, 1, 'Màu Xám Nhạt ', 37, 545000, 0),
(12, 9, 2, 'Màu Kem ', 38, 1490000, 0),
(12, 15, 1, 'Màu Xám Nhạt ', 37, 545000, 0),
(13, 2, 1, 'Màu Trắng', 0, 545000, 0),
(13, 24, 3, 'Màu Đen ', 38, 1800000, 0),
(14, 2, 1, 'Màu Trắng', 0, 545000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `Nhom` int(4) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`, `size`) VALUES
(1, 'Mô hình Naruto - Naruto trang phục Hokage', 250000, 0, 'Naruto_01.png', 0, 1, b'1', 1000, '2020-08-08', 'Uzumaki Naruto', 50, '', '15 cm'),
(2, 'Mô hình Naruto - Naruto biến dạng Cửu Vĩ hình', 459000, 0, 'naruto_cuuvi.jpg', 0, 1, b'1', 587, '2020-08-08', 'Uzumaki Naruto', 50, ' Màu Đỏ', '15 cm'),
(3, 'Mô hình Naruto - Uchiha Madara', 445000, 0, 'madara.jpg', 0, 1, b'0', 349, '2020-08-08', 'Uchiha Madara', 50, 'Màu Trắng', '15 cm'),
(4, 'Mô hình Naruto - Hokage đệ nhất Hashirama Senju ', 500000, 0, 'hashirama.jpg', 1, 1, b'0', 999, '2020-08-08', 'Hashirama Senju', 50, ' Màu Tím Purple', '20 cm'),
(5, 'Mô hình Naruto - Hyuga Hinata', 300000, 0, 'hinata.jpg', 1, 1, b'1', 483, '2020-08-08', 'Hyuga Hinata', 346, 'Màu Đen nhám', '15 cm'),
(6, 'Mô hình Naruto - Uchiha Itachi Akatsuki', 499000, 0, 'itachi.jpg', 1, 1, b'0', 890, '2020-08-08', 'Uchiha Itachi', 76, 'Màu Xanh Ngọc', '36 cm'),
(9, 'Mô hình Naruto - Uchiha Itachi Anbu siêu ngầu', 645000, 0, 'itachi_anbu.jpg', 2, 1, b'1', 57, '2020-08-08', 'Uchiha Itachi', 400, 'Màu Đen', '30 cm'),
(10, 'Mô hình Naruto - Uchiha Itachi Susano', 750000, 0, 'itachi_susano.jpg', 2, 1, b'1', 200, '2020-08-08', 'Uchiha Itachi', 300, 'Màu đen', '25 cm'),
(11, 'Mô hình Naruto - Uchiha Itachi tổ quạ ', 297500, 0, 'itachi_tq.jpg', 3, 1, b'0', 300, '2020-08-08', 'Uchiha Itachi', 300, 'Màu Đen', '15 cm'),
(12, 'Mô hình Naruto - Hatake Kakashi', 295000, 0, 'kakashi.jpg', 3, 1, b'0', 300, '2020-08-08', 'Hatake Kakashi', 300, 'Màu Xanh Ngọc', '15 cm'),
(15, 'Mô hình Naruto - Kakashi Anbu ( Ám bộ )', 454500, 0, 'kakashi_anbu.jpg', 4, 1, b'0', 200, '2020-08-08', 'Kakashi Anbu', 300, 'Màu đen', '27 cm'),
(16, 'Mô hình Naruto - Kakashi Chidori ', 554500, 150000, 'kakashi_chidori.jpg', 4, 1, b'0', 300, '2020-08-08', 'Kakashi chidori', 300, 'Màu Đen', '25 cm'),
(17, 'Mô hình Naruto - Uchiha Madara lục đạo', 690000, 0, 'madara_ld.jpg', 4, 1, b'1', 200, '2020-08-08', 'Madara lục đạo', 300, 'Màu Trắng', '30 cm'),
(18, 'Mô hình Naruto - Uchiha Madara Susano', 350000, 0, 'madara_su.jpg', 5, 1, b'0', 200, '2020-08-08', 'Madara susano', 300, 'Xanh Nâu', '28 cm'),
(19, 'Mô hình Naruto - Namikaze Minato ', 350000, 0, 'minato.jpg', 5, 1, b'1', 200, '2020-08-08', 'Namikaze minato', 300, 'Màu trắng vàng', '30 cm'),
(20, 'Mô hình Naruto - Minato chiến đấu', 280000, 0, 'minato_02.jpg', 5, 1, b'0', 200, '2020-08-08', 'Minato', 0, 'Màu Nâu Tím', '7'),
(21, 'Mô hình One Peace - Sanji Hắc Cước Diable Jambe Cực COOL !!!', 250000, 0, 'sanji.jpg', 4, 3, b'0', 300, '2020-08-15', 'Sanji Hắc Cước Diable Jambe Cực COOL !!!!', 300, 'Màu đen', '29 cm'),
(22, 'Mô hình One Peace - Mô Hình Roronoa Zoro Ngậm Kiếm Phiên Bản', 500000, 50000, 'zoro.jpg', 1, 3, b'0', 200, '2020-08-04', 'Mô Hình Roronoa Zoro Ngậm Kiếm Phiên Bản Cao Cấp', 300, 'Màu đen xanh', '27 cm'),
(24, 'Mô hình One Peace - Luffy cực dễ thương', 140000, 0, 'luffy_chibi.jpg', 3, 3, b'1', 200, '2020-07-04', 'Luffy chibi', 300, 'Đỏ đen', '15 cm'),
(25, 'Mô hình One Peace - Mô hình Luffy bị đánh sưng mặc', 509000, 0, 'luffy_2.jpg', 1, 3, b'0', 200, '2022-12-12', 'Luffy', 300, 'Đen đỏ', '25 cm'),
(26, 'Mô hình One Peace - Monkey D Luffy Gear 2 Fire Boxing', 820000, 0, 'luffygear.jpg', 1, 3, b'0', 200, '2022-12-12', 'Monkey D Luffy Gear 2 Fire Boxing', 300, 'Màu Đen', '25 cm'),
(27, 'Mô hình One Peace - Monkey D Luffy Sauron Snake', 250000, 20000, 'luffy.jpg', 1, 3, b'0', 200, '2022-12-12', 'Monkey D Luffy Sauron Snake', 300, 'Màu Đen Mờ', '25 cm'),
(29, 'Mô hình One Peace - Mô Hình Hỏa Quyền Ace Tung Skill Lửa Cực', 710000, 100000, 'ace.jpg', 1, 3, b'0', 200, '2022-12-12', 'Mô Hình Hỏa Quyền Ace ', 300, 'Màu Vàng Cam', '25 cm'),
(30, 'Mô hình One Peace - Mô Hình Portgas D Ace Fire', 459000, 100000, 'ace2.jpg', 1, 3, b'0', 200, '2022-12-12', 'Mô Hình Portgas D Ace Fire', 300, 'Màu đỏ đen', '25 cm'),
(31, 'Mô hình Naruto - Mô Hình Deidara Thuộc Tổ Chức Akatsuki Cao ', 650000, 0, 'deiara.jpg', 1, 1, b'0', 200, '2022-12-12', 'Deidara Akatsuki', 300, 'Màu đen', '24 cm');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon1`
--

CREATE TABLE `hoadon1` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon1`
--

INSERT INTO `hoadon1` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 7, '2020-08-13', 2240000),
(2, 7, '2020-08-13', 2240000),
(3, 7, '2020-08-13', 2240000),
(4, 7, '2020-08-13', 2240000),
(5, 7, '2020-08-13', 2240000),
(6, 7, '2020-08-13', 2240000),
(7, 7, '2020-08-13', 2240000),
(8, 7, '2020-08-13', 2240000),
(9, 7, '2020-08-13', 2240000),
(10, 7, '2020-08-13', 2035000),
(11, 7, '2020-08-13', 2035000),
(12, 7, '2020-08-13', 2035000),
(13, 5, '2020-09-02', 545000),
(14, 7, '2020-09-09', 545000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang1`
--

CREATE TABLE `khachhang1` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang1`
--

INSERT INTO `khachhang1` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(3, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(4, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(5, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(6, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(7, 'Nguyên', 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen@gmail.com', '', '', 0),
(8, 'Minh Nhàn', 'AnhBa', '827ccb0eea8a706c4c34a16891f84e7b', 'levius@gmail.com', 'Hồ Chí Minh', '0123456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Mô hình naruto', 3),
(3, 'Mô hinh One Peace', 3),
(4, 'Mô hình Dragon Ball', 3),
(5, '', 3),
(6, 'Vivo', 3),
(7, 'Realme', 3),
(8, 'Nokia', 3),
(10, 'Asus', 3),
(13, 'Mobel', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang Chủ', 'index.php'),
(3, 'Mô hình', ''),
(4, 'Tablet', 'View/sanphamtui.php'),
(5, 'Liên Hệ', 'View/lienhe.php'),
(6, 'Tài Khoản', 'View/gioithieu.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `fk_bl_mahh` (`mahh`),
  ADD KEY `fk_bl_kh` (`makh`);

--
-- Indexes for table `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD PRIMARY KEY (`masohd`,`mahh`),
  ADD KEY `fk_cthd_mahh` (`mahh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_hanghoa_maloai` (`maloai`);

--
-- Indexes for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `fk_hoadon_kh` (`makh`);

--
-- Indexes for table `khachhang1`
--
ALTER TABLE `khachhang1`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `hoadon1`
--
ALTER TABLE `hoadon1`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `khachhang1`
--
ALTER TABLE `khachhang1`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang1` (`makh`),
  ADD CONSTRAINT `fk_bl_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`masohd`) REFERENCES `hoadon1` (`masohd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_maloai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD CONSTRAINT `fk_hoadon_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang1` (`makh`);

--
-- Constraints for table `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `FK_loai_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
