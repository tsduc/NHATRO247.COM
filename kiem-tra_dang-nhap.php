    <?php
    include("lib_db.php");
    include("connect.php");
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (empty($email)) {
        echo "
        <script>
        window.alert('Bạn chưa nhập email');
        window.location.href='./dangnhap.php';
        </script>
        ";
    }
    if (empty($pass)) {
        echo "
        <script>
        window.alert('Bạn chưa nhập password');
        window.location.href='./dangnhap.php';
        </script>
        ";
    }
    $sql = "SELECT * FROM TaiKhoan WHERE Email = '" . $email . "' AND MatKhau = '" . $pass . "'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    if (!empty($data['Email'])) {
        $acc = "update TaiKhoan set TrangThai = 1 where Email = '" . $email . "' AND MatKhau = '" . $pass . "'";
        $ret = exec_update($acc);
        $_SESSION["Email"] = "$email";
        if ($data['VaiTro'] == 0) {
            echo "
                <script type='text/javascript'>
                    window.location.href='./admin_trangchu.php';
                </script>
            ";
        } else if ($data['VaiTro'] == 1) {
            $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
            if ($id == 0) {
                echo "
                <script type='text/javascript'>
                    window.location.href='./trangchu.php';
                </script>
            ";
            } else {
                session_start();
                $_SESSION["MaPhong"] = $id;
                echo "
                <script type='text/javascript'>
                    window.location.href='./hopdong.php';
                </script>
                ";
            }
        } else {
            echo "
                <script type='text/javascript'>
                    window.location.href='./chutro_trangchu.php';
                </script>
            ";
        }
    }
    ?>