<?php
foreach ($dac_biet_list as $item) {
?>
    <div>
        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>">
            <img src="../images/products/<?= $item['hinh'] ?>" />
        </a>
        <div>
            <h3>$<?= $item['don_gia'] ?></h3>
            <p><?= $item['ten_hh'] ?></p>
        </div>
    </div>
<?php
}
?>

<?php
foreach ($items_all as $item) {
    extract($item);
?>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <a href="chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                <img src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>">
            </a>
            <div class="caption text-left">
                <h3>$<?= number_format($don_gia, 2) ?></h3>
                <p><?= $ten_hh ?></p>
            </div>
        </div>
    </div>
<?php
}
?>

<?php require '../layout/home.php' ?>