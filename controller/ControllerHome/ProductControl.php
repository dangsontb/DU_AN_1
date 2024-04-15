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

function thanh_toan(){
    if ((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])) {
        // Lấy dữ liệu
        $user_id = $_POST['user_id'];
        $tongdonhang=$_POST['tongdonhang'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pttt=$_POST['pttt'];
        $ma_donhang="SHN".rand(0,999999);
        $status_id = 1;
        $date = date('Y-m-d');
        //Tạo đơn hàng và trả về đơn hàng;
        $id_donhang=taodonhang($ma_donhang, $tongdonhang, $pttt,$name , $phone , $address , $status_id, $user_id, $date);

        if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
            foreach ($_SESSION['giohang']  as $item) {
                    //$id_product,$tensp,$hinh,$gia,$soluong
                $product_by_id = product_select_by_id($item[0]);
                $product_quantity = $product_by_id['product_quantity'] - $item[4];
                product_update($product_by_id['product_id'],$product_by_id['name'],$product_by_id['price'],$product_by_id['image'],$product_by_id['description'],$product_by_id['sale'],$product_quantity,$product_by_id['create_at'],$product_by_id['view'],$product_by_id['cate_id'],$product_by_id['brand_id']);
                
                add_order_detail($id_donhang,$item[0],$item[4],$item[3],$item[2],$item[1]);
              
            }
        }
    }
    include "views/cart/viewbill.php";
}
function order_history(){
    if(isset($_SESSION['user']) && $_SESSION['user'] > 0){
        $user_id = $_SESSION['user']['user_id'];
        $order_history =history($user_id);
    }
    include "views/cart/history.php";
}
function delete_order_detail(){
    if(isset($_GET['id']) &&($_GET['id']) > 0){
        $id = $_GET['id'] ;
        $order_id = $_GET['order_id'] ;
        delete_history_order_detail($_GET['id']);
        $history_order_detail = history_order_detail($order_id);
        if(count($history_order_detail) ==0){
            delete_order_by_id_order($order_id);
            header('location: index.php?act=order_history');
        }else{
            header('location: index.php?act=history_order_detail&order_id='.$order_id);
        }
    } 
}