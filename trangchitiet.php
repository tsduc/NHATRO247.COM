<?php
include("lib_db.php");
include("connect.php");
$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
$sql = "SELECT * FROM BaiDang_PhongTro WHERE MaPhong=" . $id;
$result = select_one($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chi tiết</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="CSS/base.css">
    <link rel="stylesheet" href="CSS/trangchitiet.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="header">
            <nav class="header__nav gird">
                <div class="header__nav__list-left">
                    <ul class="header__nav__list__list">
                        <li class="header__nav__list__items"><a class="header__nav__list-link" href="">Người cho
                                thuê</a></li>
                        <li class="header__nav__list__items">
                            <a class="header__nav__list-link" href="">Kết nối</a>
                            <a class="header__nav__list-link" href=""><i class="fa-brands fa-facebook"></i></a>
                            <a class="header__nav__list-link" href=""><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="header__nav__list-right">
                    <ul class="header__nav__list__list">
                        <li class="header__nav__list__items">
                            <a class="header__nav__list-link" href="">
                                <i class="fa-solid fa-bell"></i>
                            </a>
                            <a class="header__nav__list-link" href="">Thông báo</a>
                        </li>
                        <li class="header__nav__list__items">
                            <a class="header__nav__list-link" href="./trangchu.php">
                                <i class="fa-solid fa-circle-question"></i>
                            </a>
                            <a class="header__nav__list-link" href="">Hỗ trợ</a>
                        </li>
                        <?php if (empty($data['email'])) { ?>

                            <li class="header__nav__list__items">
                                <a class="header__nav__list-link" href="./dangky.php">Đăng ký</a>
                            </li>
                            <li class="header__nav__list__items">
                                <a class="header__nav__list-link" href="./dangnhap.php">Đăng nhập</a>
                            </li>

                        <?php } else { ?>
                            <li class="header__nav__list__items">
                                <a class="header__nav__list-link" href="./dangxuat.php">Đăng xuất</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <!-- end nav -->
            <div class="header__logo-search gird">
                <div class="header__logo-search__logo">
                    <a href="./trangchu.php" class="header__logo-search__link">
                        <img src="./images/nt_logo2.png" alt="" class="header__logo-search__imglogo">
                    </a>
                </div>
                <div class="header__logo-search__search">
                    <form action="" class="header__logo-search__form">
                        <input type="text" class="header__logo-search__input" placeholder="Tìm kiến nhanh hơn">
                        <button class="header__logo-search__button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- end search -->
            <div class="header__adress__money gird_money_adress">
                <ul class="header__adress__money__list">
                    <?php for ($sl = 0; $sl <= 4; $sl++) { ?>
                        <?php $sql = "SELECT distinct MaBaiDang, DiaChi FROM BaiDang_PhongTro LIMIT 1 OFFSET  $sl"; ?>
                        <?php $datas = select_list($sql); ?>
                        <li class="header__adress__money__items">
                            <?php foreach ($datas as $data) { ?>
                                <a href="trangloc.php?id=<?php echo $data["MaBaiDang"]; ?>" class="header__adress__money__link"><?php echo $data["DiaChi"]; ?></a>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- end adress money -->
        </header>
        <!-- content -->
        <div class="content gird">
            <div class="content__sequence">
                <a href="" class="content__sequence__link">
                    Nhà trọ
                </a>
                <span class="content__sequence__span">
                    > Giá rẻ
                </span>
                <span class="content__sequence__span">
                    > Chất lượng cao
                </span>
                <span class="content__sequence__span">
                    > <?php echo $result["TieuDe"] ?>
                </span>
            </div>
            <?php $sql = "SELECT * FROM TaiKhoan where TrangThai=1";
            $query = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($query); ?>
            <?php if (!empty($data['Email'])) { ?>
                <form action="hopdong.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $result["MaPhong"] ?>" />
                    <div class="content__while">
                        <div class="content__while__left">
                            <a href="" class="content__while__link">
                                <img src="./images/<?php echo $result["Anh"] ?>" alt="" class="content__while__img">
                            </a>
                        </div>
                        <div class="content__while__right">
                            <span class="content__while__span">
                                <?php echo $result["MoTa"] ?>
                            </span>
                            <div class="content__while__money">
                                <span class="content__while__money__span">
                                    <?php echo $result["GiaPhong"] ?>đ
                                </span>
                                <span class="content__while__money__span content__while__money__span__button">
                                    10% GIẢM
                                </span>
                            </div>
                            <div class="content__while__endow">
                                <span class="content__while__endow__span">
                                    Ưu điểm:
                                </span>
                                <span class="content__while__endow__span">
                                    Miễn phí điện nước 15 ngày. Giảm 10% tháng đầu
                                </span>
                            </div>
                            <div class="content__while__rented">
                                <button type="submit" class="content__while__rented__text">THUÊ TRỌ</button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php } else { ?>
                <form action="dangnhap.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $result["MaPhong"] ?>" />
                    <div class="content__while">
                        <div class="content__while__left">
                            <a href="" class="content__while__link">
                                <img src="./images/<?php echo $result["Anh"] ?>" alt="" class="content__while__img">
                            </a>
                        </div>
                        <div class="content__while__right">
                            <span class="content__while__span">
                                <?php echo $result["MoTa"] ?>
                            </span>
                            <div class="content__while__money">
                                <span class="content__while__money__span">
                                    <?php echo $result["GiaPhong"] ?>đ
                                </span>
                                <span class="content__while__money__span content__while__money__span__button">
                                    10% GIẢM
                                </span>
                            </div>
                            <div class="content__while__endow">
                                <span class="content__while__endow__span">
                                    Ưu điểm:
                                </span>
                                <span class="content__while__endow__span">
                                    Miễn phí điện nước 15 ngày. Giảm 10% tháng đầu
                                </span>
                            </div>
                            <div class="content__while__rented">
                                <button type="submit" class="content__while__rented__text">THUÊ TRỌ</button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>

            <div class="content__while__column">
                <div class="content__while__column__title">
                    MÔ TẢ PHÒNG TRỌ
                </div>
                <span class="content__while__column__span">
                    Hiện tại bên mình cho thuê phòng trọ mới xây ngay – Phòng trọ (35-40m2) rộng rai.
                    Thoát mát ở được 4,5 người – Ban công, chỗ phơi đồ riêng biệt, wifi tốc độ cao,
                    hệ thống cửa vân tay riêng biệt – Vị trí thuận tiện đi lị các quận trung tâm.
                    Nguyễn Văn Quá, Cầu tham lương Trường Chinh , Quang Trung Gò Vấp , Chợ Hạnh Thông Tây,
                    Công Viên Phần mềm, ngay chợ Cầu. Gần các trường đại học Hoa Sen,FPT..
                    (PHÙ HỢP CHO CÁC ANH CHỊ LÀM VĂN PHÒNG, SIHN VIÊN VÀ HỘ GIA ĐÌNH) –
                    Phòng mới đẹp có nội thất – Có giường và gác cao -Không giới hạn người ở –
                    Hầm xe rộng thoải mái – Khu vực an ninh, trật tự, bảo vệ 24/7 yên tỉnh ,
                    không chung chủ , giờ giấc tự do ĐẶC BIỆT: giảm giá phí dịch vụ cho hợp đồng 12 tháng –
                    Cam kết không tăng giá lại trong suốt thời gian gia hợp đồng , ưu tiên khách hàng lịch sự,
                    văn mình , hợp đồng lâu dài
                </span>
            </div>
            <div class="content__also">
                <div class="content__also__title">
                    PHÒNG TRỌ TƯƠNG TỰ
                </div>
                <div class="content__also__ul-li">
                    <ul class="content__also__list">
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Phòng trọ siêu xinh</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Khu trọ rộng rãi</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Khu trọ mới xây</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Phòng trọ (35-40m2) rộng</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Vị trí thuận tiện đi lại</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Nhà khung BT chắc chắn</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Nhà quay hướng đông nam</a>
                        </li>
                        <li class="content__also__items">
                            <a href="" class="content__also__link">Phòng mới xây sạch sẽ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <div class="footer__top gird">
                <ul class="footer__list">
                    <li class="footer__items">
                        <a href="" class="footer__link">CHÍNH SÁCH BẢO MẬT</a>
                    </li>
                    <li class="footer__items">
                        <a href="" class="footer__link">QUY CHẾ HOẠT DỘNG</a>
                    </li>
                    <li class="footer__items">
                        <a href="" class="footer__link">CHÍNH SÁCH ƯU ĐÃI</a>
                    </li>
                    <li class="footer__items">
                        <a href="" class="footer__link">CHÍNH SÁCH HỖ TRỢ VÀ HOÀN TIỀN</a>
                    </li>
                </ul>
            </div>
            <div class="footer__center">
                <a href="" class="footer__link">NHÓM 1 CÔNG NGHỆ PHẦM MỀM</a>
            </div>
            <div class="footer__bottom">
                <span class="footer__bottom__span">
                    Địa chỉ: Tầng 4-5-6, Tòa nhà 175 Tây Sơn, số 29 Đống Đa, Quận Đống Đa, Quận Ba Đình, Thành phố Hà
                    Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.vn</br>
                    Chịu Trách Nhiệm Quản Lý Nội Dung: Công nghệ Phần mềm - Điện thoại liên hệ: 0123 081221 (ext 4678)
                </span>
            </div>
        </footer>
    </div>
    </div>
</body>

</html>