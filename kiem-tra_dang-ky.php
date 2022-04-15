    <?php
    include("lib_db.php");
    include("connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = $_POST['re-password'];

    if (empty($_POST['email'])) {
        echo "
                <script type='text/javascript'>
                window.alert('Bạn chưa nhập email');
                    window.location.href='./dangky.php';
                </script>

            ";
    } elseif (empty($_POST['password'])) {
        echo "
                <script type='text/javascript'>
                window.alert('Bạn chưa nhập mật khẩu');
                    window.location.href='./dangky.php';
                </script>

            ";
    } elseif (empty($_POST['re-password'])) {
        echo "
                <script type='text/javascript'>
                window.alert('Bạn chưa nhập xác nhận mật khẩu');
                    window.location.href='./dangky.php';
                </script>

            ";
    } elseif (!empty($_POST['re-password'])) {
        if ($_POST['re-password'] != $_POST['password']) {
            echo "
                    <script type='text/javascript'>
                    window.alert('Bạn nhập mật khẩu không trùng khớp');
                        window.location.href='./dangky.php';
                    </script>
    
                ";
        }
    }

    $sql = "SELECT * FROM TaiKhoan WHERE Email like '" . $email . "'  ";
    $result = select_list($sql);

    $dem = 0;
    foreach ($result as $item) {
        if ($item["Email"] == $email) {
            $dem++;
        }
    }
    if ($dem != 0) {
        echo "
                <script type='text/javascript'>
                    window.alert('Email này đã tồn tại');
                    window.location.href='./dangky.php';
                </script>

            ";
    } else {
        $sql = "INSERT INTO TaiKhoan (Email, MatKhau) VALUES ('" . $email . "', '" . $password . "')";
        $ret = exec_update($sql);
        echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã đăng kí tài khoản thành công');
                    window.location.href='./dangnhap.php';
                </script>

            ";
    };

    ?>
