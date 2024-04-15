<?php
    session_start();
    if( isset($_SESSION['user']) && $_SESSION['user']['role']==1){

        include "../model/pdo.php";
        include "../model/category.php";
        include '../model/brand.php';
        include "../model/product.php";
        include "../model/user.php";
        include '../model/image_product.php';
        include '../model/comment.php';
        include "../model/order_detail.php";
        include "../model/order.php";
        include "../model/status.php";
        include "../model/statistical.php";
        include '../controller/ControllerAdmin/ProductControl.php';
        include '../controller/ControllerAdmin/UserControl.php';
        include '../controller/ControllerAdmin/BrandControl.php';
        include '../controller/ControllerAdmin/CateControl.php';
        include '../controller/ControllerAdmin/CommentControl.php';
        include '../controller/ControllerAdmin/OderControl.php';
        include '../controller/ControllerAdmin/StatisticalControl.php';
        
        include "header.php";
        include "../global.php";
        $doanh_thu_ngay = doanh_thu_1_ngay();
        $doanh_thu_tuan = doanh_thu_7_ngay_qua();
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

                //-----------------------------------Comment-----------------------------

                case 'list_comment':
                // $list_comment = comments_select_by_product_admin();
                // include 'comment/list_comment.php';
                list_comment();
                break;
                case 'comment_detail':
                    select_comment_by_id();
                    break;
                case 'delete_comment':
                    delete_comment();
                    break;
                case 'delete_comment_by_checkbox':
                    delete_comment_by_checkbox();
                    break;

                // ---------------------------------------Order------------------------------------    
                case 'list_bill':
                    list_order();
                    break;
                case 'order_detail':
                    order_detail();
                
                    break;
                case 'update_order':
                    if(isset($_GET['order_id']) && $_GET['order_id'] > 0 && isset($_GET['id_status']) && $_GET['id_status'] > 0){
                        $id_status = $_GET['id_status'];
                        $order_id = $_GET['order_id'];
                        $order = order_select_by_id($order_id);
                        update_order($order_id, $order['ma_donhang'], $order['tong_donhang'], $order['phuongthuc_thanhtoan'], $order['order_name'], $order['phone'], $order['address'], $id_status, $order['id_user'],$order['create_at']);
                        header("location: ?act=list_bill");
                    }  
                    break;  
                case "select_bill":
                    if(isset($_GET['status_id']) && $_GET['status_id'] > 0){
                        if(!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] <= 1 ){
                            $page = 1;
                        }else{
                            $page = $_GET['page'];
                        }
                        $status =status_select_all();
                        $quantity = 6;
                        $status_id = $_GET['status_id'];
                        $total_order_by_status_id =  order_select_by_id_status($status_id);
                        $list_order =  order_select_pages_by_id_status($status_id,$page , $quantity);
                        $total_pages =  ceil(count($total_order_by_status_id) / $quantity);
                    }
                    include "order/list_order_status.php";
                    break;
                //-------------------------------------------statistical--------------------------------------
                case 'list_statistical':
                    selling_products();
                        
                    break;
                    
                case 'best_selling_brand':
                    best_selling_brand();
                        
                    break;
                case 'bieudo_brand':
                    $list_bieudo = total_best_selling_brand();
                    include "statistical/bieudo.php";

                    break;
                default : 
                    include "home.php";
                    break;
                
            }
        }else{
            include "home.php";
        } 
        include "footer.php";
    }else{
       header("location: http://localhost/du_an_1/");
    }
?> 