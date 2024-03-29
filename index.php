<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
</body>
</html>
<?php
    session_start();

    ob_start();
    include "model/pdo.php";
    include "model/product.php";
    include "model/category.php";
    include "model/brand.php";
    include "model/user.php";
    include "model/size.php";
    include "model/comment.php";
    include "global.php";
    include "controller/ControllerHome/HomeControl.php";
    include "controller/ControllerHome/ProductControl.php";

    $spnew=loadall_sanpham_home();
    $list_category=category_select_all();
    $list_brand=brand_select_all();
    $product_top10=loadall_product_top10();
    $tong_sanpham  = count_product();
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
            case 'comment':
                
                comment_insert();
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

                case 'search':
                    if(isset($_POST['btn_submit'])){
                        $keyword = $_POST['keyword'];

                    }else{
                        $keyword = "";
                    }
                   $product = loadall_sanpham_brand($keyword);
                    include './views/search.php';
                    // echo $keyword;die;
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