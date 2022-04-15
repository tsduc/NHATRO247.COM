<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="CSS/base.css">
    <link rel="stylesheet" href="CSS/dangky.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JS/dangnhap.js"></script>
</head>

<body>
    <!-- <div class="container"> -->
    <header class="header gird">
        <div class="header__logo__sign-in">
            ĐĂNG KÝ
        </div>
        <a href="" class="header__logo__help">
            Cần trợ giúp ?
        </a>
    </header>
    <div class="content">
        <div class="content__img__form gird_content">
            <img class="content__img" src="images/nt_logo2.png" alt="">
            <div class="content__form">
                <form class="content__form__form" action="kiem-tra_dang-ky.php" method="POST">
                    <label for="" class="content__form__label content__form__label__email">
                        Email:
                    </label>
                    <input type="email" placeholder="Nhập email" class="content__form__input" name="email">
                    <label for="" class="content__form__label content__form__label__pass">
                        Mật khẩu:
                    </label>
                    <input type="password" placeholder="Nhập mật khẩu" class="content__form__input" name="password">
                    <label for="" class="content__form__label content__form__label__checkpass">
                        Xác nhận mật khẩu:
                    </label>
                    <input type="password" placeholder="Nhập lại mật khẩu" class="content__form__input" name="re-password">
                    <button class="content__form__button">
                        Đăng ký
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->
</body>

</html>