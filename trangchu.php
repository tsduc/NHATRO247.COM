<?php
include("lib_db.php");
include("connect.php");
$sql = "SELECT * FROM TaiKhoan where TrangThai=1";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
$q = isset($_REQUEST["q"]) ? $_REQUEST["q"] : '';
$qsessionname = "___Q___";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà trọ 247</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js">

    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="CSS/base.css">
    <link rel="stylesheet" href="CSS/trangchu.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="header">
            <nav class="header__nav gird">
                <div class="header__nav__list-left">
                    <ul class="header__nav__list__list">
                        <li class="header__nav__list__items"><a class="header__nav__list-link" href="">Người cho thuê</a></li>
                        <li class="header__nav__list__items">
                            <a class="header__nav__list-link" href="">Kết nối</a>
                            <a class="header__nav__list-link header__nav__list-link--white header__nav__list-link--left" href=""><i class="fa-brands fa-facebook"></i></a>
                            <a class="header__nav__list-link header__nav__list-link--white header__nav__list-link--left" href=""><i class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="header__nav__list-right">
                    <ul class="header__nav__list__list">
                        <li class="header__nav__list__items">
                            <a class="header__nav__list-link header__nav__list-link--white header__nav__list-link--right" href="">
                                <i class="fa-solid fa-bell"></i>
                            </a>
                            <a class="header__nav__list-link" href="">Thông báo</a>
                        </li>
                        <li class="header__nav__list__items">
                            <a class="header__nav__list-link header__nav__list-link--white header__nav__list-link--right" href="">
                                <i class="fa-solid fa-circle-question"></i>
                            </a>
                            <a class="header__nav__list-link" href="">Hỗ trợ</a>
                        </li>

                        <?php if (empty($data['Email'])) { ?>

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
                    <form action="chuyenmuc.php" class="header__logo-search__form" method="GET">
                        <input type="text" name="q" id="" value="<?php echo $q ?>" class="header__logo-search__input" placeholder="Tìm kiến nhanh hơn">
                        <button class="header__logo-search__button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <?php if (!empty($data['Email'])) { ?>
                    <div class="my__hotel">
                        <a href="./cho_xac_nhan.php">Phòng trọ của bạn</a>
                    </div>
                <?php } else { ?>
                    <div class="my__hotell">
                    </div>
                <?php } ?>
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
        <div class="slides gird">
            <div class="slides__slick-slider">
                <div class="slides__items"><img src="images/slidenew1.jpg" alt="" class="slides__items__img"></div>
                <div class="slides__items"><img src="images/slidenew2.jpg" alt="" class="slides__items__img"></div>
                <div class="slides__items"><img src="images/slidenew3.jpg" alt="" class="slides__items__img"></div>
                <div class="slides__items"><img src="images/slidenew4.jpg" alt="" class="slides__items__img"></div>
            </div>
            <div class="slides__img">
                <div class="slides__img__top">
                    <a href="" class="slides__img__link">
                        <img src="images/slidenew2.jpg" alt="" class="slides__img__img">
                    </a>
                </div>
                <div class="slides__img__bottom">
                    <a href="" class="slides__img__link">
                        <img src="images/slidenew3.jpg" alt="" class="slides__img__img">
                    </a>
                </div>
            </div>
        </div>
        <div class="content gird">
            <div class="content__title">
                <h3 class="content__title__h3">
                    Đang sale
                </h3>
            </div>
            <div class="content__money__number">
                <?php for ($sl = 0; $sl <= 3; $sl++) { ?>
                    <?php $sql = "SELECT * FROM BaiDang_PhongTro LIMIT 1 OFFSET  $sl"; ?>
                    <?php $datas = select_list($sql); ?>
                    <div class="content__money__number__border">
                        <div class="content__money__number__while">
                            <?php foreach ($datas as $data) { ?>
                                <a class="content__money__number__while__link" href="trangchitiet.php?id=<?php echo $data["MaPhong"]; ?>" class="content__money__number__link">
                                    <div class="content__money__number__while__link__img">
                                        <img src="images/<?php echo $data["Anh"]; ?>" alt="" class="content__money__number__img">
                                        <div class="content__blur"></div>
                                    </div>
                                    <div class="content__money__number__text">
                                        <span class="content__money__number__span">
                                            <?php echo $data["GiaPhong"]; ?>đ
                                        </span>
                                        <span class="content__money__number__span">
                                            <?php echo $data["DiaChi"]; ?>
                                        </span>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="content__money__number__block__title">
                            NHÀ TRỌ 247
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="content__title">
                <h3 class="content__title__h3">
                    Bài đăng gợi ý
                </h3>
            </div>
            <div class="content__money__number">
                <?php for ($sl = 9; $sl <= 12; $sl++) { ?>
                    <?php $sql = "SELECT * FROM BaiDang_PhongTro LIMIT 1 OFFSET  $sl"; ?>
                    <?php $datas = select_list($sql); ?>
                    <div class="content__money__number__border">
                        <div class="content__money__number__while">
                            <?php foreach ($datas as $data) { ?>
                                <a class="content__money__number__while__link" href="trangchitiet.php?id=<?php echo $data["MaPhong"]; ?>" class="content__money__number__link">
                                    <div class="content__money__number__while__link__img">
                                        <img src="images/<?php echo $data["Anh"]; ?>" alt="" class="content__money__number__img">
                                        <div class="content__blur"></div>
                                    </div>
                                    <div class="content__money__number__text">
                                        <span class="content__money__number__span">
                                            <?php echo $data["GiaPhong"]; ?>đ
                                        </span>
                                        <span class="content__money__number__span">
                                            <?php echo $data["DiaChi"]; ?>
                                        </span>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="content__money__number__block__title">
                            NHÀ TRỌ 247
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- Nội dung hiển thị thêm -->
            <div class="content__money__number content__money__number--hidden content__money__number--tweenmax">
                <?php for ($sl = 13; $sl <= 16; $sl++) { ?>
                    <?php $sql = "SELECT * FROM BaiDang_PhongTro LIMIT 1 OFFSET  $sl"; ?>
                    <?php $datas = select_list($sql); ?>
                    <div class="content__money__number__border">
                        <div class="content__money__number__while">
                            <?php foreach ($datas as $data) { ?>
                                <a class="content__money__number__while__link" href="trangchitiet.php?id=<?php echo $data["MaPhong"]; ?>" class="content__money__number__link">
                                    <div class="content__money__number__while__link__img">
                                        <img src="images/<?php echo $data["Anh"]; ?>" alt="" class="content__money__number__img">
                                        <div class="content__blur"></div>
                                    </div>
                                    <div class="content__money__number__text">
                                        <span class="content__money__number__span">
                                            <?php echo $data["GiaPhong"]; ?>đ
                                        </span>
                                        <span class="content__money__number__span">
                                            <?php echo $data["DiaChi"]; ?>
                                        </span>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="content__money__number__block__title">
                            NHÀ TRỌ 247
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- nut hien thi them -->
            <div class="content__button__show">
                <div class="content__button__show__text">XEM THÊM</div>
                <div class="content__button__show__text content__button__hidden">ẨN BỚT</div>
            </div>
        </div>
        <!-- end content -->
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
                    Địa chỉ: Tầng 4-5-6, Tòa nhà 175 Tây Sơn, số 29 Đống Đa, Quận Đống Đa, Quận Ba Đình, Thành phố Hà Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.vn</br>
                    Chịu Trách Nhiệm Quản Lý Nội Dung: Công nghệ Phần mềm - Điện thoại liên hệ: 0123 081221 (ext 4678)
                </span>
            </div>
        </footer>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.slides__slick-slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            fade: false,
            prevArrow: '<button type = "button" class = "slick-prev slick-arrow"><i class="fa-solid fa-angle-left"></i></button>',
            nextArrow: '<button type = "button" class = "slick-next slick-arrow"><i class="fa-solid fa-angle-right"></i></button>',
        });
        $('.content__button__show__text:nth-child(1)').click(function() {
            $(this).addClass('content__button__hidden');
            $('.content__money__number--hidden').removeClass('content__money__number--hidden')
            TweenMax.staggerFrom($('.content__money__number--tweenmax .content__money__number__border'), 1, {
                marginTop: 100,
                opacity: 0
            }, 0.4)
            $('.content__button__show__text:nth-child(2)').removeClass('content__button__hidden');
        });
        $('.content__button__show__text:nth-child(2)').click(function() {
            $(this).addClass('content__button__hidden');
            $('.content__money__number--tweenmax').addClass('content__money__number--hidden')
            $('.content__button__show__text:nth-child(1)').removeClass('content__button__hidden');
        })
    })
</script>

</html>