-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2022 lúc 05:41 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang_phongtro`
--

CREATE TABLE `baidang_phongtro` (
  `MaBaiDang` int(12) NOT NULL,
  `MaPhong` int(12) NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `GiaPhong` int(12) NOT NULL,
  `MoTa` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Anh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TieuDe` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `TrangThai` int(12) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baidang_phongtro`
--

INSERT INTO `baidang_phongtro` (`MaBaiDang`, `MaPhong`, `DiaChi`, `GiaPhong`, `MoTa`, `Anh`, `TieuDe`, `TrangThai`) VALUES
(1, 1, 'Hà Nội', 2010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro1_trangchu.jpg', 'Phòng trọ siêu xinh', 0),
(1, 2, 'Hà Nội', 2986000, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro9_trangchu.jpg', 'Khu trọ rộng rãi', 0),
(1, 3, 'Hà Nội', 2290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro10_trangchu.jpg', 'Khu trọ mới xây', 0),
(1, 4, 'Hà Nội', 9900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn mình', 'nhatro21_trangchu.jpg', 'Phòng trọ (35-40m2) rộng', 0),
(1, 5, 'Hà Nội', 1290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro25_trangchu.jpg', 'Vị trí thuận tiện đi lại', 0),
(1, 6, 'Hà Nội', 3220000, 'Nhà khung BT chắc chắn 4 tầng.\r\n', 'nhatro6_trangchu.jpg', 'Nhà khung BT chắc chắn', 0),
(1, 7, 'Hà Nội', 3190000, 'Nhà khung BT chắc chắn 4 tầng.\r\n, wifi tốc độ cao', 'nhatro17_trangchu.jpg', 'Nhà trọ mới xây', 0),
(1, 8, 'Hà Nội', 1099000, 'Cho thuê 1 phòng rộng (giường, bàn phấn đẹp, điều hoà, nóng lạnh)', 'nhatro22_trangchu.jpg', 'Nhà quay hướng đông nam', 0),
(1, 9, 'Hà Nội', 3100000, 'Cho thuê phòng trọ cao cấp quận bình thạnh Phòng mới xây sạch sẽ, thoáng mát.', 'nhatro20_trangchu.jpg', 'Phòng mới xây sạch sẽ', 0),
(1, 10, 'Hà Nội', 1490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro16_trangchu.jpg', 'Giờ giấc tự do', 0),
(2, 11, 'Hồ Chí Minh', 1780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ an ninh tốt', 0),
(2, 12, 'Hồ Chí Minh', 3200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Cho thuê 1 phòng rộng', 0),
(2, 13, 'Hồ Chí Minh', 1996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng', 0),
(2, 14, 'Hồ Chí Minh', 1490000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Nhà trọ mới xây', 0),
(2, 15, 'Hồ Chí Minh', 1490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do', 0),
(2, 16, 'Hồ Chí Minh', 2010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Phòng trọ siêu xinh', 0),
(2, 17, 'Hồ Chí Minh', 1098600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi', 0),
(2, 18, 'Hồ Chí Minh', 2290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây', 0),
(2, 19, 'Hồ Chí Minh', 9900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng', 0),
(2, 20, 'Hồ Chí Minh', 1290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại', 0),
(3, 21, '1- 3 triệu', 1780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ mới xây', 0),
(3, 22, '1- 3 triệu', 2200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Cho thuê 1 phòng rộng', 0),
(3, 23, '1- 3 triệu', 1996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng', 0),
(3, 24, '1- 3 triệu', 1490000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Khu trọ rộng rãi', 0),
(3, 25, '1- 3 triệu', 1490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do', 0),
(3, 26, '1- 3 triệu', 2010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Phòng trọ siêu xinh', 0),
(3, 27, '1- 3 triệu', 1098600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi', 0),
(3, 28, '1- 3 triệu', 2290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây', 0),
(3, 29, '1- 3 triệu', 2900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng', 0),
(3, 30, '1- 3 triệu', 1290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại', 0),
(4, 31, '3- 5 triệu', 3780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ an ninh tốt', 0),
(4, 32, '3- 5 triệu', 3200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Nhà trọ mới xây', 0),
(4, 33, '3- 5 triệu', 4996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng', 0),
(4, 34, '3- 5 triệu', 3149000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Phòng trọ (35-40m2) rộng', 0),
(4, 35, '3- 5 triệu', 4490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do', 0),
(4, 36, '3- 5 triệu', 3010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Phòng trọ siêu xinh', 0),
(4, 37, '3- 5 triệu', 4398600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi', 0),
(4, 38, '3- 5 triệu', 4290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây', 0),
(4, 39, '3- 5 triệu', 4900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng', 0),
(4, 40, '3- 5 triệu', 3290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại', 0),
(5, 41, '5- 10 triệu', 5780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ an ninh tốt', 0),
(5, 42, '5- 10 triệu', 7200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Cho thuê 1 phòng rộng', 0),
(5, 43, '5- 10 triệu', 7996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng', 0),
(5, 44, '5- 10 triệu', 8149000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Vị trí thuận tiện đi lại', 0),
(5, 45, '5- 10 triệu', 5490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do', 0),
(5, 46, '5- 10 triệu', 6010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Nhà trọ mới xây', 0),
(5, 47, '5- 10 triệu', 9998600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi', 0),
(5, 48, '5- 10 triệu', 6290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây', 0),
(5, 49, '5- 10 triệu', 9900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng', 0),
(5, 50, '5- 10 triệu', 5290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHopDong` int(12) NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MaPhong` int(12) NOT NULL,
  `Anh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TienCoc` int(12) NOT NULL,
  `SoDienThoai` int(12) NOT NULL,
  `CMT_CCCD` int(12) NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NoiDung` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `NgayDang` datetime DEFAULT NULL,
  `NgayCapNhat` datetime DEFAULT NULL,
  `TrangThai` int(2) DEFAULT 11
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MatKhau` int(12) NOT NULL,
  `VaiTro` int(12) DEFAULT 1,
  `TrangThai` int(12) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`Email`, `MatKhau`, `VaiTro`, `TrangThai`) VALUES
('admin@gmail.com', 123, 0, 0),
('chutro@gmail.com', 123, 2, 0),
('nhatro@gmail.com', 123, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_baidang`
--

