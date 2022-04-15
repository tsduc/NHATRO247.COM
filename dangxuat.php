    <?php
    include("lib_db.php");
    session_start();
    session_unset();
    $sql = "SELECT * FROM TaiKhoan WHERE TrangThai = 1";
    $result = select_one($sql);
    $acc = "update TaiKhoan set TrangThai = 0 where Email = '" . $result['Email'] . "' AND MatKhau = '" . $result['MatKhau'] . "'";
    $ret = exec_update($acc);
    echo "
                <script type='text/javascript'>
                    window.location.href='./dangnhap.php';
                </script>

            ";
    ?>
