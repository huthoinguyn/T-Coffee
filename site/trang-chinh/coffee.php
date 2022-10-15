<?php
foreach ($items_all as $item) {
    extract($item);
?>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail text-center">
            <a href="index.php?chi-tiet&ma_hh=<?= $ma_hh ?>">
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