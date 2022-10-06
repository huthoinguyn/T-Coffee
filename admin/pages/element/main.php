<main class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <h3><?php echo isset($_GET['manage']) ? $_GET['manage'] : 'dashboard' ?> Manager</h3>
        <?php if (isset($_GET['manage']) && $_GET['manage'] == 'product') {
        ?>
            <form class="search-container">
                <input type="text" name='keyword' id="search-bar" placeholder="Find Product">
            </form>
        <?php
        } else { ?>
            <div class=""></div>
        <?php  } ?>
    </div>
    <?php
    if (isset($_GET['manage']) && $_GET['handle']) {
        $manage = $_GET['manage'];
        $handle = $_GET['handle'];
    } else {
        $manage = '';
        $handle = '';
    }
    ?>
</main>
<!-- <script src="./module/product/js/upload.js"></script> -->