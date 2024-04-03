<?php

function order_select_all(){
    $sql = "SELECT * 
            FROM `order` o 
            JOIN `user` u ON o.id_user = u.user_id
            JOIN `status` s ON o.id_status = s.status_id
            ORDER BY o.id asc ";
    return pdo_query($sql);
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
