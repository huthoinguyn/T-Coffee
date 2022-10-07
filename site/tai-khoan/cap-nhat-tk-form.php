<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
    <img src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>">
    <input name="ma_kh" value="<?= $ma_kh ?>" readonly>
    <input name="ho_ten" value="<?= $ho_ten ?>">
    <input name="email" value="<?= $email ?>">
    <input name="up_hinh" type="file">
    <button name="btn_update">Cập nhật</button>
    <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
    <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
    <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
    <input name="hinh" value="<?= $hinh ?>" type="hidden">
</form>