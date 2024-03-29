<?php

function product_detail(){
    if(isset($_GET['product_id'] ) && $_GET['product_id'] > 0){
        $product_id = $_GET['product_id'];
        $product_detail_id = product_detail_id($_GET['product_id']);
        $sizes = size_select_all();
    }
    $list_comment = comments_select_by_product($product_id);
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
            echo "aaa";
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
