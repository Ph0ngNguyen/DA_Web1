-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 07:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaCTDH` int(11) NOT NULL,
  `MaDH` int(11) NOT NULL,
  `MaHang` int(11) NOT NULL,
  `SoLuong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaCTDH`, `MaDH`, `MaHang`, `SoLuong`) VALUES
(1, 1, 1, '1'),
(2, 1, 10, '1'),
(3, 2, 13, '1'),
(4, 2, 42, '1'),
(5, 3, 37, '2'),
(6, 3, 12, '1'),
(7, 4, 48, '1'),
(8, 4, 32, '1'),
(9, 5, 4, '2'),
(10, 5, 39, '2'),
(11, 6, 5, '1'),
(12, 6, 40, '2'),
(13, 7, 41, '2'),
(14, 8, 35, '1'),
(15, 8, 48, '1'),
(16, 8, 40, '2'),
(17, 9, 20, '2'),
(18, 9, 41, '3'),
(19, 9, 46, '1'),
(20, 10, 15, '5');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaTT` int(11) NOT NULL,
  `NgayDat` date NOT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaKH`, `MaTT`, `NgayDat`, `MaNV`) VALUES
(1, 9, 1, '2021-11-01', 2),
(2, 4, 1, '2021-11-02', 2),
(3, 5, 1, '2021-11-03', 2),
(4, 7, 1, '2021-11-04', 2),
(5, 6, 1, '2021-11-01', 2),
(6, 8, 1, '2021-11-01', 3),
(7, 10, 1, '2021-11-02', 3),
(8, 7, 1, '2021-11-01', 3),
(9, 8, 1, '2021-11-02', 3),
(10, 9, 1, '2021-11-03', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `MaHang` int(11) NOT NULL,
  `TenHang` varchar(100) NOT NULL,
  `GiaBan` varchar(50) NOT NULL,
  `SoLuong` varchar(50) NOT NULL,
  `Anh` varchar(50) NOT NULL,
  `MaSize` int(11) NOT NULL,
  `MaMau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`MaHang`, `TenHang`, `GiaBan`, `SoLuong`, `Anh`, `MaSize`, `MaMau`) VALUES
(1, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 2, 1),
(3, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 2, 2),
(4, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 2, 3),
(5, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 2, 4),
(6, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 3, 1),
(7, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 3, 2),
(8, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 3, 3),
(9, 'Esprit Ruffle Shirt', '16', '50', 'product-01.jpg', 3, 4),
(10, 'Herschel supply', '16', '50', 'product-02.jpg', 3, 1),
(11, 'Herschel supply', '16', '50', 'product-02.jpg', 3, 2),
(12, 'Herschel supply', '16', '50', 'product-02.jpg', 3, 3),
(13, 'Herschel supply', '16', '50', 'product-02.jpg', 3, 4),
(14, 'Herschel supply', '16', '50', 'product-02.jpg', 4, 1),
(15, 'Herschel supply', '16', '50', 'product-02.jpg', 4, 2),
(16, 'Herschel supply', '16', '50', 'product-02.jpg', 4, 3),
(17, 'Herschel supply', '16', '50', 'product-02.jpg', 4, 4),
(18, 'Herschel supply', '16', '50', 'product-02.jpg', 1, 1),
(19, 'Herschel supply', '16', '50', 'product-02.jpg', 1, 3),
(20, 'Herschel supply', '16', '50', 'product-02.jpg', 1, 2),
(21, 'Herschel supply', '16', '50', 'product-02.jpg', 2, 1),
(22, 'Herschel supply', '16', '50', 'product-02.jpg', 2, 3),
(23, 'Only Check Trouser', '25', '50', 'product-03.jpg', 2, 1),
(24, 'Only Check Trouser', '25', '50', 'product-03.jpg', 2, 2),
(25, 'Only Check Trouser', '25', '50', 'product-03.jpg', 2, 3),
(26, 'Only Check Trouser', '25', '50', 'product-03.jpg', 2, 4),
(27, 'Only Check Trouser', '25', '60', 'product-03.jpg', 3, 1),
(28, 'Only Check Trouser', '25', '50', 'product-03.jpg', 3, 3),
(29, 'Only Check Trouser', '25', '50', 'product-03.jpg', 3, 1),
(30, 'Classic Trench Coat', '25', '100', 'product-04.jpg', 2, 1),
(31, 'Classic Trench Coat', '25', '100', 'product-04.jpg', 2, 2),
(32, 'Classic Trench Coat', '25', '100', 'product-04.jpg', 3, 1),
(33, 'Classic Trench Coat', '25', '100', 'product-04.jpg', 3, 3),
(34, 'Classic Trench Coat', '25', '100', 'product-04.jpg', 4, 1),
(35, 'Front Pocket Jumper', '34', '100', 'product-04.jpg', 2, 1),
(36, 'Vintage Inspired Classic ', '34', '100', 'product-05.jpg', 2, 1),
(37, 'Vintage Inspired Classic ', '34', '100', 'product-05.jpg', 3, 1),
(38, 'Pieces Metallic Printed', '19', '100', 'product-06.jpg', 3, 1),
(39, 'Pieces Metallic Printed', '19', '100', 'product-06.jpg', 2, 1),
(40, 'Femme T-Shirt In Stripe', '27', '100', 'product-10.jpg', 2, 1),
(41, 'Femme T-Shirt In Stripe', '27', '100', 'product-10.jpg', 3, 1),
(42, 'Herschel supply ', '65', '100', 'product-11.jpg', 3, 2),
(43, 'Herschel supply ', '65', '100', 'product-11.jpg', 2, 2),
(44, 'T-Shirt with Sleeve', '20', '100', 'product-13.jpg', 2, 3),
(45, 'T-Shirt with Sleeve', '20', '100', 'product-13.jpg', 2, 2),
(46, 'Square Neck Back', '30', '150', 'product-16.jpg', 2, 1),
(47, 'Square Neck Back', '30', '150', 'product-16.jpg', 2, 3),
(48, 'Square Neck Back', '30', '150', 'product-16.jpg', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `MaLND` int(11) NOT NULL,
  `TenLND` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loainguoidung`
--

INSERT INTO `loainguoidung` (`MaLND`, `TenLND`) VALUES
(1, 'Khách hàng'),
(2, 'Nhân viên'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `MaMau` int(11) NOT NULL,
  `TenMau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`MaMau`, `TenMau`) VALUES
