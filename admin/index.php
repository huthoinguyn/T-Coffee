<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font  google -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="./css/search.css">
  <link rel="stylesheet" href="./css/chart.css">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="./css/style.css" />

  <!----===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <title>Admin Dashboard Panel</title>
  <style>
    main.dashboard {
      /* margin-left: 300px; */
      height: 100vh;
      overflow-y: hidden;
    }

    nav {
      z-index: 9999;
    }
  </style>
</head>

<body>
  <?php
  include('../config/config.php');
  include('./pages/element/nav.php');
  include('./pages/element/main.php');
  ?>
  <script src="./module/product/js/upload.js"></script>
  <script src="./js/script.js"></script>

</body>

</html>