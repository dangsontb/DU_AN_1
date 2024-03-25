<?php

function list_brand(){
    $list_brand = brand_select_all();
    include "brand/list_brand.php";
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
            }
        }else $brand_name_error = "Không được để trống !";                 
    }
    include "brand/add_brand.php";
}
function delete_brand(){
    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
        brand_delete($_GET['id']);
    } 
    $list_brand = brand_select_all();
    include 'brand/list_brand.php';
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
        
        brand_update($brand_id,$brand_name);
    }
    $list_brand = brand_select_all();
    include 'brand/list_brand.php';
}
function delete_brand_checkbox(){
    if(isset($_POST['delete_btn'])){
        $brand_id = $_POST['brands_id'];
        brand_delete($brand_id);
    }
    $list_brand = brand_select_all();
    include 'brand/list_brand.php';
}