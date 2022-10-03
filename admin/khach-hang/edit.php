<form action="index.php" method="post" enctype="multipart/form-data">
    <div>
        <label>HÌNH ẢNH</label>
        <input name=“up_hinh" type="file">
        <input name=“hinh” value=“<?= $hinh ?>”>
    </div>
    <div>
        <button name=“btn_update”>Cập nhật</button>
    </div>
</form>