(1, 'Red'),
(2, 'Blue'),
(3, 'White'),
(4, 'Grey');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `MaLND` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `HoTen`, `GioiTinh`, `DiaChi`, `Email`, `MatKhau`, `MaLND`) VALUES
(1, 'Nguyễn Thanh Phong', 1, 'Khánh Hòa', 'ntphong@gmail.com', '123456', 3),
(2, 'Nguyễn Lê Ngọc Như', 0, 'Khánh Hòa', 'nlnnhu@gmail.com', '123456', 2),
(3, 'Trần Thị Ngọc Bích', 0, 'Khánh Hòa', 'ttnbich@gmail.com', '123456', 2),
(4, 'Nguyễn Thanh Phượng', 0, 'Khánh Hòa', 'ntphượnng@gmail.com', '123456', 1),
(5, 'Nguyễn Lê Ngọc Lê', 0, 'Khánh Hòa', 'nlnle@gmail.com', '123456', 1),
(6, 'Trần Thị Ngọc Thảo', 0, 'Khánh Hòa', 'ttnthao@gmail.com', '123456', 1),
(7, 'Trần Huy Phú', 1, 'Ninh Hòa', 'thphu@gmail.com', '123456', 1),
(8, 'Nguyễn Tường Nghiêm', 1, 'Phú Yên', 'ntnghiem@gmail.com', '123456', 1),
(9, 'Nguyễn Trường Long', 1, 'Ninh Hòa', 'ntlong@gmail.com', '123456', 1),
(10, 'Trương Thị Thùy Trang', 0, 'Bình Định', 'ttttrang@gmail.com', '123456', 1),
(12, 'Phú 2', 1, 'NH', 'phu2@gmail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `MaSize` int(11) NOT NULL,
  `TenSize` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`MaSize`, `TenSize`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangdh`
--

CREATE TABLE `tinhtrangdh` (
  `MaTT` int(11) NOT NULL,
  `TenTT` varchar(50) NOT NULL,
  `MoTa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tinhtrangdh`
--

INSERT INTO `tinhtrangdh` (`MaTT`, `TenTT`, `MoTa`) VALUES
(1, 'Đang chờ', ''),
(2, 'Đang giao', ''),
(3, 'Chưa giao', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaCTDH`),
  ADD KEY `MaHang` (`MaHang`),
  ADD KEY `MaDH` (`MaDH`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaTT` (`MaTT`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaMau` (`MaMau`),
  ADD KEY `MaSize` (`MaSize`);

--
-- Indexes for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`MaLND`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`MaMau`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD KEY `MaLND` (`MaLND`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`MaSize`);

--
-- Indexes for table `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  ADD PRIMARY KEY (`MaTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `MaCTDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `MaHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `MaLND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mau`
--
ALTER TABLE `mau`
  MODIFY `MaMau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `MaSize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaHang`) REFERENCES `hang` (`MaHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaTT`) REFERENCES `tinhtrangdh` (`MaTT`),
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`MaKH`) REFERENCES `nguoidung` (`MaND`),
  ADD CONSTRAINT `donhang_ibfk_4` FOREIGN KEY (`MaNV`) REFERENCES `nguoidung` (`MaND`);

--
-- Constraints for table `hang`
--
ALTER TABLE `hang`
  ADD CONSTRAINT `hang_ibfk_1` FOREIGN KEY (`MaMau`) REFERENCES `mau` (`MaMau`),
  ADD CONSTRAINT `hang_ibfk_2` FOREIGN KEY (`MaSize`) REFERENCES `size` (`MaSize`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaLND`) REFERENCES `loainguoidung` (`MaLND`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
