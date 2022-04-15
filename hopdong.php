<?php
include("lib_db.php");
include("connect.php");
$sql = "SELECT * FROM TaiKhoan where TrangThai=1";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
$email = $data['Email'];
//get input
$id_phong = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
if ($id_phong == 0) {
    session_start();
    $id_phong = $_SESSION["MaPhong"];
}
$fullname = isset($_REQUEST["fullname"]) ? $_REQUEST["fullname"] : "";
$cmt = isset($_REQUEST["cmt"]) ? $_REQUEST["cmt"] : "";
$sdt = isset($_REQUEST["sdt"]) ? $_REQUEST["sdt"] : "";
$mattruoc = isset($_REQUEST["mattruoc"]) ? $_REQUEST["mattruoc"] : "";
$matsau = isset($_REQUEST["matsau"]) ? $_REQUEST["matsau"] : "";

$count = "select * from HopDong where MaHopDong = (select max(MaHopDong) from HopDong);";
$dem = select_one($count);
$x = $dem['MaHopDong'] + 1;
//tao sql
if (!empty($id_phong) and !empty($fullname) and !empty($cmt) and !empty($sdt) and !empty($mattruoc) and !empty($matsau)) {
    $sql = "insert into HopDong(MaHopDong, Email, MaPhong, Anh, TienCoc, SoDienThoai, CMT_CCCD, HoTen, NoiDung, NgayDang, NgayCapNhat) values 
    ('{$x}','{$email}','{$id_phong}','{$mattruoc} ;; {$matsau} ','2500000','{$sdt}','{$cmt}', '{$fullname}', 'Thuê phòng',sysdate(), '0')";
}
$ret = exec_update($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hợp đồng</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./CSS/base.css">
    <link rel="stylesheet" href="./CSS/hopdong.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header class="header">
            <nav class="header__nav gird">
                <a href="./trangchu.php"><img src="./images/nt_logo2.png" alt="" class="header__nav__img"></a>
                <div class="header__nav__help">
                    Cần trọ giúp ?
                </div>
            </nav>
        </header>
        <!-- end header -->
        <div class="content gird">
            <div class="content__title">
                Hợp Đồng Thuê Trọ:
            </div>
            <div class="content__form">
                <form action="./hopdong.php" class="content__form-form" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id_phong ?>" />
                    <?php if (empty($_POST['fullname']) or empty($_POST['cmt']) or empty($_POST['sdt'])) {
                        $_POST['fullname'] = $_POST['cmt'] = $_POST['sdt'] = "";
                    } ?>
                    <div class="content__form__label__input">
                        <label class="content__form__label" for="">Họ và Tên:</label>
                        <input type="text" class="content__form__input" name="fullname" value="<?php echo $_POST['fullname'] ?>">
                    </div>
                    <div class="content__form__label__input">
                        <label class="content__form__label" for="">Số CMT/CCCD:</label>
                        <input type="text" class="content__form__input" name="cmt" value="<?php echo $_POST['cmt'] ?>">
                    </div>
                    <div class="content__form__label__input">
                        <label class="content__form__label" for="">Số điện thoại:</label>
                        <input type="text" class="content__form__input" name="sdt" value="<?php echo $_POST['sdt'] ?>">
                    </div>
                    <div class="content__form__label__input">
                        <label class="content__form__label" for="">Tiền cọc:</label>
                        <label class="content__form__label" for="">2.500.000VND</label>
                    </div>
                    <div class="content__form__label__input content__form__label__input__mean">
                        <label class="content__form__label" for="">Ảnh CMT/CCCD:</label>
                        <div class="content__form__label__input__img--input--submit">
                            <input type="file" class="content__form__input content__form__input--file" name="img-one">
                            <input type="file" class="content__form__input content__form__input--file content__form__input--hiden" name="img-two">
                            <div class="content__form__label__input-img">
                                <?php
                                if (!isset($_POST['submit']) or empty($_FILES['img-one']['name']) or empty($_FILES['img-two']['name'])) {
                                    $_FILES['img-one']['name'] = $_FILES['img-two']['name'] = "";
                                } else { ?>
                                    <?php $mattruoc =  $_FILES['img-one']['name'] ?>
                                    <?php $matsau =  $_FILES['img-two']['name'] ?>
                                <?php } ?>
                                <input type="hidden" name="mattruoc" value="<?php echo $mattruoc ?>" />
                                <input type="hidden" name="matsau" value="<?php echo $matsau ?>" />
                                <img src="./images/<?php echo $mattruoc ?>" alt="" class="content__form__label__input__img">
                                <img src="./images/<?php echo $matsau ?>" alt="" class="content__form__label__input__img">
                            </div>
                            <button type="submit" name='submit' class="content__form__label__input__submit">
                                Xác nhận
                            </button>
                        </div>
                    </div>
                    <div class="content__form__label__input content__form__label__input__mean">
                        <label class="content__form__label" for="">Nội dung hợp đồng:</label>
                        <label class="content__form__label content__form__label__color-back" for="">
                            <div class="back__block">
                                Sau khi thảo luận, Hai Bên thống nhất đi đến ký kết Hợp đồng thuê nhà (“Hợp Đồng”) với
                                các điều khoản và điều kiện dưới đây:<br><br>
                            </div>
                            <b>Điều 1.</b> Nhà ở và các tài sản cho thuê kèm theo nhà ở:<br>
                            <div class="back">
                                1.1. Bên A đồng ý cho Bên B thuê và Bên B cũng đồng ý thuê quyền sử dụng đất và một căn
                                nhà gắn liền với quyền sử dụng đất tại địa chỉ để sử dụng làm nơi để ở.
                                <br>
                                1.2. Bên A cam kết quyền sử sụng đất và căn nhà gắn liền trên đất trên là tài sản sở hữu
                                hợp pháp của Bên A. Mọi tranh chấp phát sinh từ tài sản cho thuê trên Bên A hoàn toàn
                                chịu trách nhiệm trước pháp luật.
                                <br><br>
                            </div>
                            <b>Điều 2.</b> Bàn giao và sử dụng diện tích thuê:<br>
                            <div class="back">
                                2.1. Thời điểm Bên A bàn giao Tài sản thuê vào ngày…..tháng…..năm;
                                <br>
                                2.2. Bên B được toàn quyền sử dụng Tài sản thuê kể từ thời điểm được Bên A bàn giao như
                                quy định tại Mục 2.1 trên đây.
                                <br><br>
                            </div>
                            <b>Điều 3.</b> Thời hạn thuê
                            <br>
                            <div class="back">
                                3.1. Bên A cam kết cho Bên B thuê Tài sản thuê kể từ ngày bàn giao Tài sản thuê;
                                <br>
                                3.2. Hết thời hạn thuê nêu trên nếu bên B có nhu cầu tiếp tục sử dụng thì Bên A phải ưu
                                tiên cho Bên B tiếp tục thuê.
                                <br><br>
                            </div>
                            <b>Điều 4.</b> Đặc cọc tiền thuê nhà
                            <br>
                            <div class="back">
                                4.1. Bên B sẽ giao cho Bên A một khoản tiền ngay sau khi ký hợp đồng này. Số tiền này là
                                tiền đặt cọc để đảm bảm thực hiện Hợp đồng cho thuê nhà. Kể từ ngày Hợp Đồng có hiệu
                                lực.
                                <br>
                                4.2. Nếu Bên B đơn phương chấm dứt hợp đồng mà không thực hiện nghĩa vụ báo trước tới
                                Bên A thì Bên A sẽ không phải hoàn trả lại Bên B số tiền đặt cọc này.
                                Nếu Bên A đơn phương chấm dứt mẫu hợp đồng thuê nhà trọ mà không thực hiện nghĩa vụ báo
                                trước tới bên B thì bên A sẽ phải hoàn trả lại Bên B số tiền đặt cọc và phải bồi thường
                                thêm một khoản bằng chính tiền đặt cọc.
                                <br>
                                4.3. Tiền đặt cọc của Bên B sẽ không được dùng để thanh toán Tiền Thuê. Nếu Bên B vi
                                phạm Hợp Đồng làm phát sinh thiệt hại cho Bên A thì Bên A có quyền khấu trừ Tiền Đặt Cọc
                                để bù đắp các chi phí khắc phục thiệt hại phát sinh. Mức chi phí bù đắp thiệt hại sẽ
                                được Các Bên thống nhất bằng văn bản.
                                <br>
                                4.4. Vào thời điểm kết thúc Thời Hạn Thuê hoặc kể từ ngày Chấm dứt Hợp Đồng, Bên A sẽ
                                hoàn lại cho Bên B số Tiền Đặt Cọc sau khi đã khấu trừ khoản tiền chi phí để khắc phục
                                thiệt hại (nếu có).
                                <br><br>
                            </div>
                            <b>Điều 5.</b> Tiền thuê nhà:
                            <br>
                            <div class="back">
                                5.1. Tiền Thuê nhà đối với Diện Tích Thuê nêu tại mục
                                <br>
                                5.2 Tiền Thuê nhà không bao gồm chi phí sử dụng Diên tích thuê. Mọi chi phí sử dụng Diện
                                tích thuê nhà bao gồm tiền điện, nước, vệ sinh….sẽ do bên B trả theo khối lượng, công
                                suất sử dụng thực tế của Bên B hàng tháng, được tính theo đơn giá của nhà nước.
                                <br><br>
                            </div>
                            <div class="back__block">
                                <b>Điều 6.</b>
                                Phương thức thanh toán tiền thuê nhà:
                                Tiền Thuê nhà và chi phí sử dụng Diện tích thuê được thành toán theo 01 (một) tháng/lần
                                vào ngày 05 (năm) hàng tháng.
                                Việc thanh toán Tiền Thuê nhà và chi phí sử dụng Diện tích thuê theo Hợp Đồng này được
                                thực hiện bằng đồng tiền Việt Nam theo hình thức trả trực tiếp bằng tiền mặt.
                                <br><br>
                            </div>
                            <b>Điều 7.</b> Quyền và nghĩa vụ của bên cho thuê nhà:
                            <br>
                            <div class="back">
                                7.1. Quyền của Bên Cho Thuê:
                                Yêu cầu Bên B thanh toán Tiền Thuê và Chi phí sử dụng Diện Tích Thuê đầy đủ, đúng hạn
                                theo thoả thuận trong Hợp Đồng
                                Yêu cầu Bên B phải sửa chữa phần hư hỏng, thiệt hại do lỗi của Bên B gây ra.
                                <br>
                                7.2. Nghĩa vụ của Bên Cho Thuê:
                                <br>
                                <div class="back">
                                    – Bàn giao Diện Tích Thuê cho Bên B theo đúng thời gian quy định trong Hợp Đồng;
                                    <br>
                                    – Đảm bảo việc cho thuê theo Hợp Đồng này là đúng quy định của pháp luật;
                                    <br>
                                    – Đảm bảo cho Bên B thực hiện quyền sử dụng Diện Tích Thuê một cách độc lập và liên
                                    tục trong suốt Thời Hạn Thuê, trừ trường hợp vi phạm pháp luật và/hoặc các quy định
                                    của Hợp Đồng này.
                                    <br>
                                    – Không xâm phạm trái phép đến tài sản của Bên B trong phần Diện Tích Thuê. Nếu Bên
                                    A có những hành vi vi phạm gây thiệt hại cho Bên B trong Thời Gian Thuê thì Bên A
                                    phải bồi thường.
                                    <br>
                                    – Tuân thủ các nghĩa vụ khác theo thoả thuận tại Hợp Đồng này hoặc/và các văn bản
                                    kèm theo Hợp đồng này; hoặc/và theo quy định của pháp luật Việt Nam.
                                    <br><br>
                                </div>
                            </div>
                            <b>Điều 8.</b> Quyền và nghĩa vụ của bên thuê nhà:
                            <br>
                            <div class="back">
                                8.1. Quyền của Bên Thuê:
                                <br>
                                <div class="back">
                                    + Nhận bàn giao Diện tích Thuê theo đúng thoả thuận trong Hợp Đồng;
                                    <br>
                                    + Được sử dụng phần Diện Tích Thuê làm nơi để ở và các hoạt động hợp pháp khác;
                                    <br>
                                    + Yêu cầu Bên A sửa chữa kịp thời những hư hỏng không phải do lỗi của Bên B trong
                                    phần Diện Tích Thuê để bảo đảm an toàn;
                                    <br>
                                    + Được tháo dỡ và đem ra khỏi phần Diện Tích Thuê các tài sản, trang thiết bị của
                                    bên B đã lắp đặt trong phần Diện Tích Thuê khi hết Thời Hạn Thuê hoặc Đơn phương
                                    chấm dứt hợp đồng Bên thoả thuận chấm dứt Hợp Đồng.
                                    <br>
                                </div>
                                8.2. Nghĩa vụ của Bên Thuê:
                                <br>
                                <div class="back">
                                    + Sử dụng Diện Tích Thuê đúng mục đích đã thỏa thuận, giữ gìn nhà ở và có trách
                                    nhiệm trong việc sửa chữa những hư hỏng do mình gây ra;
                                    <br>
                                    + Thanh toán Tiền Đặt Cọc, Tiền Thuê đầy đủ, đúng thời hạn đã thỏa thuận;
                                    <br>
                                    + Trả lại Diện Tích Thuê cho Bên A khi hết Thời Hạn Thuê hoặc chấm dứt Hợp Đồng
                                    Thuê;
                                    <br>
                                    + Mọi việc sửa chữa, cải tạo, lắp đặt bổ sung các trang thiết bị làm ảnh hưởng đến
                                    kết cấu của căn phòng…, Bên B phải có văn bản thông báo cho Bên A và chỉ được tiến
                                    hành các công việc này sau khi có sự đồng ý bằng văn bản của Bên A;
                                    <br>
                                    + Tuân thủ một cách chặt chẽ quy định tại Hợp Đồng này, các nội quy phòng trọ (nếu
                                    có) và các quy định của pháp luật Việt Nam.
                                    <br><br>
                                </div>
                            </div>
                            <div class="back__block">
                                <b>Điều 9.</b> Đơn phương chấm dứt hợp đồng thuê nhà:
                                Trong trường hợp một trong Hai Bên muốn đơn phương chấm dứt Hợp Đồng trước hạn thì phải
                                thông báo bằng văn bản cho Bên kia trước 30 (ba mươi) ngày so với ngày mong muốn chấm
                                dứt. Nếu một trong Hai Bên không thực hiện nghĩa vụ thông báo cho Bên kia thì sẽ phải
                                bồi thường cho bên đó một khoản Tiền thuê tương đương với thời gian không thông báo và
                                các thiệt hại khác phát sinh do việc chấm dứt Hợp Đồng trái quy định.
                                <br><br>
                            </div>
                            <b>Điều 10.</b> Điều khoản thi hành:
                            <br>
                            <div class="back">
                                – Hợp đồng này có hiệu lực kể từ ngày hai bên cũng ký kết;
                                <br>
                                – Các Bên cam kết thực hiện nghiêm chỉnh và đầy đủ các thoả thuận trong Hợp Đồng này
                                trên tinh thần hợp tác, thiện chí.
                                <br>
                                – Mọi sửa đổi, bổ sung đối với bất kỳ điều khoản nào của Hợp Đồng phải được lập thành
                                văn bản, có đầy đủ chữ ký của mỗi Bên. Văn bản sửa đổi bổ sung Hợp Đồng có giá trị pháp
                                lý như Hợp Đồng, là một phần không tách rời của Hợp Đồng này.
                                <br>
                                – Hợp Đồng được lập thành 02 (hai) bản có giá trị như nhau, mỗi Bên giữ 01 (một) bản để
                                thực hiện.
                            </div>
                        </label>
                    </div>
                </form>
                <button class="content__form-form__button__submit">
                    <?php if (empty($_POST['fullname']) or empty($_POST['cmt']) or empty($_POST['sdt']) or empty($mattruoc) or empty($matsau)) {
                        $_POST['title'] = $_POST['code'] = $_POST['description'] = ""; ?>

                        <!-- <p class="style-title-text-button"> -->
                        <a href="./hopdong.php" class="">
                            <!-- <h4 class="style-title-text-button"></h4> -->
                            Xác nhận hợp đồng
                        </a>
                        <!-- </p> -->
                    <?php } else { ?>
                        <!-- <p class="style-title-text-button"> -->
                        <a href="./xac-nhan-hop-dong.php" class="">
                            <!-- <h4 class="style-title-text-button"></h4> -->
                            Xác nhận hợp đồng
                        </a>
                        <!-- </p> -->
                    <?php } ?>
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
                    Địa chỉ: Tầng 4-5-6, Tòa nhà 175 Tây Sơn, số 29 Đống Đa, Quận Đống Đa, Quận Ba Đình, Thành phố Hà
                    Nội, Việt Nam. Tổng đài hỗ trợ: 19001221 - Email: cskh@hotro.vn</br>
                    Chịu Trách Nhiệm Quản Lý Nội Dung: Công nghệ Phần mềm - Điện thoại liên hệ: 0123 081221 (ext 4678)
                </span>
            </div>
        </footer>
    </div>
</body>
<script>
    $(Document).ready(function() {
        $('.content__form__input--file:nth-child(1)').click(function() {
            $(this).addClass('content__form__input--hiden');
            $('.content__form__input--file:nth-child(2)').removeClass('content__form__input--hiden')
        });
        $('.content__form__input--file:nth-child(2)').click(function() {
            $(this).addClass('content__form__input--hiden');
            $('.content__form__input--file:nth-child(1)').removeClass('content__form__input--hiden')
        });
    })
</script>

</html>