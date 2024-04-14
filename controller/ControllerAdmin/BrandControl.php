<?php

function list_brand(){
    if(!isset($_GET['page']) || $_GET['page'] < 1){
        $page= 1;
    }else{
        $page = $_GET['page'];
    }
    $quantity = 6;
    $brands = brand_select_all();
    $list_brand = brand_select_page($page, $quantity);
    $show_number_pages = brand_number_pages($brands , $quantity);
    include "brand/list_brand.php";
    // echo $show_number_pages;
}
function add_brand(){
    if(isset($_POST['themmoi']) && $_POST['themmoi']){
        $brand_name = $_POST['brand_name'];
       
        if(!empty($brand_name)){
        
            $brand_name_unique = brand_select_name($brand_name);
            if(is_array($brand_name_unique)){
                $brand_name_error = "Tên này đã tồn tại";
            }else{
                brand_insert($brand_name);
                
                header("location: index.php?act=list_brand");
            }
        }else $brand_name_error = "Không được để trống !";                 
    }
    include "brand/add_brand.php";
}
function delete_brand(){
    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
        brand_delete($_GET['id']);
        header("location: index.php?act=list_brand");
    } 
    // $list_brand = brand_select_all();
    // include 'brand/list_brand.php';
}
function edit_brand(){
    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
        $show_one_brand =  brand_select_by_id($_GET['id']);
        } 
    
    include 'brand/update_brand.php';
}
function update_brand(){
    if(isset($_POST['update']) && ($_POST['update'])){
        $brand_id=$_POST['brand_id'];
        $brand_name=$_POST['brand_name'];   
        if(!empty($brand_name)){
            $brand_name_unique = brand_select_name($brand_name);
            if(is_array($brand_name_unique)){
                $brand_name_error = "Tên này đã tồn tại";
                header("location: index.php?act=edit_brand&id=".$brand_id);
            }else{
                brand_update($brand_id,$brand_name);
                header("location: index.php?act=list_brand");
            }
        }else{
            $brand_name_error = "Không được để trống !"; 
            $show_one_brand =  brand_select_by_id($brand_id);
            include 'brand/update_brand.php';
        }
           
    }
}
function delete_brand_checkbox(){
    if(isset($_POST['delete_btn']) ){
        if(isset($_POST['brands_id'])){
            $brands_id = $_POST['brands_id'];
            if(!empty($brands_id)){
                brand_delete($brands_id);
                header("location: index.php?act=list_brand");
            }
        }
    } 
    $list_brand = brand_select_all();
    include 'brand/list_brand.php';
}