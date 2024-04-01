<?php

function productOld(){
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] < 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 9;
    $total_product_old = product_select_old();
    $list_product = product_select_page_old($page , $quantity);
    $total_pages =  ceil(count($total_product_old) / $quantity);
    $product_top10=loadall_product_top10();
    include "views/product_filter.php";
}
function product_price_asc(){
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 9;
    $total_product_price = product_select_price_asc();
    $list_product = product_select_page_asc($page , $quantity);
    $total_pages =  ceil(count($total_product_price) / $quantity);
    $product_top10=loadall_product_top10();
    // echo '<pre>';
    // var_dump($list_product);
    include "views/product_filter.php"; 
}
function product_price_desc(){
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 9;
    $total_product_price_desc = product_select_price_desc();
    $list_product = product_select_page_desc($page , $quantity);
    $total_pages =  ceil(count($total_product_price_desc) / $quantity);
    $product_top10=loadall_product_top10();
    // echo '<pre>';
    // var_dump($list_product);
    include "views/product_filter.php"; 
}
