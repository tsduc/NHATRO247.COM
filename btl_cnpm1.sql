create database btl;
use btl;
drop database btl;

CREATE TABLE TaiKhoan(
	Email nvarchar(50) not null primary key,
	MatKhau int(12) not null, 
	VaiTro int(12) DEFAULT '1', 
	TrangThai int(12) DEFAULT '0'
);
INSERT INTO TaiKhoan (Email, MatKhau, VaiTro, TrangThai) VALUES 
('admin@gmail.com', '123', 0 , 0),
('nhatro@gmail.com', '123', 1 , 0),
('chutro@gmail.com', '123', 2 , 0);
drop table TaiKhoan;
truncate table TaiKhoan;
delete from TaiKhoan where Email = 'tsduc0996@gmail.com';
select * from TaiKhoan;
SELECT * FROM TaiKhoan WHERE Email like 'nhatro@gmail.com'  AND MatKhau = 123;

select distinct MaBaiDang, DiaChi  from BaiDang_PhongTro;
CREATE TABLE BaiDang_PhongTro(
	MaBaiDang int(12) not null,
	MaPhong int(12) not null,
    primary key(MaPhong, MaBaiDang),
	DiaChi nvarchar(50) not null,
	GiaPhong int(12) not null, 
	MoTa nvarchar(1000) not null, 
	Anh nvarchar(50) not null, 
	TieuDe nvarchar(1000) not null,
	TrangThai int(12) DEFAULT '0'
);
INSERT INTO BaiDang_PhongTro (MaBaiDang, MaPhong, DiaChi, GiaPhong, MoTa, Anh, TieuDe) VALUES
(1, 1, 'Hà Nội', 2010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro1_trangchu.jpg', 'Phòng trọ siêu xinh'),
(1, 2, 'Hà Nội', 2986000, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro9_trangchu.jpg', 'Khu trọ rộng rãi'),
(1, 3, 'Hà Nội', 2290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro10_trangchu.jpg', 'Khu trọ mới xây'),
(1, 4, 'Hà Nội', 9900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn mình', 'nhatro21_trangchu.jpg', 'Phòng trọ (35-40m2) rộng'),
(1, 5, 'Hà Nội', 1290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro25_trangchu.jpg', 'Vị trí thuận tiện đi lại'),
(1, 6, 'Hà Nội', 3220000, 'Nhà khung BT chắc chắn 4 tầng.\r\n', 'nhatro6_trangchu.jpg', 'Nhà khung BT chắc chắn'),
(1, 7, 'Hà Nội', 3190000, 'Nhà khung BT chắc chắn 4 tầng.\r\n, wifi tốc độ cao', 'nhatro17_trangchu.jpg', 'Nhà trọ mới xây'),
(1, 8, 'Hà Nội', 1099000, 'Cho thuê 1 phòng rộng (giường, bàn phấn đẹp, điều hoà, nóng lạnh)', 'nhatro22_trangchu.jpg', 'Nhà quay hướng đông nam'),
(1, 9, 'Hà Nội', 3100000, 'Cho thuê phòng trọ cao cấp quận bình thạnh Phòng mới xây sạch sẽ, thoáng mát.', 'nhatro20_trangchu.jpg', 'Phòng mới xây sạch sẽ'),
(1, 10, 'Hà Nội', 1490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro16_trangchu.jpg', 'Giờ giấc tự do'),

(2, 11, 'Hồ Chí Minh', 1780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ an ninh tốt'),
(2, 12, 'Hồ Chí Minh', 3200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Cho thuê 1 phòng rộng'),
(2, 13, 'Hồ Chí Minh', 1996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng'),
(2, 14, 'Hồ Chí Minh', 1490000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Nhà trọ mới xây'),
(2, 15, 'Hồ Chí Minh', 1490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do'),
(2, 16, 'Hồ Chí Minh', 2010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Phòng trọ siêu xinh'),
(2, 17, 'Hồ Chí Minh', 1098600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi'),
(2, 18, 'Hồ Chí Minh', 2290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây'),
(2, 19, 'Hồ Chí Minh', 9900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng'),
(2, 20, 'Hồ Chí Minh', 1290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại'),

(3, 21, '1- 3 triệu', 1780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ mới xây'),
(3, 22, '1- 3 triệu', 2200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Cho thuê 1 phòng rộng'),
(3, 23, '1- 3 triệu', 1996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng'),
(3, 24, '1- 3 triệu', 1490000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Khu trọ rộng rãi'),
(3, 25, '1- 3 triệu', 1490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do'),
(3, 26, '1- 3 triệu', 2010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Phòng trọ siêu xinh'),
(3, 27, '1- 3 triệu', 1098600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi'),
(3, 28, '1- 3 triệu', 2290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây'),
(3, 29, '1- 3 triệu', 2900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng'),
(3, 30, '1- 3 triệu', 1290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại'),

(4, 31, '3- 5 triệu', 3780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ an ninh tốt'),
(4, 32, '3- 5 triệu', 3200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Nhà trọ mới xây'),
(4, 33, '3- 5 triệu', 4996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng'),
(4, 34, '3- 5 triệu', 3149000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Phòng trọ (35-40m2) rộng'),
(4, 35, '3- 5 triệu', 4490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do'),
(4, 36, '3- 5 triệu', 3010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Phòng trọ siêu xinh'),
(4, 37, '3- 5 triệu', 4398600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi'),
(4, 38, '3- 5 triệu', 4290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây'),
(4, 39, '3- 5 triệu', 4900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng'),
(4, 40, '3- 5 triệu', 3290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại'),

(5, 41, '5- 10 triệu', 5780000, 'hòng mới xây,rộng rãi,thoáng mát. Phòng có 2 cửa sổ lấy gió đường luồng thoáng mát', 'nhatro1_trangchu.jpg', 'Nhà trọ an ninh tốt'),
(5, 42, '5- 10 triệu', 7200000, 'Cho thuê 1 phòng rộng ', 'nhatro9_trangchu.jpg', 'Cho thuê 1 phòng rộng'),
(5, 43, '5- 10 triệu', 7996000, 'Có gác đúc kiên cố – trần cao 4m , bên hông nhà trọ có thiết kế lối đi riêng và có khu vực để xe máy riêng', 'nhatro10_trangchu.jpg', 'Có khu vực để xe máy riêng'),
(5, 44, '5- 10 triệu', 8149000, 'Về An Ninh : do nằm gần UBND nên an ninh rất tốt , có bảo vệ dân phố trực thường xuyên', 'nhatro21_trangchu.jpg', 'Vị trí thuận tiện đi lại'),
(5, 45, '5- 10 triệu', 5490000, 'giường, nệm, bàn ghế làm việc, bếp,máy lạnh, tủ lạnh…\r\n– Giờ giấc tự do, không chung chủ', 'nhatro25_trangchu.jpg', 'Giờ giấc tự do'),
(5, 46, '5- 10 triệu', 6010900, 'Nhà trọ vừa xây năm 2017 . Diện tích ngang 10m dài 20m , dãy trọ có 1 tầng', 'nhatro6_trangchu.jpg', 'Nhà trọ mới xây'),
(5, 47, '5- 10 triệu', 9998600, 'Ngoài ra Khu trọ nằm lọt thỏm trên tuyến đường chính giữa các Khu công nghiệp nên dân cư vô cùng đông đúc', 'nhatro17_trangchu.jpg', 'Khu trọ rộng rãi'),
(5, 48, '5- 10 triệu', 6290000, 'Bên cạnh đó dãy trọ còn được trang bị hệ thống camera giám sát 24/24 và hệ thống theo dõi', 'nhatro22_trangchu.jpg', 'Khu trọ mới xây'),
(5, 49, '5- 10 triệu', 9900000, 'Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự, văn minh', 'nhatro20_trangchu.jpg', 'Phòng trọ (35-40m2) rộng'),
(5, 50, '5- 10 triệu', 5290000, 'Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao, hệ thống cửa vân tay riêng biệt', 'nhatro16_trangchu.jpg', 'Vị trí thuận tiện đi lại')
select * from BaiDang_PhongTro where TieuDe like '2290000' or GiaPhong like '2290000';
select * from BaiDang_PhongTro;
SELECT * FROM BaiDang_PhongTro LIMIT 1 OFFSET 5;
delete from BaiDang_PhongTro WHERE MaPhong = 9;


CREATE TABLE HopDong(
	MaHopDong int(12) not null primary key, 
    Email nvarchar(50) not null,
    constraint fk_HopDong_TaiKhoan foreign key (Email) references TaiKhoan(Email),
    MaPhong int(12) not null,
    constraint fk_HopDong_PhongTro foreign key (MaPhong) references BaiDang_PhongTro(MaPhong),
	Anh nvarchar(50) not null, 
	TienCoc int(12) not null, 
	SoDienThoai int(12) not null, 
	CMT_CCCD int(12) not null, 
	HoTen nvarchar(50) not null, 
	NoiDung nvarchar(1000) not null,
	NgayDang datetime , 
	NgayCapNhat datetime,
    TrangThai int(2) DEFAULT 11
);
drop table HopDong;
truncate table HopDong;
update HopDong set TrangThai = 1 where MaHopDong = 1;
select * from HopDong;
select * from HopDong left join BaiDang_PhongTro on HopDong.MaPhong = BaiDang_PhongTro.MaPhong where Email like 'nhatro@gmail.com';
select * from HopDong where MaHopDong = (select max(MaHopDong) from HopDong);
select count(MaHopDong) from HopDong;
insert into HopDong (MaHopDong,Email, MaPhong, Anh, TienCoc, SoDienThoai, CMT_CCCD, HoTen, NoiDung, NgayDang, NgayCapNhat) values(4,'nhatro@gmail.com', '1','1', '1', '1', '1', '1','1',sysdate() , sysdate() );


CREATE TABLE TaiKhoan_BaiDang(
	Email nvarchar(50) not null, 
    foreign key (Email) references TaiKhoan(Email),
	MaBaiDang int(12) not null,
    MaPhong int(12) not null,
    foreign key (MaPhong, MaBaiDang) references BaiDang_PhongTro(MaPhong, MaBaiDang),
    primary key(Email, MaBaiDang)
);

CREATE TABLE TaiKhoan_PhongTro(
	Email nvarchar(50) not null, 
    foreign key (Email) references TaiKhoan(Email),
    MaBaiDang int(12) not null,
	MaPhong int(12) not null,
    foreign key (MaPhong, MaBaiDang) references BaiDang_PhongTro(MaPhong, MaBaiDang),
    primary key(Email, MaPhong)
);
