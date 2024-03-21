<?php
    include "../model/pdo.php";
    include "../model/category.php";
    include '../model/brand.php';
    include '../model/product.php';
    include '../model/image_product.php';

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

            // --------------------------PRODUCT----------------------------------
            case 'list_product':
                if(isset($_POST['themmoi']) $$ $_POST['themmoi']){

                }
                $list_product = product_select_all() ;
                include 'product/list_product.php';
                break;
            case 'add_product':
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                   $name = $_POST['name'] ;
                   $price = $_POST['price'] ;
                   $image = $_FILES['image'] ;
                   $description = $_POST['description'] ;
                   $sale = $_POST['sale'] ;
                   $create_at = $_POST['create_at'] ;
                   $view = $_POST['view'] ;
                   $cate_id  = $_POST['cate_id '] ;
                   $brand_id  = $_POST['brand_id '] ;
                }
                include 'product/add_product.php';
                break;
            // --------------------------User----------------------------------
            case 'list_user':
                include 'user/list_user.php';
                break;
            default : include "home.php";
        }
    }else{
        include "home.php";
    }
?>