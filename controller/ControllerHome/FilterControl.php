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
    include "views/product_old.php";
}