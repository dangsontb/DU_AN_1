<?php

function minus_quantity(){
    if(isset($_GET['id']) && isset($_GET['i'])){
        $id=$_GET['id'];
        $i = $_GET['i'];
        foreach($_SESSION['giohang'] as $sp){
            if($sp[0] ==$id){
                if($_SESSION['giohang'][$i][4]>1){
                    $_SESSION['giohang'][$i][4]--;
                }else{
                    array_splice($_SESSION['giohang'],$i,1);
                }
            }
        }
    }
    header('location: index.php?act=viewcart');
}
function plus_quantity(){
    if(isset($_GET['id']) && isset($_GET['i'])){
        $id=$_GET['id'];
        $product_quantity = product_select_by_id($id)['product_quantity'];
        $i = $_GET['i'];
        foreach($_SESSION['giohang'] as $sp){
            if($sp[0] ==$id && $product_quantity > $_SESSION['giohang'][$i][4]){
                $_SESSION['giohang'][$i][4]++;
                // echo $_SESSION['giohang'][$i][4];
            }else{
                echo '<script>
                        alert("Số lượng sản phẩm chỉ còn : '.$_SESSION['giohang'][$i][4].'");
                    </script>';
            }
        }
    }
    header('location: index.php?act=viewcart');
}

function add_cart(){
    if (isset($_POST['addtocart'])) {
        $id_product = $_POST['product_id'];
        $product_quantity = product_select_by_id($id_product)['product_quantity'];
        $tensp = $_POST['tensp'];
        $hinh = $_POST['hinh'];
        $gia = $_POST['gia'];
        
        if(isset($_POST['soluong']) && $_POST['soluong'] > 0){
            $soluong=$_POST['soluong'];
        }else{
            $soluong=1;
        }
       
        $check=0;
        //Kiểm tra sản phẩm có tồn tại trong giỏ hàng k
        //Nếu có -> Cập nhập số lượng
        $i=0; // Định vị xem mk ở sản phẩm nào
        foreach ($_SESSION['giohang'] as $sp) {
            $product_cart_quantity =  $_SESSION['giohang'][$i][4] + $soluong ;
            if ($sp[0]===$id_product) {
                if($product_cart_quantity <= $product_quantity){
                    $soluongmoi=$soluong ;
                    $_SESSION['giohang'][$i][4]+=$soluongmoi;
                    $check=1;
                    break;
                }else{
                    $soluongmoi=$product_quantity - $_SESSION['giohang'][$i][4];
                    $_SESSION['giohang'][$i][4]+=$soluongmoi;
                    $check=1;
                }
            }
            $i++;
        }
        
        if($check==0){ //Không: add sản phẩm mới
            if($soluong <= $product_quantity){
                    //Khởi tạo mảng con trước khi đưa vào giỏ hàng
                $item=array($id_product,$tensp,$hinh,$gia,$soluong);
                
            }else{
                $soluong = $product_quantity;
                $item=array($id_product,$tensp,$hinh,$gia,$soluong);
            }
            $_SESSION['giohang'][]=$item;
            // $spadd= [$id_product, $tensp , $hinh, $gia,  $soluong];
            // array_push($_SESSION['giohang'], $spadd);
        }
    }
    header("location: index.php?act=viewcart");
    // foreach ($_SESSION['giohang'] as $sp) {   
        //     $product_cart_quantity =  $_SESSION['giohang'][$i][4] + $soluong ;
        //     if ($sp[0]===$id_product && ($product_cart_quantity <= $product_quantity)) {
        //         $soluongmoi=$soluong ;
        //         $_SESSION['giohang'][$i][4]+=$soluongmoi;
        //         $check=1;
        //         break;
        //     }else{
        //         $soluongmoi=$product_quantity - $_SESSION['giohang'][$i][4];
        //         $_SESSION['giohang'][$i][4]+=$soluongmoi;
        //         $check=1;
        //     }
        //     $i++;
        // }
}
