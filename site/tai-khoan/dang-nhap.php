<?php

require '../../pdo.php';
require '../../global.php';
require '../../dao/khach-hang.php';

if (exist_param("btn_login")) {
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = $_POST['mat_khau'];
    $user = khach_hang_select_by_id($ma_kh);
    if ($user) {
        if ($user['mat_khau'] == $mat_khau) {
            $MESSAGE = "Đăng nhập thành công!";
            $_SESSION["user"] = $user;
            // Xử lý ghi nhớ tài khoản
            // Quay trở lại trang được yêu cầu
            echo 'Login successfully';
            if (exist_param("ghi_nho")) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            if (isset($_SESSION['request_uri'])) {
                header("location: " . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
            echo "Password is not true!";
        }
    } else {
        echo "Username is not true!";
        $MESSAGE = "Sai mã đăng nhập!";
    }
} else {
    if (exist_param("btn_logoff")) {
        session_unset();
        echo "Logout Successfully";
    }
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
}
// $VIEW_NAME = "tai-khoan/dang-nhap-form.php";
// require '../layout.php';
