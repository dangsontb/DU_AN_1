<?php
    include "../model/pdo.php";
    include "../model/category.php";
    include '../model/brand.php';
    include "../model/product.php";
    include "../model/user.php";
    include '../model/image_product.php';
    include './ControllerAdmin/ProductControl.php';
    include './ControllerAdmin/UserControl.php';
    include "header.php";

    include "../global.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            // --------------------------Category----------------------------------
            
            case 'list_category':
                $list_category = category_select_all();
                include "category/list_cate.php";
                break;

                case 'delete_cate':
                    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
                       delete_category($_GET['id']);
                    } 
                    $list_category = category_select_all();

                    include "category/list_cate.php";
               break;

               case 'add_cate':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                   
                       $cate_name=$_POST['cate_name'];
                       
                       if(!empty($cate_name)){
                    
                        $cate_name_unique = category_select_name($cate_name);
                        if(is_array($cate_name_unique)){
                            $cate_name_error = "Tên này đã tồn tại";
                        }else{
                            category_insert($cate_name);
                        }
                    }else $cate_name_error = "Không được để trống !"; 
                   }
                include 'category/add_cate.php';
                break;

            case 'edit_cate':
               if(isset($_GET['id']) &&  ($_GET['id']) > 0){
                $show_one_cate =  category_select_by_id($_GET['id']);
                } 
             
               include 'category/update_cate.php';  
               break;  
               
             case 'update_cate':
               if(isset($_POST['update']) && ($_POST['update'])){
                $cate_id=$_POST['cate_id'];
                   $cate_name=$_POST['cate_name'];
                   category_update($cate_id,$cate_name); 
                //    if($cate_name!=""){
                //     $thong_bao= "Không được để trống";
                //    }else{
                    
                //    }
               }
               $list_category = category_select_all();
               include 'category/list_cate.php';
               break;  

            // --------------------------BRAND----------------------------------
            case 'list_brand':
                $list_brand = brand_select_all();
                include "brand/list_brand.php";
                break;

            case 'add_brand':
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
                break;
            case 'delete_brand':
                    if(isset($_GET['id']) &&  ($_GET['id']) > 0){
                    delete_brand($_GET['id']);
                    } 
                    $list_brand = brand_select_all();

            include 'brand/list_brand.php';
            break;

            case 'edit_brand':
            if(isset($_GET['id']) &&  ($_GET['id']) > 0){
                $show_one_brand =  brand_select_by_id($_GET['id']);
                } 
            
            include 'brand/update_brand.php';
            break;  
            
            case 'update_brand':
            if(isset($_POST['update']) && ($_POST['update'])){
                $brand_id=$_POST['brand_id'];
                $brand_name=$_POST['brand_name'];
                
                brand_update($brand_id,$brand_name);
            }
            $list_brand = brand_select_all();
            include 'brand/list_brand.php';
            break;  
            // --------------------------PRODUCT----------------------------------
            case 'list_product':
               
                $list_product = product_select_all() ;
                include 'product/list_product.php';
                break;
            case 'add_product':
               
                add_product();
                break;
            case 'edit_product':
                edit_product();
                break;  
            case 'update_product':
                update_product();
                $list_product = product_select_all() ;  
                include "product/list_product.php";
                break;
                
            case 'delete_product':
                delete_product();
                $list_product = product_select_all() ;
                include 'product/list_product.php';
                break;  

            // --------------------------User----------------------------------    
            
            case 'list_user':
            include 'user/list_user.php';
            break;

            case 'add_user':
                add_user();
                break;
            default : include "home.php";
        }
    }else{
        include "home.php";
    }
?>