<?php

function list_order(){
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $status =status_select_all();
    $quantity = 6;
    $total_orders = order_select_all();
    $list_order = order_select_pages($page, $quantity) ;
    $total_pages =  ceil(count($total_orders) / $quantity);
    include "order/list_oder.php";
}
function order_detail(){
    $id = $_GET['id'];
    $detail_order_name =  order_select_by_id($id);
    $list_order_detail = order_detail_by_order_id($id);
    include "order/order_detail.php";
}