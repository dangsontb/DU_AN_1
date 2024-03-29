<?php
    session_start();
    ob_start();
    include "model/pdo.php";
    include "model/product.php";
    include "model/category.php";
    include "model/brand.php";
    include "model/user.php";
    include "global.php";
    include "controller/ControllerHome/HomeControl.php";
    include "controller/ControllerHome/ProductControl.php";

    $spnew=loadall_sanpham_home();
    $list_category=category_select_all();
    $list_brand=brand_select_all();
    $product_top10=loadall_product_top10();

    include "views/header.php";

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'gioithieu':
           
                include "views/gioithieu.php";
                break;
            // ---------------------------------PRODUCT----------------------------------------------
            case 'sanpham':
                if(isset($_GET['idcate'])&&($_GET['idcate']>0)){
                    $cate_id=$_GET['idcate'];
                    $list_product=loadall_sanpham_cate("",$cate_id);
                    include "views/sanpham_dm.php";
                }else{
                    include "views/home.php";
                }
                break;

            case 'sanpham_brand':
                if(isset($_GET['idbrand'])&&($_GET['idbrand']>0)){
                    $brand_id=$_GET['idbrand'];
                    $list_product=loadall_sanpham_brand("",$brand_id);
                    include "views/sanpham_brand.php";
                }else{
                    include "views/home.php";
                }
                break;
            case 'product_detail':
                product_detail();
                
                break;
                
            // -------------------------- User ------------------------------------------------------
            case 'form_login':
           
                include "views/login.php";
                break;
            case 'login':
                login();   
                break;
            case 'logout':
                logout();
                break;
            case 'register':
                include "views/signup.php";
                break;
            case 'signup':
                signup();
                break;
            
            default:

                include "views/home.php";
                break;
        }
    }else{
       
        include "views/home.php";

    }
    include "views/footer.php";
?>