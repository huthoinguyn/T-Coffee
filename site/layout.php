<main>
    <header>
        <div class="logo">
            T-Coffee
        </div>
        <?php require '../layout/nav.php' ?>
        <?php require '../layout/dang-nhap.php' ?>
    </header>
    <div class="content">
        <?php require $VIEW_NAME; ?>
    </div>
    <?php require '../layout/footer.php' ?>
</main>