
<?php
    session_start();

    ob_start();

    include "model/pdo.php";
    include "model/product.php";
    include "model/category.php";
    include "model/brand.php";
    include "model/user.php";
    include "model/size.php";
    include "model/order_detail.php";
    include "model/order.php";
    include "model/comment.php";
    include "global.php";
    include "controller/ControllerHome/HomeControl.php";
    include "controller/ControllerHome/ProductControl.php";
    include "controller/ControllerHome/FilterControl.php";
    include "controller/ControllerHome/CartControl.php";


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
                    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
                        $page = 1;
                    }else{
                        $page = $_GET['page'];
                    }
                    $quantity = 9;
                    $total_product_category=loadall_sanpham_cate("",$cate_id);
                    $list_product=product_select_page_category($cate_id ,$page, $quantity);
                    $total_pages = ceil(count($total_product_category) / $quantity);
                    include "views/sanpham_dm.php";
                }
                break;

            case 'sanpham_brand':
                if(isset($_GET['idbrand'])&&($_GET['idbrand']>0)){
                    $brand_id=$_GET['idbrand'];
                    if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
                        $page = 1;
                    }else{
                        $page = $_GET['page'];
                    }
                    $quantity = 9;
                    $total_product_brand=loadall_sanpham_brand("",$brand_id);
                    $list_product_brand=product_select_page_brand($brand_id ,$page, $quantity);
                    $total_pages = ceil(count($total_product_brand) / $quantity);
                    include "views/sanpham_brand.php";
                }
                break;
            case 'keyword':
                find_keyword();
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
            case 'priceAsc':
                product_price_asc();
                break;

            case "priceDesc":
                product_price_desc();
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
            case 'change_password':
                change_password();
                break;
            case 'forgot_password':
                forgot_password();
                break;
            // --------------------------------------------------------------- Giỏ hàng -----------------------------------------------------------
            case 'viewcart':
                include "views/cart/viewcart.php";
                break;

            case 'addtocart':
                // Lấy dữ liệu từ form
                add_cart();

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
            
            case "plus":
                plus_quantity();
                break;
              
            case "minus":
                minus_quantity();
                break;
              
            case 'thanhtoan':
                if ((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])) {
                    // Lấy dữ liệu
                    $user_id = $_POST['user_id'];
                    $tongdonhang=$_POST['tongdonhang'];
                    $name=$_POST['name'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $pttt=$_POST['pttt'];
                    $ma_donhang="SHN".rand(0,999999);
                    $status_id = 1;
                    $date = date('Y-m-d');
                    //Tạo đơn hàng và trả về đơn hàng;
                    $id_donhang=taodonhang($ma_donhang, $tongdonhang, $pttt,$name , $phone , $address , $status_id, $user_id, $date);
            
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                        foreach ($_SESSION['giohang']  as $item) {
                                //$id_product,$tensp,$hinh,$gia,$soluong
                            $product_by_id = product_select_by_id($item[0]);
                            $product_quantity = $product_by_id['product_quantity'] - $item[4];
                            product_update($product_by_id['product_id'],$product_by_id['name'],$product_by_id['price'],$product_by_id['image'],$product_by_id['description'],$product_by_id['sale'],$product_quantity,$product_by_id['create_at'],$product_by_id['view'],$product_by_id['cate_id'],$product_by_id['brand_id']);
                            
                            add_order_detail($id_donhang,$item[0],$item[4],$item[3],$item[2],$item[1]);
                          
                        }
                    }
                }
                include "views/cart/viewbill.php";
                break;
            
            case 'order_history':
                if (isset($_SESSION['user'])){
                    $id=$_SESSION['user']['user_id'];
                    $order_history =history($id);
                }
                include "views/cart/history.php";
                break;
            
            case 'history_order_detail':
                if (isset($_GET['order_id'])) {
                    $order_id=$_GET['order_id'];
                    $history_order_detail = history_order_detail($order_id);
                }
                include "views/cart/detail_history.php";
                break;


            // case 'delete_history':
            //     if(isset($_GET['id']) &&($_GET['id']) > 0){
            //         $id = $_GET['id'] ;
            //         delete_history_order_detail($_GET['id']);
                    
            //     } 
            //     header('location: index.php?act=history_order_detail');
            //     $list_history=history_order_detail();
            //     break;


            default:
                include "views/home.php";
                break;
        }
    }else{
       
        include "views/home.php";

    }
    include "views/footer.php";
?>