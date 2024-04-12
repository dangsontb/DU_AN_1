<?php

function product_detail(){
    if(isset($_GET['product_id'] ) && $_GET['product_id'] > 0){
        $product_id = $_GET['product_id'];
        $product_detail_id = product_detail_id($_GET['product_id']);
        $sizes = size_select_all();
    }
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 3;
    $total_comment_product = comments_select_by_product($product_id);
    $list_comment = comments_select_page_product($product_id, $page, $quantity);
    $total_pages =  ceil(count($total_comment_product) / $quantity);
    include "views/product_detail.php";
}
function comment_insert(){

    // if(isset($_SESSION['user']) && $_SESSION['user']){
    //     if(isset($_POST['submit'])){
            
    //         $content = $_POST['content'];
    //         $user_id = $_SESSION['user']['user_id']; 
    //         $date = date("d-m-Y");
    //         $product_id = $_POST['product_id'];
    //         if(!empty($content)){             
    //             comments_insert($content, $date, $user_id, $product_id);
    //             header("Location: ?act=product_detail&product_id=".$product_id);
    //         }else{
    //             header("Location: ?act=product_detail&product_id=".$product_id);
    //         }
    //     }
    // }
    if(isset($_SESSION['user'])){
        if(isset($_POST['submit'])){
    
            $content = $_POST['content'];
            $user_id = $_SESSION['user']['user_id']; 
            $date = date("d-m-Y");
            $rating = $_POST['rating'];
            $product_id = $_POST['product_id'];
            if(!empty($content)){             
                comments_insert($content, $date, $rating, $user_id, $product_id);
                header("Location: ?act=product_detail&product_id=".$product_id);
            }else{
                header("Location: ?act=product_detail&product_id=".$product_id);
            }
        }
        
    }else{
        header("Location: ?act=login");
        
    }
    
    
}

function find_keyword(){
    if(isset($_POST['submit'])){
        $keyw = $_POST['keyw'];
    }
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    isset($_GET['keyword']) ? $keyw = $_GET['keyword'] : '';
    $product_top10=loadall_product_top10();
    $quantity = 9;
    $total_product_keyword=product_select_keyw($keyw);
    $list_product=product_select_page_keyword($keyw ,$page, $quantity);
    $total_pages = ceil(count($total_product_keyword) / $quantity);
    include "views/search.php";
}
function update_quantity_cancel_order(){
    if(isset($_GET['order_id']) && $_GET['order_id']> 0){
        $order_id = $_GET['order_id'];
        $product_in_order_detail = select_product_by_order_id($order_id);    
        foreach($product_in_order_detail as $product){
            // echo "<pre>";
            // var_dump($product);
            $product_quantity_in_stock = product_select_by_id($product['id_product'])['product_quantity'];
            $product_price_in_stock = product_select_by_id($product['id_product'])['price'];
            var_dump($product_quantity_in_stock) ; 
            $product_update_cancel = $product_quantity_in_stock + $product['soluong'];
            echo $product_update_cancel;
            product_update($product['id_product'],$product['ten_sanpham'],$product_price_in_stock,$product['hinhanh'],$product['description'],$product['sale'],$product_update_cancel,$product['create_at'],$product['view'],$product['cate_id'],$product['brand_id']);
            // product_update($product_id, $name, $price, $image, $description, $sale,$product_quantity, $create_at, $view, $cate_id, $brand_id);
        }
        delete_order_detail_by_id_order($order_id);
        delete_order_by_id_order($order_id);
      
        header('location: index.php?act=order_history');
    }
}
