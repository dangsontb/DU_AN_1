<?php
function list_comment(){
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 6;
    $total_comment_of_products = comments_select_by_product_admin();
    $list_comment = comments_select_page_by_product_admin($page, $quantity) ;
    $total_pages =  ceil(count($total_comment_of_products) / $quantity);
    include 'comment/list_comment.php';

}

function select_comment_by_id(){
    $product_id = $_GET['product_id'];
    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 6;
    $total_comment_product = comments_select_by_product($product_id);
    $list_comment = comments_select_page_product($product_id, $page, $quantity);
    $total_pages =  ceil(count($total_comment_product) / $quantity);
    $product = product_select_by_id($product_id);
    include "comment/detail_comment.php";
}
function delete_comment(){
    $comment_id = $_GET['comment_id'];
    $comment  = comments_select_by_id($comment_id);
    comments_delete($comment_id);

    header("location: ?act=comment_detail&product_id=".$comment['product_id']);
}
function delete_comment_by_checkbox(){
    if(isset($_POST['delete_btn']) ){
        if(isset($_POST['comments_id'])){
            $comments_id = $_POST['comments_id'];
            // var_dump($comments_id[0]);
            $comment_product  = comments_select_by_id($comments_id[0]);
            if(!empty($comments_id)){
                comments_delete($comments_id);
            }
        }
    } 
    header("location: ?act=comment_detail&product_id=".$comment_product['product_id']);
}