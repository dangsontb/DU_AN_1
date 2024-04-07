<?php

function order_select_all(){
    $sql = "SELECT * 
            FROM `order` o 
            JOIN `user` u ON o.id_user = u.user_id
            JOIN `status` s ON o.id_status = s.status_id
            ORDER BY o.id asc ";
    return pdo_query($sql);
}
function order_select_by_id($id){
    $sql = "SELECT * FROM `order` WHERE id = ?";
    return pdo_query_one($sql, $id);
}
function order_select_pages( $page , $quantity){
    $start = ($page -1) * $quantity;
    $sql = "SELECT * FROM `order` o 
            JOIN `user` u ON o.id_user = u.user_id
            JOIN `status` s ON o.id_status = s.status_id
            ORDER BY o.id asc
            LIMIT $start , $quantity";
    return pdo_query($sql);
}

function taodonhang($ma_donhang, $tongdonhang, $pttt,$order_name , $phone , $address , $status_id, $user_id, $date){
    $sql="INSERT INTO `order`( `ma_donhang`, `tong_donhang`, `phuongthuc_thanhtoan`,`order_name`, `phone`, `address`, `id_status`, `id_user`, `create_at`) 
            VALUES ('$ma_donhang','$tongdonhang','$pttt','$order_name' , '$phone' , '$address' , '$status_id' , '$user_id', '$date')";
    //pdo_execute($sql);
    return  insert_id($sql);
}

// function update_order($id, $ma_donhang, $tong_donhang, $phuongthuc_thanhtoan, $order_name, $phone, $address, $id_status ,$id_user,$create_at){
//     $sql = "UPDATE order SET ma_donhang=?,tong_donhang=?,phuongthuc_thanhtoan=?,order_name=?,phone=?,address=?,id_status=?,create_at =? $id_user WHERE id =?";
//     pdo_execute($sql, $ma_donhang, $tong_donhang, $phuongthuc_thanhtoan, $order_name, $phone, $address, $id_status, $id_user,$create_at, $id);
// }
function update_order($id, $ma_donhang, $tong_donhang, $phuongthuc_thanhtoan, $order_name, $phone, $address, $id_status ,$id_user,$create_at){
    $sql = "UPDATE `order` SET `ma_donhang`='$ma_donhang',`tong_donhang`='$tong_donhang',`phuongthuc_thanhtoan`='$phuongthuc_thanhtoan',`order_name`='$order_name',`phone`='$phone',`address`='$address',`id_status`='$id_status',`id_user`='$id_user',`create_at`='$create_at' WHERE `id`='$id'";
    pdo_execute($sql);
}

