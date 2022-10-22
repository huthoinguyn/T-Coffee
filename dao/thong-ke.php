<?php

// require_once 'pdo.php';

function thong_ke_hang_hoa()
{
    $sql = "SELECT count(*) FROM hang_hoa";
    $count = pdo_query_value($sql);
    return $count;
}

function thong_ke_binh_luan()
{
    $sql = "SELECT count(*) FROM binh_luan";
    $count = pdo_query_value($sql);
    return $count;
}

function thong_ke_khach_hang()
{
    $sql = "SELECT count(*) FROM khach_hang";
    $count = pdo_query_value($sql);
    return $count;
}
function thong_ke_loai()
{
    $sql = "SELECT count(*) FROM loai";
    $count = pdo_query_value($sql);
    return $count;
}

function total_all()
{
    $total = thong_ke_loai() + thong_ke_khach_hang() + thong_ke_binh_luan() + thong_ke_hang_hoa();
    return $total;
}
