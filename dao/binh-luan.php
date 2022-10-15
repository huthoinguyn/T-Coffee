<?php

// require_once 'pdo.php';
function binh_luan_insert($ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan)
{
    $sql = "INSERT INTO binh_luan(ma_bl,noi_dung,ma_kh,ma_hh,ngay_binh_luan) VALUES(?)";
    pdo_execute($sql, $ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan);
}
function binh_luan_update($ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan)
{
    $sql = "UPDATE binh_luan SET ma_bl=?,noi_dung=?,ma_kh=?,ngay_binh_luan=?, WHERE ma_bl=?";
    pdo_execute($sql, $ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan);
}
function binh_luan_delete($ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_select_all($ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan)
{
    $sql = "SELECT * FROM binh_luan";
    return pdo_query($sql);
}
function binh_luan_select_by_id($ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
function binh_luan_exist($ma_bl, $noi_dung, $ma_kh, $ngay_binh_luan)
{
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function binh_luan_select_by_hang_hoa($ma_hh)
{
    return [];
}
