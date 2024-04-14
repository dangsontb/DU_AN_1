<?php

function list_cate(){
    if(!isset($_GET['page']) || $_GET['page'] < 1){
        $page= 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 6;
    $cate_select_all = category_select_all();
    $list_category = category_select_page($page , $quantity);
    $total_pages = category_number_pages($cate_select_all,$quantity);
    include "category/list_cate.php";
    // echo $total_pages;
}
function delete_cate(){
    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
        category_delete($_GET['id']);
        header("location: index.php?act=list_cate");
    } 
    // $list_category = category_select_all();
    // include "category/list_cate.php";
}
function delete_cate_checkbox(){  
        if(isset($_POST['delete_btn']) ){
            if(isset($_POST['categories_id'])){
                $categories_id = $_POST['categories_id'];
                if(!empty($categories_id)){
                    category_delete($categories_id);
                    header("location: index.php?act=list_cate");
                }
            }
        } 
        // $list_category = category_select_all();
        // include 'category/list_cate.php';
}
function add_cate(){
    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                
        $cate_name=$_POST['cate_name'];
        
        if(!empty($cate_name)){
    
        $cate_name_unique = category_select_name($cate_name);
        if(is_array($cate_name_unique)){
            $cate_name_error = "Tên này đã tồn tại";
        }else{
            category_insert($cate_name);
            header("location: index.php?act=list_category");
        }
    }else $cate_name_error = "Không được để trống !"; 
    }
    include 'category/add_cate.php';
}
function edit_cate(){
    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
        $show_one_cate =  category_select_by_id($_GET['id']);
    } 
     
    include 'category/update_cate.php';  
}
function update_cate(){
    if(isset($_POST['update']) && ($_POST['update'])){
        $cate_id=$_POST['cate_id'];
        $cate_name=$_POST['cate_name'];
        if(!empty($cate_name)){
            $cate_name_unique = category_select_name($cate_name);
            if(is_array($cate_name_unique)){
                $cate_name_error = "Tên này đã tồn tại";
                header("location: index.php?act=edit_cate&id=".$cate_id);
            }else{
                category_update($cate_id,$cate_name); 
                header("location: index.php?act=list_category");
            }
        }else
            $cate_name_error = "Không được để trống !"; 
            $show_one_cate =  category_select_by_id($cate_id);
            include 'category/update_cate.php';
    }
        // category_update($cate_id,$cate_name); 
        // header("location: index.php?act=list_category");
        //    if($cate_name!=""){
        //     $thong_bao= "Không được để trống";
        //    }else{
            
        //    }
}
    // $list_category = category_select_all();
    // include 'category/list_cate.php';
// }