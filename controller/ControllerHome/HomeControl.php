<?php

function new_product(){
    
}
function login(){
    
    if(isset($_POST['btn_login']) && $_POST['btn_login']){
        $user_name  = $_POST['user_name'];
        $password  = $_POST['password'];
        $error = [];
        if(!empty($user_name) && !empty($password)){
            $user = user_select_login($user_name,$password);   
            if(!is_array($user)){   
                $error['user_name'] = " Tài khoản hoặc mật khẩu không chính xác ";
            }
        }else{
            $error['user_name'] = " Nhập tài khoản và mật khẩu";
        } 

        if(empty($error)){
            $_SESSION['user'] = $user;          
            if($_SESSION['user']['role'] == 1){                      
                header("location: admin/index.php");
            }else{
                header("location: index.php");
            }
        }
    }
    include "views/login.php";
}
function logout(){
    session_destroy();
    header("location: index.php");
}
function signup(){
    if(isset($_POST['signup']) && $_POST['signup']){
        $user_name  = $_POST['user_name'];
        $password       = $_POST['password'];
        $repassword = $_POST['repassword'];
        $fullname   = $_POST['fullname'];
        $email      = $_POST['email'];
        $tel        = $_POST['tel'];
        $address    = $_POST['address'];       
       
        $create_at  = date('d-m-y');
        $error = [];

        if(!empty($user_name)){
            $user_select_name = user_select_by_name($user_name);
            if(is_array($user_select_name)){
                $error['user_name'] = "Tên tài khoản đã tồn tại";
            }
            if(strlen($user_name) < 8 ) { $error['user_name']= "Tên tài khoản phải từ 8 ký tự trở lên";}
        }else{
             $error['user_name'] = "Nhập tên tài khoản !";
        }
       
        if(!empty($password)){
            if(strlen($password) < 8 ) { $error['password']= "Mật khẩu phải từ 8 ký tự trở lên";}
        }else{
            $error['password'] ="Nhập mật khẩu !";
        } 

        if($repassword !== $password ){
            $error['repassword'] = "Sai mật khẩu";
        }

        if(empty($fullname)){
            $error['fullname'] ="Nhập họ và tên !";
        }

        if(!empty($email)){
            $user_select_email = user_select_by_email($email);
            if(is_array($user_select_email)){
                $error['email'] = "Địa chỉ email đã tồn tại";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] ="Nhập đúng định dạng email !";
            }
        }else{
            $error['email'] ="Nhập đia chỉ email !";
        }

        if(!empty($tel)){
            if(!is_numeric($tel)){
                $error['tel'] ="Nhập số điện thoại phải là 10 số   !";
            }
            if(strlen($tel) != 10){
                $error['tel'] ="Nhập số điện thoại phải là 10 số   !";
            }
        }else{
            $error['tel'] ="Nhập số điện thoại !";
        }

        if(empty($address)){
            $error['address'] ="Nhập địa chỉ !";
        }

        if(empty($error)){
            customer_insert($user_name, $password, $fullname, $email, $tel, $address, $create_at );
            header("location: index.php?act=form_login");
        }
            
       
    }
    include "views/signup.php";
}