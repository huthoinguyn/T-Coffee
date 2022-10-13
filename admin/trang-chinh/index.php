<?php

require_once '../../global.php';
require '../../pdo.php';
if (exist_param("hang-hoa")) {
    $VIEW_NAME = "hang-hoa/index.php";
} else if (exist_param("loai-hang")) {
    $VIEW_NAME = "loai-hang/index.php";
} else if (exist_param("khach-hang")) {
    $VIEW_NAME = "khach-hang/index.php";
} else if (exist_param("hoi-dap")) {
    $VIEW_NAME = "";
} else {
    $VIEW_NAME = "trang-chinh/home.php";
}
require '../layout.php';
