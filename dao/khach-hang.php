<?php
require_once 'pdo.php';

function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro)
{
    $sql = "INSERT INTO khach_hang(ma_kh,mat_khau,ho_ten,kich_hoat,hinh,email,vai_tro) VALUES(?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
}

function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro)
{
    $sql = "UPDATE khach_hang SET ma_kh=?, mat_khau=?,ho_ten=?,kich_hoat=?,hinh=?,email=?,vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro, $ma_kh);
}

function khach_hang_delete()
{

}

function khach_hang_select_all()
{
    
}

function khach_hang_select_by_id()
{

}

function khach_hang_exist()
{

}

function khach_hang_change_password()
{

}
