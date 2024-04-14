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
function change_password(){
        // echo "<pre>";
        // print_r($_SESSION['user']);
    if(isset($_SESSION['user'])){
        $user_id = $_SESSION['user']['user_id'];
        $user_name  = $_SESSION['user']['user_name'];
        $fullname = $_SESSION['user']['fullname'];
        $email  = $_SESSION['user']['email'];
        $phone = $_SESSION['user']['phone'];
        $address = $_SESSION['user']['address'];
        $phone = $_SESSION['user']['phone'];
        $role = $_SESSION['user']['role'];
        $create_at = $_SESSION['user']['create_at'];
        $password = $_SESSION['user']['password'];
    }
    if(isset($_POST['confirm_change'])){
        $password = $_POST['password'];
        $new_password = $_POST['new_password'];
        $confirm_new_password = $_POST['confirm_new_password'];
        $error = [];

        if(empty($password)){
     
            $error['password'] = "Nhập mật khẩu";
        }else if($password !== $_SESSION['user']['password']){
          
            $error['password'] = "Mật khẩu không chính xác";
        }
        if(empty($new_password)){
         
            $error['new_password'] = "Nhập  mật khẩu mới";
        }elseif(strlen($new_password) < 8){
         
            $error['new_password'] = "Mật khẩu lớn hơn 8 ký tự";
        }

        if(empty($confirm_new_password)){
       
            $error['confirm_new_password'] = "Nhập mật khẩu";
        }elseif($new_password !== $confirm_new_password){
        
            $error['confirm_new_password'] = "Mật khẩu không trùng khớp";
        }
        
        if(empty($error)){
            user_update($user_id, $user_name, $confirm_new_password, $fullname, $email, $phone, $address, $role, $create_at );
            $_SESSION['user'] = user_select_by_id($user_id);
            header("location: index.php");
        }
        
    }
    include 'views/change_password.php';
}
function forgot_password(){
    if(isset($_POST['btn_confirm'])){
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $error = [];
        if(!empty($user_name) && !empty($email)){
           $user =  user_select_forgot_password($email, $user_name);
          
           if(empty($user)){
            $error['user_name'] = "Tài khoản hoặc email không chính xác";
           }else{
            $password = "Mật khẩu của bạn là:  ".$user['password'];
           }
        }else{
            $error['user_name'] = "Vui lòng nhập tài khoản và email";
        }
    }   
    include 'views/forgot_password.php';
}
