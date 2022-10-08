<?php

require_once '../../global.php';

require '../../pdo.php';
if (exist_param("hang-hoa")) {
    $VIEW_NAME = "trang-chinh/hang-hoa.php";
} else if (exist_param("loai-hang")) {
    $VIEW_NAME = "trang-chinh/loai-hang.php";
} else if (exist_param("gop-y")) {
    $VIEW_NAME = "trang-chinh/gop-y.php";
} else if (exist_param("hoi-dap")) {
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
} else {
    $VIEW_NAME = "trang-chinh/home.php";
}
require '../layout.php';
