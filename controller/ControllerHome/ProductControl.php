<?php

function product_detail(){
    if(isset($_GET['product_id'] ) && $_GET['product_id'] > 0){
        $product_id = $_GET['product_id'];
        $product_detail_id = product_detail_id($_GET['product_id']);
        $sizes = size_select_all();
    }
    include "views/product_detail.php";
}
