<form action="../tai-khoan/dang-nhap.php" method="post">
    <div>
        <div>Tên đăng nhập</div>
        <input name="ma_kh" value="<?= $ma_kh ?>">
    </div>
    <div>
        <div>Mật khẩu</div>
        <input name="mat_khau" type="password" value="<?= $mat_khau ?>">
    </div>
    <div>
        <input name="ghi_nho" type="checkbox" checked> Ghi nhớ tài khoản?
    </div>
    <div class="form-group">
        <button name="btn_login">Đăng nhập</button>
    </div>
    <div>
        <li><a href="../tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
        <li><a href="../tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
    </div>
</form>