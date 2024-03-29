<?php
    include "../model/pdo.php";
    include "../model/category.php";
    include '../model/brand.php';
    include "../model/product.php";
    include "../model/user.php";
    include '../model/image_product.php';

    include '../controller/ControllerAdmin/ProductControl.php';
    include '../controller/ControllerAdmin/UserControl.php';
    include '../controller/ControllerAdmin/BrandControl.php';
    include '../controller/ControllerAdmin/CateControl.php';


    include "header.php";
    include "../global.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            // --------------------------Category----------------------------------
            
            case 'list_category':
                list_cate();
                break;

            case 'delete_cate':
                delete_cate();
                break;
            case 'delete_cate_checkbox':
                delete_cate_checkbox();
                break;
            
            case 'add_cate':
                add_cate();
                break;

            case 'edit_cate':
               edit_cate();
               break;  
               
            case 'update_cate':
               update_cate();
               break;  

            // --------------------------BRAND----------------------------------
            case 'list_brand':
                list_brand();
                break;
            
            case 'add_brand':
            
                add_brand();
                break;
            case 'delete_brand':
                delete_brand();
                break;
            case 'delete_brand_checkbox':
                delete_brand_checkbox();
                break;
            case 'edit_brand':
                edit_brand();
                break;  
            
            case 'update_brand':
                update_brand();
                break;  
            // --------------------------PRODUCT----------------------------------
            case 'list_product':         
                list_product();
                break;
            case 'add_product':
               
                add_product();
                break;
            case 'edit_product':
                edit_product();
                break;  
            case 'update_product':
                update_product();         
                break;
                
            case 'delete_product':
                delete_product();         
                break;  
            case 'delete_product_by_checkbox':
                delete_product_by_checkbox();         
                break;  

                // case 'search':
                //     if(isset($_POST['btn_submit']) && ($_POST['btn_submit'])){
                //         $keyword = $_POST['keyword'];
                //     }else{
                //         $keyword = "";
                //     }
                //    $product = loadall_sanpham_brand($keyword);
                //     include './views/search.php';
                //     break;

            // --------------------------User----------------------------------    
            
            case 'list_user':
                list_user();
                
            break;

            case 'add_user':
                add_user();
                break;
            case 'delete_user':
                delete_user();
                break;
            case 'delete_user_by_checkbox':
                delete_user_by_checkbox();
                break;   
            case 'edit_user':
                edit_user();
                break;
            case 'update_user';
                update_user();
                break;
            default : include "home.php";
        }
    }else{
        include "home.php";
    }
?>