CREATE TABLE `taikhoan_baidang` (
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MaBaiDang` int(12) NOT NULL,
  `MaPhong` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_phongtro`
--

CREATE TABLE `taikhoan_phongtro` (
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `MaBaiDang` int(12) NOT NULL,
  `MaPhong` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baidang_phongtro`
--
ALTER TABLE `baidang_phongtro`
  ADD PRIMARY KEY (`MaPhong`,`MaBaiDang`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHopDong`),
  ADD KEY `fk_HopDong_TaiKhoan` (`Email`),
  ADD KEY `fk_HopDong_PhongTro` (`MaPhong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Email`);

--
-- Chỉ mục cho bảng `taikhoan_baidang`
--
ALTER TABLE `taikhoan_baidang`
  ADD PRIMARY KEY (`Email`,`MaBaiDang`),
  ADD KEY `MaPhong` (`MaPhong`,`MaBaiDang`);

--
-- Chỉ mục cho bảng `taikhoan_phongtro`
--
ALTER TABLE `taikhoan_phongtro`
  ADD PRIMARY KEY (`Email`,`MaPhong`),
  ADD KEY `MaPhong` (`MaPhong`,`MaBaiDang`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `fk_HopDong_PhongTro` FOREIGN KEY (`MaPhong`) REFERENCES `baidang_phongtro` (`MaPhong`),
  ADD CONSTRAINT `fk_HopDong_TaiKhoan` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`);

--
-- Các ràng buộc cho bảng `taikhoan_baidang`
--
ALTER TABLE `taikhoan_baidang`
  ADD CONSTRAINT `taikhoan_baidang_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`),
  ADD CONSTRAINT `taikhoan_baidang_ibfk_2` FOREIGN KEY (`MaPhong`,`MaBaiDang`) REFERENCES `baidang_phongtro` (`MaPhong`, `MaBaiDang`);

--
-- Các ràng buộc cho bảng `taikhoan_phongtro`
--
ALTER TABLE `taikhoan_phongtro`
  ADD CONSTRAINT `taikhoan_phongtro_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`),
  ADD CONSTRAINT `taikhoan_phongtro_ibfk_2` FOREIGN KEY (`MaPhong`,`MaBaiDang`) REFERENCES `baidang_phongtro` (`MaPhong`, `MaBaiDang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
