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
            
            if(is_array($user)){   
                $_SESSION['user'] = $user;
              
                if($_SESSION['user']['role'] == 1){                      
                    header("location: admin/index.php");
                }else{
                    header("location: index.php");
                }
            }else{
                $error['user_name'] = " Tài khoản hoặc mật khẩu không chính xác ";
            }
        }else{
            $error['user_name'] = " Nhập tài khoản và mật khẩu";
        } 
    }
    include "views/login.php";
   
}
function logout(){
    session_destroy();
    header("location: index.php");
}