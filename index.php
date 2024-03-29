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
    //include "model/cart.php";
    include "model/comment.php";
    include "global.php";
    include "controller/ControllerHome/HomeControl.php";
    include "controller/ControllerHome/ProductControl.php";

    if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];


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

<<<<<<< HEAD


            // --------------------------------------------------------------- Giỏ hàng -----------------------------------------------------------
            case 'viewcart':
                include "views/cart/viewcart.php";
                break;

            case 'addtocart':
                // Lấy dữ liệu từ form
                if (isset($_POST['addtocart'])) {
                    $id_product = $_POST['product_id'];
                    $tensp = $_POST['tensp'];
                    $hinh = $_POST['hinh'];
                    $gia = $_POST['gia'];
                    
                    if(isset($_POST['soluong'])&&($_POST['soluong'])>1){
                        $sl=$_POST['soluong'];
                    }else{
                        $soluong=1;
                    }
                    $check=0;
                    //Kiểm tra sản phẩm có tồn tại trong giỏ hàng k
                    //Nếu có -> Cập nhập số lượng
                    $i=0; // Định vị xem mk ở sản phẩm nào
                    foreach ($_SESSION['giohang'] as $sp) {
                        if ($sp[1]===$tensp) {
                            $soluongmoi=$soluong + $item[4];
                            $_SESSION['giohang'][$i][4]+=$soluongmoi;
                            $check=1;
                            break;
                        }
                        $i++;
                    }

                    if($check==0){ //Không: add sản phẩm mới

                        //Khởi tạo mảng con trước khi đưa vào giỏ hàng
                        $item=array($id_produc,$tensp,$hinh,$gia,$soluong);
                        $_SESSION['giohang'][]=$item;
                        // $spadd= [$id_product, $tensp , $hinh, $gia,  $soluong];
                        // array_push($_SESSION['giohang'], $spadd);
                    }
                }
                header("location: index.php?act=viewcart");

                //include "views/cart/viewcart.php";
                break;

            case 'delete_cart':
                if(isset($_GET['i'])){
                    $i=$_GET['i'];
                    array_splice($_SESSION['giohang'],$i,1);
                }else{
                    $_SESSION['giohang']=[];
                }
                header('location: index.php?act=viewcart');

                //     if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0))
                //         array_splice($_SESSION['giohang'],$_GET['i'],1);
                // }else{
                //     if(isset( $_SESSION['giohang'])) unset( $_SESSION['giohang']);
                // }


                // if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                //     header("location: index.php?act=viewcart");
                // }else{
                //     header("location: index.php");
                break;
    
=======
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

            
>>>>>>> f4d9d5cc5d5b27b4d8c50555873b1f6f2e56c49d
            default:

                include "views/home.php";
                break;
        }
    }else{
       
        include "views/home.php";

    }
    include "views/footer.php";
?>