<?php

require_once 'pdo.php';
function binh_luan_insert($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}
function binh_luan_update($ma_loai, $ten_loai){
    
}
function binh_luan_delete($ma_loai){
    
}
function binh_luan_select_all(){
    
}
function binh_luan_select_by_id($ma_loai){
    
}
function binh_luan_exist($ma_loai){
    
}
function binh_luan_select_by_hang_hoa(){
    
}
