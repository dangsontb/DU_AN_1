
<?php
    session_start();

    ob_start();

    include "model/pdo.php";
    include "model/product.php";
    include "model/category.php";
    include "model/brand.php";
    include "model/user.php";
    include "model/size.php";
    include "model/cart.php";
    include "model/comment.php";
    include "global.php";
    include "controller/ControllerHome/HomeControl.php";
    include "controller/ControllerHome/ProductControl.php";
    include "controller/ControllerHome/FilterControl.php";


    if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];


    $spnew=product_select_all();
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
            case 'keyword':
                if(isset($_POST['submit'])){
                    $keyw = $_POST['keyw'];
                    $product = product_select_keyw($keyw);
                }
                include "views/search.php";
                break;
            case 'product_detail':
                product_detail();
                
                break;
            case 'comment':
                comment_insert();
                break;
            // ----------------------------------filter---------------------------------

            case 'productOld':
               
                productOld();
              
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
=======


>>>>>>> 962342823ecc25d05d0a99c41b1a7e2855270779
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
                    
                    if(isset($_POST['soluong']) && $_POST['soluong'] > 0){
                        $soluong=$_POST['soluong'];
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
                        $item=array($id_product,$tensp,$hinh,$gia,$soluong);
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
<<<<<<< HEAD
             
            case 'thanhtoan':
                if ((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])) {
                    // Lấy dữ liệu
                    $tongdonhang=$_POST['tongdonhang'];
                    $name=$_POST['name'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $pttt=$_POST['pttt'];
                    $ma_donhang="SHN".rand(0,999999);
                    //Tạo đơn hàng và trả về đơn hàng;
                    //$id_product,$tensp,$hinh,$gia,$soluong
                    $id_donhang=taodonhang($ma_donhang,$tongdonhang,$pttt,$name,$address,$email,$phone);
                    
                    $_SESSION['id_donhang']=$id_donhang;
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'] )>0)){
                        foreach ($_SESSION['giohang']  as $item) {
                            addtocarrt($id_donhang,$item[0],$item[1],$item[2],$item[3],$item[4]);
                        }
                        unset($_SESSION['giohang']);
                    }
                }
                include "views/cart/viewbill.php";
                break;


=======
    
>>>>>>> 962342823ecc25d05d0a99c41b1a7e2855270779
            default:
                include "views/home.php";
                break;
        }
    }else{
       
        include "views/home.php";

    }
    include "views/footer.php";
?>