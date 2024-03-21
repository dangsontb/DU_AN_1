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

                case 'edit':
                    if(isset($_GET['id']) && ($_GET['id']) >0 ){
                          
                       $show_one_brand = brand_select_by_id($_GET['id']);
                    }
                   
                    include 'brand/update_brand.php';
                    break;

                case 'update_brand':
                    
                    if(isset($_POST['update']) && $_POST['update']){
                        $brand_id = $_POST['brand_id'];
                        $brand_name = $_POST['brand_name'];
                        
                        if(!empty($brand_name)){
                            $brand_name_unique = brand_select_name($brand_name);
                            if(is_array($brand_name_unique)){
                                $brand_name_error = "Tên này đã tồn tại";
                            }else{
                                brand_update($brand_id,$brand_name);         
                            }
                        }else $brand_name_error = "Không được để trống !";
                       
                    }
                    $list_brand = brand_select_all();
                    include 'brand/list_brand.php';
                    break;    

              case 'delete':
                if(isset($_GET['id']) && ($_GET['id']) >0 ){

                    delete_brand($_GET['id']);
                }
                $list_brand = brand_select_all();
                include "brand/list_brand.php";
                break;
                  
            // --------------------------PRODUCT----------------------------------
            case 'list_product':
            
                $list_product = product_select_all() ;
                include 'product/list_product.php';
                break;
            case 'add_product':
                include 'product/add_product.php';
                break;
            default : include "home.php";
        }
    }else{
        include "home.php";
    }
?>